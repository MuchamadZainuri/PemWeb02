@extends('template/main')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <img src="img/img1.jpeg" class="" alt="..." width="70%">
            </div>
            <div class="carousel-item text-center">
                <img src="img/img2.jpeg" class="" alt="..." width="70%">
            </div>
            <div class="carousel-item text-center">
                <img src="img/img3.jpeg" class="" alt="..." width="70%">
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
    <h3>Lorem ipsum dolor sit amet.</h3>
@endsection

@section('content2')
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reiciendis ullam corrupti cumque illum. Consequatur pariatur deleniti eos cupiditate omnis ipsum tenetur hic facilis, inventore eum sapiente dolore, necessitatibus delectus sequi. Mollitia natus dolorum magnam tempora sapiente molestias repellat deleniti corrupti, voluptas quia delectus laboriosam adipisci illum assumenda voluptate nisi officia cum deserunt obcaecati consequatur temporibus quam! Inventore, quidem officia? Sapiente veniam molestiae eligendi alias, molestias aspernatur! Animi vel, saepe quas accusamus, dolorem aut, nisi reprehenderit eaque distinctio quae omnis?
    <br>
    <br>
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
@endsection
