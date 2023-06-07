@extends('template/admin/index')

@section('content-header')
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Home</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div>
        </div>
@endsection

@section('content')
<a href="{{ route('customer.create')}}" class="btn btn-success mb-3">
  <i class="fas fa-plus"></i>&nbsp;
  Tambah Customer
</a>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr >
        <th scope="col">No</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Address</th>
        <th scope="col">No Handphone</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-light">
        @php $number = 1;  @endphp
        @foreach($customers as $customer)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->no_hp }}</td>
            <td>
              <a href="{{ route('customer.edit', $customer) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('customer.destroy', $customer) }}" method="POST" style="display: inline">
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
