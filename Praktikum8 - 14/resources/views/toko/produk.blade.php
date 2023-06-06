@extends('template/admin/index')

@section('content-header')
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
@endsection

@section('content')
<a href="{{ route('produk.create')}}" class="btn btn-success mb-3">
  <i class="fas fa-plus"></i>&nbsp;
  Tambah Produk
</a>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr >
        <th scope="col">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-light">
        @php $number = 1;  @endphp
        @foreach($products as $product)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
              <a href="{{ route('produk.edit', $product) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('produk.destroy', $product) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
  </table>
@endsection
