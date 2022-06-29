
@extends('master')
@section('content')


      
                <h2 class="text-center display-4 cart-text"><b>Cart List</b></h2>
                <a class="btn btn-success ml-3" href="/ordernow">Order Now</a> <br> <br>
             <div class="container-fluid">
           
                    @foreach ($products as $item)
                    <table class="table table-bordered table-hover">
                        <thead>
                          <tr class="table-info text-center">
                            <th>image</th>
                            <th>product name</th>
                            <th>confirm order</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <tr>
                            <td class="text-center"> <a href="detail/{{$item->id}}">
                                <img class="cart-img" src="{{$item->gallery}}" alt="">
                                </a></td>
                            <td class="text-center">   <p >{{$item->name}}</p></td>
                            <td class="text-center">   <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning ml-3" >Remove From Cart</a></td>
                          </tr>
                        </tbody>
                    </table>
                    @endforeach
        
             </div>
             <a class="btn btn-success ml-3" href="/ordernow">Order Now</a> <br> <br>
      
      
               
             
 


@endsection
