<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }

    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();


            if (Auth::user()->user_type == 'merchant') {
                return redirect()->intended('/merchant/dashboard');
            } elseif (Auth::user()->user_type == 'customer') {
                return redirect()->intended('/customer/dashboard');
            }

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Email dan password Salah');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/Login');
    }
}
