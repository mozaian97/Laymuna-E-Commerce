<?php
if (Session::has('admin')){
  $admin=Session::get('admin')['email'];
} ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Laymuna</title>

  </head>
  <body>

        <!-- Image and text -->
        <nav class="navbar navbar-light ">
          <a  style="color:yellow; " class="navbar-brand" href="#">
            <img  src="/img/lemon1.png" width="50" height="50" class="d-inline-block align-top" alt="">
            Laymuna Admin Panel
          </a>
          <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$admin}}
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/logoutadmin">Logout</a>

            </div>
          </div>
        </nav>



    <div class="container" style=" position:inherit; margin-left:0 ;margin-right: 0;height:90px; width:100% ;">
      <div class="row"  style="background-color: #333; height:100% ; width:155%; ">
        <div class="col-3" style="padding-left: 20px; padding-top:30px;text-align: center; box-shadow: 10px 0 5px -2px #f5d442; ">
          <a  class="panel-tabs" href="Main" >Main</a>
        </div>
        <div class="col-md-auto" style="padding-left: 30px ;">
          <a  class="panel-tabs" href="category">Categories</a>
        </div>
        <div class="col-md-auto">
          <a  class="panel-tabs" href="subcategory">Subcategories</a>
        </div>
        <div class="col-md-auto">
          <a class="panel-tabs" href="adminproducts">Products </a>

        </div>
        <div class="col-md-auto">
          <a class="panel-tabs" href="OrdersViewAdmin">Customer Orders </a>
        </div>
      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
  <style media="screen">
  @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');

    .navbar{
      background-color: #333;
      -webkit-box-shadow: 0 10px 6px -6px #f5d442;
      -moz-box-shadow: 0 10px 6px -6px #f5d442;
      box-shadow: 0 10px 6px -6px #f5d442;
    }

    .navbar-brand{
      font-size: 28px;
      font-weight: bold;
      font-family:  'Comfortaa', cursive;

    }

    #dropdownMenuLink{
      color:white;
      background-color:#f5d442;
      border-style: none ;

    }

    .col-md-auto {
      padding-top:30px;
      padding-left: 20px;
      padding-right:60px ;
      text-align: center;

    }

    .panel-tabs{
      color: yellow;
      font-size: 20px;
      font-weight: bold;
      font-family:  'Comfortaa', cursive;
      text-decoration: none ;
    }
    .panel-tabs:hover {
      text-decoration: none ;
      color: #ebcd09;
    }





  </style>
</html>
