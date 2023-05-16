<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('P9/user/index', ['kategoriuser' => 'admin']);
    }
    public function daftar()
    {
        $ar_kategori = ['Dosen', 'mahasiswa', 'Staff'];
        return view('P9/user/daftar', ['kategori' => $ar_kategori]);
    }
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view(
            'P9/user/sukses',
            ['nama' => $nama, 'email' => $email, 'kategori' => $kategori, 'alamat' => $alamat]
        );
    }
}
