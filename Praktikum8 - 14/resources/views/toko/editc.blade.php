@extends('template/admin/index')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Edit Customer</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin">Home</a></li>
            <li class="breadcrumb-item active">Edit Customer</li>
        </ol>
    </div>
    </div>
@endsection

@section('content')
    <form action="{{ route('customer.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="number" name="no_hp" id="no_hp" class="form-control"
                value="{{ $customer->no_hp }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
