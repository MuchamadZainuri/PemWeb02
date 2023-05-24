<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Krusty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <style>
            ul{
                list-style-type: none;
            }
            a{
                text-decoration: none;
                color: black;
            }
            li{
                margin-bottom: 10px;
            }
            
        </style>
</head>

<body id="top">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #e31e52;">
        <div class="container">
            <a class="navbar-brand" href="/toko">
                <img src="{{ asset('img/iconk.png') }}" alt="..." width="40" class="bg-light p-1 rounded-3">
                KrustyMart
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/toko">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/toko/about">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid px-5" style="background-color: #f1f2f3">
        @yield('content')
    </div>
    
    <div>
        @yield('content1')
    </div>

    <div class="container-fluid px-5" style="background-color: #f1f2f3">
        @yield('content2')      
    </div>

    <div class="container-fluid px-5">
        @yield('content3')      
    </div>
    <footer>
        <div class="container-fluid border-top border-2">
            <div class="py-5">
            <div class="row" style="font-size: 13pt">
                <div class="col">
                    <ul>
                        <li>
                            <p class="fw-bold">Eksplor</p>
                        </li>
                        <li><a href="#">
                            Tentang Kami
                        </a>
                        </li>
                        <li><a href="#">
                            Bisnis Kami
                        </a>
                        </li>
                        <li><a href="#">
                            Inovasi
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <p class="fw-bold">Tautan</p>
                        </li>
                        <li><a href="#">
                            Karier
                        </a>
                        </li>
                        <li><a href="#">
                            Blog
                        </a>
                        </li>
                        <li><a href="#">
                            Kontak
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li><p class="fw-bold">Ikuti Kami</p></li>
                        <li>
                            <a href="">
                                <i class="bi bi-facebook"></i>
                                &nbsp;Facebook
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="bi bi-twitter"></i>
                                &nbsp;Twitter
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="bi bi-instagram"></i>
                                &nbsp;Instagram
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="bi bi-linkedin"></i>
                                &nbsp;Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <p class="fw-bold">Komplain & Bantuan</p>
                    <a href="" class="btn btn-outline-dark py-2 fw-bold border-2" style="padding-left: 5.5vw; padding-right: 5.5vw;">BukaBantuan</a>
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #000;padding:5.6vh ;">
            <div class="row text-white" style="font-size: 13pt">
                <div class="col-8">
                    <p class="m-0">
                    <strong>
                        &copy;2023 Copyright <a class="text-white" href="https://github.com/MuchamadZainuri" style="color: #1D9FE4;" target="_blank">JayZee</a>.
                    </strong>
                </p>
                </div>
                <div class="col">
                    <p class="m-0 fw-bold">Syarat & Ketentuan</p>
                </div>
                <div class="col">
                    <p class="m-0 fw-bold">Kebijakan Privasi</p>
                </div>
            </div>
        </div>
    </footer>
    <a href="#top" class="btn btn-danger py-2 rounded-5 position-fixed bottom-0 end-0 m-3" style="scroll-behavior: smooth;">
        <i class="bi bi-arrow-up"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
