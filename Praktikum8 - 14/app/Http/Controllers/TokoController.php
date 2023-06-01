<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

use App\Models\Produk;
class TokoController extends Controller
{
    public function index()
    {
    return view('toko/index');
    }
    public function detail()
    {
    return view('toko/detail');
    }
    public function about()
    {
    return view('toko/about');
    }
    public function admin()
    {
        return view('toko/admin');
    }
    public function produk()
    {
        $products = Produk::all();
    return view('toko/produk', compact('products'));
    }
    public function pelanggan()
    {
        $pelangan = Pelanggan::all();
        return view('toko/pelanggan', compact('pelangan'));
    }
}
