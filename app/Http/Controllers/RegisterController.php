<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register');
    }

    public function store(Request $request)
    {
        $simpan = $request->validate([
            'nama_perusahaan' => 'required|max:255|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
            'telepon' => 'required|max:15|min:12|unique:users',
            'password' => 'required|min:5|max:255',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'user_type' => 'required|in:customer,merchant',
        ]);

        $simpan['password'] = Hash::make($simpan['password']);
        User::create($simpan);

        Session::flash('Berhasil', 'Registrasi Berhasil ! Silahkan Login');
        return redirect('/Login');
    }
}
