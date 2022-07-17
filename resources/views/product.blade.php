@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Laymuna</title>
  </head>
  <body >
    @if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
     @endif
    <!-- Slideshow container -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://fiverr-res.cloudinary.com/images/t_smartwm/t_main1,q_auto,f_auto,q_auto,f_auto/attachments/delivery/asset/ebd517286aeed262b5c861bd6f15ea43-1575980010/Women%20Clothing_820%20x%20360/design-facebook-cover-photo-for-page-profile-group-business.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://theboutique.co/img/customblock/customblock_men_1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://hungamadeal.co.in/wp-content/uploads/2019/06/amazon-5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--   ----------------------Filter ----------------------------   -->
<div class="full-width" style=" margin-top : 60px; box-shadow: 0 8px 8px -4px #ccc; border-bottom: 1px solid #ccc;border-top: 1px solid #ccc;">
  <div class="container" style=" padding:20px 20px 5px 20px; margin-left:150px;">
    <div class="row">
      <div class="col">
        <form class="form-inline"  action="/filterprice" method="get" >
            @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" style="background-color: #f7fc4e; font-family:'Comfortaa', cursive;font-size: 20px;" for="inputGroupSelect01">Filter By Price</label>
            </div>
            <select class="custom-select "  name="filter" id="inputGroupSelect01" onchange="this.form.submit()" style="font-family:'Comfortaa', cursive;font-size: 20px; width:250px; height:60px;">
              <option selected>Choose...</option>
              <option value="1">Less than 50$</option>
              <option value="2">Less than 100$</option>
              <option value="3">Less than 150$</option>
              <option value="4">Less than 200$</optin>
            </select>
          </div>
        </form>
      </div>
      <div class="col">
        <form class="form-inline"  action="/sortname" method="get" >
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text"  style=" background-color: #f7fc4e;font-family:'Comfortaa', cursive;font-size: 20px;" for="inputGroupSelect01">Sort By Price</label>
            </div >
            <select class="custom-select"  name="sort" id="inputGroupSelect01" onchange="this.form.submit()" style="font-family:'Comfortaa', cursive;font-size: 20px;width:250px; height:60px;">
              <option selected>Choose...</option>
              <option value="1">Ascending</option>
              <option value="2">Descending</option>
            </select>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- ------------------------------Products --------------------------------- -->


<div class="container">
  <div class="row" >
    <?php foreach ($products as $item): ?>
    <div class="col" style="margin: 25px 25px 25px 25px ;">
      <div class="card" style="width: 18rem; height:550px;">
        <a href="detail/{{$item['Product_id']}}">
        <img class="card-img-top" src="{{$item['image']}}" alt="Card image cap" style="width:150; height:250px;"></a>
        <div class="card-body" style="text-align:center; font-family: 'Comfortaa', cursive;">
          <h5 class="card-title"><a style="color:black ;text-decoration: none;" href="detail/{{$item['Product_id']}}">{{$item['name']}}</a></h5>
          <h6  class="card-text" style="color:gray ;" >{{$item['price']}}$</h6>
        </div>
        <div class="card-body" style="text-align:center;">
          <form  action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$item['Product_id']}}">
            <button class="btn btn-add"  type="submit" style="text-align:center; font-family: 'Comfortaa', cursive; padding:10px 10px 10px 10px ;margin-bottom: 8px; width:100%;"> Add To Cart</button>
          </form>
          <a href="detail/{{$item['Product_id']}}" class="btn btn-view" style="color:white; width:100%; text-align:center; font-family: 'Comfortaa', cursive;">View</a>
        </div>
      </div>
    </div>
      <?php endforeach; ?>
  </div>
  <div class="d-flex justify-content-center">
    {!! $products->links() !!}
  </div>
</div>











    <script>
      $('#carouselExampleIndicators').carousel({
      interval: 2000,
      cycle: true
      });
    </script>




  </body>
  <style media="screen">

        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');


      .btn-add{
       background-color: #fcc203 ;
      }
      .btn-add:hover {
        opacity: 0.7;
      }

      .btn-view{
          background-color: #333 ;
        }
        .btn-view:hover {
          opacity:0.7;
        }



  </style>
</html>

@endsection
