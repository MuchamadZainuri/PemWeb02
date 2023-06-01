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
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr >
        <th scope="col">No</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Address</th>
        <th scope="col">No Handphone</th>
      </tr>
    </thead>
    <tbody class="table-light">
        @php $number = 1;  @endphp
        @foreach($pelangan as $pelanggan)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $pelanggan->name }}</td>
            <td>{{ $pelanggan->address }}</td>
            <td>{{ $pelanggan->no_hp }}</td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
  </table>
@endsection
