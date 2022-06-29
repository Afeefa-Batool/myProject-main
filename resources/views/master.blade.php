<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- <link rel="stylesheet" href="js/animate.css-master/animate.min.css">  </head> --}}

    <body>
    {{ View::make( 'header')}}

    @yield('content')
    {{ View::make( 'footer')}}

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    
    {{-- <script src="js/WOW-master/dist/wow.min.js"></script>
   
    <script>
      new WOW().init();
      
    </script> 
   --}}

</body>
<style>
  /* .....carasoul slider....... */
  .banner1{
    width:100%;
    height: 100vh;
    background-image: url('images/46.png');
    background-size: cover;
    background-position: center;
}
.banner2{
    width:100%;
    height: 100vh;
 
    background-image:url('images/12.png');
    background-size: cover;
    background-position: center;
}
.banner3{
    width:100%;
    height: 100vh;
 
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(33,64,65,0.7)),url('https://images.squarespace-cdn.com/content/v1/55d7b33ee4b0e34ae6046129/1568311488913-G21930JZ9IMYSZESFM1O/White_Cherrie-Gold_Bokeh-Overlay-Cover.jpg?format=1000w');
    background-size: cover;
    background-position: center;
}
.banner4{
    width:100%;
    height: 100vh;
 
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(33,64,65,0.7)),url('https://images.squarespace-cdn.com/content/v1/55d7b33ee4b0e34ae6046129/1568311488913-G21930JZ9IMYSZESFM1O/White_Cherrie-Gold_Bokeh-Overlay-Cover.jpg?format=1000w');
    background-size: cover;
    background-position: center;
}
.banner5{
    width:100%;
    height: 100vh;
 
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(33,64,65,0.7)),url('https://images.squarespace-cdn.com/content/v1/55d7b33ee4b0e34ae6046129/1568311488913-G21930JZ9IMYSZESFM1O/White_Cherrie-Gold_Bokeh-Overlay-Cover.jpg?format=1000w');
    background-size: cover;
    background-position: center;
}
.cart-img{
  height: 186px !important;
    width: 50%;
    border-radius: 8px;
}
.cart-text{
  margin-top: 90px;
}
.jumbotron{
  background-color: #D0E7F7;
}
.search-box{
  width: 400px !important;
}
.description{
  font-size: 20px;
}
/* .....products page..... */
.text{
  overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.price{
  margin-left: 146px;
}
.custom-product{
  margin-top: 110px !important;
}
.detail-page{
  margin-top: 110px !important;

}
.custom-login{
  margin-top: 110px !important;

}
.page-footer{
  background-color: #1a1b1d
}   
</style>

</html>