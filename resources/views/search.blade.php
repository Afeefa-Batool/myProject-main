@extends('master')
@section('content')

<div class="container-fluid mt-3 custom-product">
 
      <h1 class="text-center mt-4 m-5">Result for Products</h1>
     <div class="container">

      <div class="row">
        @foreach ($products as $item)
        <div class="search-item">
          
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
        @endforeach
      
    </div>
</div>
      </div>
     </div>
@endsection

























  