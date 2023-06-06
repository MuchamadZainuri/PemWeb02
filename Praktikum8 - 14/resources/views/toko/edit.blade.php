@extends('template/admin/index')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Edit Product</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin">Home</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>
    </div>
    </div>
@endsection

@section('content')
    <form action="{{ route('produk.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" class="form-control"
                value="{{ $product->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
