@extends('master')
@section('content')
<h1 class="text-center  trending-products">Trending Products</h1>
<div class="container">

 <div class="row">
   @foreach ($products as $item)
   <div class="col-lg-4 col-md-6 col-sm-12 p-2 ">

       <div class="card  wow bounceInUp" style="width: 23rem;">
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
@endsection
