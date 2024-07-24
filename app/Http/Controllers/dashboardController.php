<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function merchantIndex()
    {
        if (!Auth::check()) {
            return redirect('/Login');
        }
        $user = Auth::user();
        return view('merchant.dashboard', ['user' => $user]);
    }

    public function customerIndex()
    {
        if (!Auth::check()) {
            return redirect('/Login');
        }
        $user = Auth::user();
        return view('customer.dashboard',  ['user' => $user]);
    }
}
