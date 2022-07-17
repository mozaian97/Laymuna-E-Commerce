<?php use App\Http\Controllers\ProductController;
$total=0;

if(Session::has('user')){
$total = ProductController::cartItem();} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <title></title>
  </head>
  <body>

    <!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#333;">
  <a class="navbar-brand" href="/" style="font-size: 48px;font-family: 'Lobster', cursive; color: yellow;">
    <img src="/img/lemon1.png" width="70" height="70" class="d-inline-block align-top"  alt="">
    Laymuna
  </a>
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left:20px;color :white ;">
          Men
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Accessories</a>
          <a class="dropdown-item" href="#">Bags</a>
          <a class="dropdown-item" href="#">Jackets</a>
          <a class="dropdown-item" href="#">Pants</a>
          <a class="dropdown-item" href="#">Shoes</a>
          <a class="dropdown-item" href="#">Sweaters</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " style="color:white;"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Women
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Accessories</a>
          <a class="dropdown-item" href="#">Bags</a>
          <a class="dropdown-item" href="#">Jackets</a>
          <a class="dropdown-item" href="#">Pants</a>
          <a class="dropdown-item" href="#">Shoes</a>
          <a class="dropdown-item" href="#">Sweaters</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " style="color:white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kids
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Accessories</a>
          <a class="dropdown-item" href="#">Bags</a>
          <a class="dropdown-item" href="#">Jackets</a>
          <a class="dropdown-item" href="#">Pants</a>
          <a class="dropdown-item" href="#">Shoes</a>
          <a class="dropdown-item" href="#">Sweaters</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/contact" style="color:white;">Contact <span class="sr-only">(current)</span></a>
      </li>

        <form method="get" action="/search" class="form-inline my-2 my-lg-0" style="padding-right:5px;margin-left:10px;" >
          <input name="query" style="  font-family: font-family:'Comfortaa', cursive;font-size: 18px;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button  class="btn btn-outline-primary my-2 my-sm-0" style="outline-color:#e6c912; font-family: font-family:'Comfortaa', cursive;font-size: 18px;" type="submit">Search</button>
        </form>

        <?php if (Session::has('user')): ?>
        <li class="nav-item ">
          <a class="btn btn-info"  href="/cartlist">Cart({{$total}})<span class="sr-only">(current)</span></a>
        </li>
      <?php else: ?>
        <li class="nav-item ">
          <a class="btn btn-info"   href="/login">Cart({{$total}})<span class="sr-only">(current)</span></a>
        </li>
      <?php endif; ?>
         <li></li>
      <?php if (Session::has('user')): ?>
        <li class="nav-item dropdown" >
            <a class="btn btn-success dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="cartlist">My Cart</a>
              <a class="dropdown-item" href="favoritelist">My Favorites</a>
              <a class="dropdown-item" href="orders">My Orders</a>
              <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="/logout">Log Out</a>
              </div>
            </div>
         </li>
       <?php else: ?>
         <li class="nav-item"><a class="btn btn-warning " href="/login" >Login</a></li>
         <li  class="nav-item " ><a  class="btn btn-danger "  href="/register" >Register</a></li>
       <?php endif; ?>
    </ul>
  </div>
</nav>




    </body>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');

          *{
          padding: 0 ;
          margin:0;
          box-sizing: border-box;

          }
          .navbar-collapse{
            font-family: 'Comfortaa', cursive;
            font-size: 18px;

          }
          .nav-item {

            font-weight: bold;
            padding-right: 10px;
          }
          .btn{
            font-family: font-family:  'Comfortaa', cursive;
            font-size: 18px;

          }



    </style>
  </html>
