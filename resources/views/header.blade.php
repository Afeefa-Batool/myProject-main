<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #ffffff">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="" style="width:73px;height:65px;margin-left: 109px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ml-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/myorders">Orders</a>
                    </li>

                </ul>
                <form class="d-flex" action="/search">

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                   {{-- <a><i class="fas fa-search mt-2" aria-hidden="true" type="submit"></i></a> --}}

                </form>

                <ul class="navbar-nav me-auto ml-5 mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href=""><i
                                class="fa-brands fa-rocketchat"></i></a> </li>
                    <li class="nav-item"><a class="nav-link active" href="/cartlist"><i
                                class="fa-solid fa-cart-shopping">({{ $total }})</i></a> </li>
                    @if (Session::has('user'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Session::get('user')['name'] }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="/logout">Logout</a>

                            </div>

                        </li>
                    @else
                        <li class="nav-item "><a class="nav-link active" href="/login">Login</a></li>
                        <li class="nav-item "><a class="nav-link active" href="/register">Register</a></li>
                    @endif

                </ul>

            </div>
        </div>
    </nav>
</div>

{{-- <div class="container-fluid mt-2 ">
    <div class="row">
        <div class="col-lg-3">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="" style="width:91px;height:80px">
            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ffffff !important;height:60px">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/myorder">Orders</a>
                        </li>
                        <form class="form-inline my-2" action="/search">
                            <input name="query" class="form-control  search-box" type="search" placeholder="Search">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>

                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link navbar-brand" href="/cartlist">Cart Item
                                    ({{ $total }})</a></li>
                            @if (Session::has('user'))
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Session::get('user')['name'] }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/logout">Logout</a>

                                    </div>
                                </li>
                            @else
                                <li class="nav-item "><a class="nav-link navbar-brand" href="/login">Login</a></li>
                                <li class="nav-item "><a class="nav-link navbar-brand" href="/register">Register</a></li>
                            @endif
                        </ul>
                </div>
            </nav>
        </div>
    </div>

</div> --}}
