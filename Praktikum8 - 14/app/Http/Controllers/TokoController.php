<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
    public function product()
    {
        $products = Product::all();
    return view('toko/product', compact('products'));
    }
    public function customer()
    {
        $customers = Customer::all();
        return view('toko/customer', compact('customers'));
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
        return redirect()->route('product.admin')->with('success', 'Product Berhasil Disimpan.');
    }
    public function edit(Product $product)
    {
        return view('toko/edit', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.admin')->with('delete', 'Product Berhasil Dihapus.');
    }
    public function update(Request $request,  Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('product.admin')->with('update', 'Product Berhasil Di Perbaharui.');
    }

    public function createc()
    {
        return view('toko/createc');
    }
    public function storec(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);
        Customer::create($request->all());
        return redirect()->route('customer.admin')->with('success', 'Customer Berhasil Disimpan.');
    }
    public function editc(Customer $customer)
    {
        return view('toko/editc', compact('customer'));
    }
    public function destroyc(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.admin')->with('delete', 'Customer Berhasil Dihapus.');
    }
    public function updatec(Request $request,  Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);
        $customer->update($request->all());
        return redirect()->route('customer.admin')->with('update', 'Customer Berhasil Di Perbaharui.');
    }
}
