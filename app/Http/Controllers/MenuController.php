<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $menu = Menu::all();
        return view('merchant.menu', ['user' => $user, 'menu' => $menu]);
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image',
            'harga' => 'required|int',
        ]);

        $path = $request->file('foto')->store('public/photos');

        Menu::create([
            'nama_menu' => $request->nama_menu,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
            'harga' => $request->harga,
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan');
    }

    public function show(Menu $menu)
    {
        return view('merchant.menu', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image',
            'harga' => 'required|int',
        ]);

        if ($request->hasFile('foto')) {
            Storage::delete($menu->foto);
            $path = $request->file('foto')->store('public/photos');
        } else {
            $path = $menu->foto;
        }

        $menu->update([
            'nama_menu' => $request->nama_menu,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
            'harga' => $request->harga,
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui');
    }

    public function destroy(Menu $menu)
    {
        Storage::delete($menu->foto);
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
    }
}
