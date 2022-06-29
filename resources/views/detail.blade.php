@extends('master')
@section('content')

<div class="container detail-page">
    <h2 class="text-center display-4"><b>Detail Page</b></h2>

    <div class="jumbotron mt-3">
        <div class="row">

            <div class="col-sm-6">
                <img class=" mt-3 detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6 mt-5">
                <a href="/" class="btn btn-secondary">Go Back</a>
                <h3>Name : {{$product['name']}}</h3>
                <h4>Price : {{$product['price']}}</h4>
                <h5>Category : {{$product['category']}}</h5>
                <p class="display-5 ">Description : {{$product['description']}}</p>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-success ml-3">Add to Cart</button>
                </form>
                <br><br>
                <div class="row">
                    <button class="btn btn-primary ml-5" >Buy Now</button>

                </div>
                <br><br>
                </div>
                   
            </div>
    </div>

</div>
         
</div>
@endsection

























  