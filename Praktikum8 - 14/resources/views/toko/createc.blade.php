@extends('template/admin/index')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Customer</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin">Home</a></li>
                <li class="breadcrumb-item active">Create Customer</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Customer:</label>
            <input type="text" name="name" id="nama_produk" class="form-control" placeholder="Nama Customer">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Nomor Handphone">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
