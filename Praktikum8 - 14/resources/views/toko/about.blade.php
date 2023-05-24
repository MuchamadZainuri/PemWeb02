@extends('template/main')

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div style="padding-top: 9.5vh">
                <h1>Cerita Kami</h1>
                <br>
                <p class="fs-5">Dulu, KrustyMart adalah toko kelontong kecil yang hanya melayani warga sekitar. Namun, setelah beberapa tahun beroperasi, toko tersebut berhasil menarik perhatian banyak orang dan akhirnya berkembang menjadi sebuah supermarket besar yang terkenal di kota tersebut. 
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/img1.jpeg') }}" class="rounded-3" alt="..." width="100%">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection

@section('content1')
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>Visi & Misi</h1>
                    <h2>Belanja Mudah, Hemat, dan Nyaman di KrustyMart.</h2>
                    <p class="fs-5" style="margin-left: 10% ;margin-right:10% ;">Menjadi toko online terkemuka yang menyediakan produk berkualitas tinggi dan memberikan layanan pelanggan yang unggul kepada para pelanggan. Kami berkomitmen untuk menyediakan berbagai produk dengan harga yang terjangkau, serta menciptakan pengalaman belanja nyaman dan ramah bagi para pelanggan kami. Tujuan kami adalah menjadi destinasi utama bagi semua kebutuhan belanja online para pelanggan kami.</p>
                    <br>
                    <img src="{{ asset('img/img3.png') }}" class="rounded-4" alt="..." width="80%">
                </div>
            </div>
        </div>
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
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/img2.jpeg') }}" class="rounded-4" alt="..." width="100%">
        </div>
        <div class="col-md-6">
            <div class="">
                <h1>Pemimpin Kami</h1>
                <br>
                <h4 class="text-muted">Budi Bambu S.Pd, M.Pd</h4>
                <p class="fs-5">Budi Bambu adalah seorang pebisnis yang sukses dalam menjalankan bisnis kerajinan bambu yang inovatif dan ramah lingkungan. Budi Bambu selalu berusaha untuk mengembangkan bisnisnya dengan mempertahankan kualitas produk yang tinggi dan layanan yang terbaik kepada pelanggan.
                </p>
            </div>
            <a href="" class="btn btn-danger">Selengkapnya</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection

@section('content3')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h3 class="text-center">Apa Kata Mereka Yang Sudah Pernah Belanja Di KrustyMart?</h3>
        <div class="row">
            <div class="col-md-4">
                <br>
                <div class="card m-auto border-danger" style="width: 20rem">
                    <div class="text-center pt-5 pb-4">
                        <img src="{{ asset('img/orang1.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 50%; width: 30vh">
                    </div>
                    <h4 class="text-center">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </h4>
                    <div class="card-body">
                        <p class="card-text">Toko online ini sangat memuaskan karena menyediakan berbagai produk dengan harga yang terjangkau dan kualitas yang baik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="card m-auto border-danger" style="width: 20rem">
                    <div class="text-center pt-5 pb-4">
                        <img src="{{ asset('img/orang1.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 50%; width: 30vh">
                    </div>
                    <h4 class="text-center">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </h4>
                    <div class="card-body">
                        <p class="card-text">Proses pembelian dan pengiriman produk sangat mudah dan cepat, serta pelayanan pelanggan yang ramah dan responsif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="card m-auto border-danger" style="width: 20rem">
                    <div class="text-center pt-5 pb-4">
                        <img src="{{ asset('img/orang1.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 50%; width: 30vh">
                    </div>
                    <h4 class="text-center">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </h4>
                    <div class="card-body">
                        <p class="card-text">Saya sangat merekomendasikan toko online ini kepada siapa saja yang ingin berbelanja secara online dengan pengalaman yang menyenangkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
