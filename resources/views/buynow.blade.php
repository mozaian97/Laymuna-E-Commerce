@extends('master')
@section("content")
<?php use App\Http\Controllers\ProductController;
$total=0;//number of items
$totalPrice=0;// summ of prices of items

if(Session::has('user')){
$total = ProductController::cartItem();
$totalPrice= ProductController::totalPrice();
}
foreach($totalPrice as $cost){
  $TotalCost=$cost->total ;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


  </head>
  <body >


      <div class="card text-center " style="margin:25px 200px 10px 200px ;" >
        <div class="card-header " style="background-color: rgba(250, 217, 2,0.6);" >
          ORDER CARD
        </div>
        <div class="card-body" >
          <div class="row ">
          <div class="col-4 " >
            <div class="row info">

              Number of Items : {{$total}}
            </div>
            <div class="row info">
              Total : {{$TotalCost}}$
            </div>
            <div class="row info" style="color: red; ">
              Delivery : 5.00$
            </div>
            <div class="row info" style="color: green;">
              Final Price : {{$TotalCost+5.00}}$
            </div>
          </div>


          <div class="col">
              <form class="" action="addtoOrder" method="post" >
              @csrf
            <div class="form-group">
               <label for="exampleFormControlTextarea2">Address</label>
               <textarea name="address" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Enter your Address ......." required></textarea>
             </div>
             <div class="row" style="padding:10px 25px 10px 25px ;font-size:22px ;">
               <div class="form-check" style="padding-top:20px;  float:left;">
                  <input class="form-check-input" type="radio" value="0" name="payment" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Cash
                  </label>
                </div>
             </div>
              <div class="row" style="padding:10px 25px 10px 25px ;font-size:22px ;">
                <div class="form-check" style=" padding-bottom:10px; float:left; ">
                  <input class="form-check-input" type="radio" value="1" name="payment" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Credit Card
                  </label>
                </div>
              </div>
              <div class="row">
                </div>
                <button type="submit" class="btn btn-warning"  name="button" style=" width:250px;font-size: 20px;font-family: 'Comfortaa', cursive;font-weight:bold;">Order</button>
                 </form>
                </div>

            </div>
        </div>
      </div>

  </body>
  <style media="screen">
      @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');

.card{
  font-size: 20px;
  font-family: 'Comfortaa', cursive;
  font-weight:bold;
}

.info{
  padding: 20px 20px 20px 20px;
  border-bottom: 1px solid #ccc;
}


  </style>
</html>

@endsection
