@extends('template/main')

@section('content1')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <img src="img/banner1.png" class="" alt="...">
            </div>
            <div class="carousel-item text-center">
                <img src="img/banner.png" class="" alt="..." >
            </div>
            <div class="carousel-item text-center">
                <img src="img/banner2.png" class="" alt="..." >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>
    <div class="container">
    <h2 class="text-center ">Belanja hemat dan lengkap hanya di KrustyMart!</h2>
    <br>
        <p class="fs-5">KrustyMart adalah sebuah supermarket yang terkenal di kota ini. Di sana, Anda dapat menemukan berbagai macam produk, mulai dari makanan dan minuman hingga produk kecantikan dan perawatan pribadi. KrustyMart juga menawarkan harga yang terjangkau, sehingga banyak orang memilih untuk berbelanja di sana. Selain itu, KrustyMart juga memiliki program loyalitas yang menarik, dimana Anda bisa mendapatkan diskon dan hadiah menarik setiap kali berbelanja di sana. Dengan pelayanan yang ramah dan profesional, KrustyMart menjadi salah satu tempat favorit untuk berbelanja di kota ini.</p>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection

@section('content2')
    <br>
    <br>
    <br>
    <style>
        .card:hover{
            border: red 2px solid;
        }
    </style>
    <div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
        <div class="col">
            <div class="card h-100">
                <a href="/toko/detail" class="btn">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title">PRODUK</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="/toko/detail" class="btn">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title">PRODUK</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="/toko/detail" class="btn">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title">PRODUK</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="/toko/detail" class="btn">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PRODUK</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
