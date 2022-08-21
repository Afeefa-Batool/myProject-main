@extends('master')
@section('content')
    <div class="container-fluid mt-3 custom-product">

        <h1 class="text-center mt-4 m-5">Result for Products</h1>
        {{-- <div class="container">

            <div class="row">
                @foreach ($products as $item)
                    <div class="search-item">

                        <div class="card " style="width: 23rem;">
                            <img class="card-img-top" src="{{ $item['gallery'] }}" alt="Card image cap" style="height:350px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['name'] }}</h5>
                                <p class="card-text text">{{ $item['description'] }}</p>
                                <div class="row">
                                    <a href="detail/{{ $item['id'] }}" class="btn btn-secondary">Add to Cart</a>
                                    <p class="price mt-1">{{ $item['price'] }}</p>


                                </div>
                            </div>
                @endforeach

            </div>
        </div>
    </div>
    </div> --}}
    <div class="container py-5">
        <div class="row">
        @foreach ($products as $item)
        <div class="col-lg-4 col-md-6 col-sm-12 p-2 ">

          <div class="card">
            <img class="card-img-top" src="{{ $item['gallery'] }}" alt="Card image cap" style="height:350px">

            <div class="card-body">
              <div class="d-flex justify-content-between">
                <a href="detail/{{$item['id']}}" class="text-black">detail</a>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">{{$item['name']}}</h5>
                <h5 class="text-dark mb-0">{{$item['price']}}</h5>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <div class="ms-auto text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

          @endforeach
      </div>
    </div>
@endsection
