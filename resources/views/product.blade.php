@extends('master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active banner1">
                <img class="d-block w-100">

            </div>
            <div class="carousel-item banner2">
                <img class="d-block w-100">


            </div>
            <div class="carousel-item banner3">
                <img class="d-block w-100">


            </div>
            <div class="carousel-item banner4">
                <img class="d-block w-100">


            </div>
            <div class="carousel-item banner5">
                <img class="d-block w-100">


            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- featured products --}}
    <h1 class="text-center  mt-3">FEATURED CATEGORIES</h1>
    <p class="text-center ">Shop our extensive range of luxuries at Zeesy No 1 Online Store.
    <div class="owl-carousel owl-theme container">
        <div class="">
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/a.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/b.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/c.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/d.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/e.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/f.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/g.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/h.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/i.jpg" alt="Card image cap" />

            </div>
        </div>
        <div>
            <div class="card border-0" style="width: 18rem">
                <img class="card-img-top card-img" src="images/j.jpg" alt="Card image cap" />

            </div>
        </div>

    </div>

    {{-- BRIDAL SETS --}}
    <h1 class="text-center  ">BRIDAL SETS</h1>
    <p class="text-center ">Shop our extensive range of luxuries at Zeesy No 1 Online Store.
    <div class="container d-flex align-items-center justify-content-center flex-wrap">
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="images/l.jpg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Post Title</h3>
                        <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed
                            cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="images/m.jpg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Post Title</h3>
                        <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed
                            cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="images/n.jpg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Post Title</h3>
                        <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed
                            cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- EARRINGS --}}
    <h1 class="text-center  ">EARRINGS</h1>
    <p class="text-center ">Shop our extensive range of luxuries at Zeesy No 1 Online Store.



        {{-- BANGLES --}}
    <h1 class="text-center  ">BANGLES</h1>
    <p class="text-center ">Shop our extensive range of luxuries at Zeesy No 1 Online Store.
    @endsection
