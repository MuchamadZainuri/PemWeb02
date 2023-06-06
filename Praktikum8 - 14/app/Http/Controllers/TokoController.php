<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

use App\Models\Product;
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
        $products = Product::all();
    return view('toko/produk', compact('products'));
    }
    public function pelanggan()
    {
        $pelangan = Pelanggan::all();
        return view('toko/pelanggan', compact('pelangan'));
    }
    public function create()
    {
        return view('toko/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product Berhasil Disimpan.');
    }
    public function edit(Product $product)
    {
        return view('toko/edit', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('produk.admin')->with('delete', 'Product Berhasil Dihapus.');
    }
    public function update(Request $request,  Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('produk.admin')->with('update', 'Product Berhasil Di Perbaharui.');
    }
}
