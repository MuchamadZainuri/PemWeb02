<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user/index', ['kategoriuser' => 'admin']);
    }
    public function daftar()
    {
        $ar_kategori = ['Dosen', 'mahasiswa', 'Staff'];
        return view('user/daftar', ['kategori' => $ar_kategori]);
    }
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view(
            'user/sukses',
            ['nama' => $nama, 'email' => $email, 'kategori' => $kategori, 'alamat' => $alamat]
        );
    }


    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $jk = $request->input('jk');
        $cek = $request->input('tgl_cek');
        $tgl = $request->input('tgl_lahir');
        return view(
            'Tugas/form',
            ['nama' => $nama, 'jk' => $jk, 'cek' => $cek, 'tgl' => $tgl]
        );
    }
}
