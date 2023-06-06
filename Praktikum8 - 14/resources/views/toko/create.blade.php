@extends('template/admin/index')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Produk</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin">Home</a></li>
                <li class="breadcrumb-item active">Create Product</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" id="nama_produk" class="form-control" placeholder="Nama Produk">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="description" id="deskripsi" class="form-control" placeholder="Description">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
