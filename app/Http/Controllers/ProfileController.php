<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('merchant.dashboard', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login

        // Validasi data
        $request->validate([
            'nama_perusahaan' => 'required|max:255|min:5',
            'telepon' => 'required|max:15|min:12',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ]);

        // Perbarui data pengguna
        $user->nama_perusahaan = $request->input('nama_perusahaan');
        $user->telepon = $request->input('telepon');
        $user->alamat = $request->input('alamat');
        $user->deskripsi = $request->input('deskripsi');
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }
}
