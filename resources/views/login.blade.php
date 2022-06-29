@extends('master')
@section('content')


<div class="jumbotron container mt-3 custom-login">

    
    <div class="row">
        <div class="col-lg-7">
            <img class="img-fluid img-resposive mt-3 " src="https://image.wedmegood.com/resized/800X/uploads/member/545511/1554458984_WEDMEGOOD_RELIANCE_JEWELS_003.jpg" alt="">
        </div>
        <div class="col-lg-5  mt-3 ">
       
            <form class="mt-5 col-lg-9 ml-5" action="login" method="POST">
              <h3 class="display-4 text-center mb-4">Sign In</h3>
                <div class="form-group ">
                  @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group ">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
               
                <button type="submit" class="btn btn-primary">login</button>
              </form>
        </div>
       
    </div>



</div>

@endsection