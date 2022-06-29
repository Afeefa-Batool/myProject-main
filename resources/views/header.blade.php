
<?php 
use App\Http\COntrollers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}
?>
<div class="container-fluid mt-2 ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #0e0f0f !important;height:100px">
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <a class="nav-link navbar-brand" href="#">
              E-com
             </a>
           </li>
            <li class="nav-item ">
              <a class="nav-link navbar-brand" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-brand" href="/myorder">Orders</a>
            </li>
            <form class="form-inline my-2 my-lg-0" action="/search">
                <input name="query" class="form-control mr-sm-2 search-box" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit" >Search</button>
              </form>
  
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link navbar-brand" href="/cartlist">Cart Item ({{$total}})</a></li>
            @if(Session::has('user'))
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Session::get('user')['name']}}
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