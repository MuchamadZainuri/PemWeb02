@extends('template/main')

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 100%;">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top"
                alt="">
            <div class="card-body">
                <p class="card-text">PRODUK</p>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
