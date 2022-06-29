@extends('master')
@section('content')

<div class="container-fluid  custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active banner1">
            <img class="d-block w-100" >
          
          </div>
          <div class="carousel-item banner2">
            <img class="d-block w-100"  >
          
        
        </div>
          <div class="carousel-item banner3">
            <img class="d-block w-100">
          
        
        </div>
        <div class="carousel-item banner4 ">
            <img class="d-block w-100" >
         
        
        </div>
        <div class="carousel-item banner5">
            <img class="d-block w-100"  >
           
        
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
      {{-- .....fetching products...... --}}
      {{-- <div class="trending-wrapper">
        <h1 class="text-center mt-4 m-5">Trending Products</h1>
        <div class="">
          @foreach ($products as $item)
          <div class="tredning-item">
            <a href="detail/{{$item['id']}}">
          <img class="trending-img" src="{{$item['gallery']}}">
            <div class="">
            <h3>{{$item['name']}}</h3>
            </div>
          </a>
          </div>  
          @endforeach
        </div>
      </div> --}}
      {{-- ......end fetchig products......  --}}
      <h1 class="text-center mt-4 m-5">Trending Products</h1>
     <div class="container">
      {{-- <div class="container-fluid text-center"> --}}

      <div class="row">
        @foreach ($products as $item)
        <div class="col-lg-4 col-md-6 col-sm-12 p-2 ">
          
            <div class="card " style="width: 23rem;">
              <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap" style="height:350px">
              <div class="card-body">
                <h5 class="card-title">{{$item['name']}}</h5>
                <p class="card-text text">{{$item['description']}}</p>
                <div class="row">
                  <a href="detail/{{$item['id']}}" class="btn btn-secondary">Add to Cart</a>
                  <p class="price mt-1">{{$item['price']}}</p>

                </div>
              </div>
            </div>
          </div>
        @endforeach
      
    </div>
   
     </div>
    
      {{-- ........................... --}}
</div>
@endsection

























  