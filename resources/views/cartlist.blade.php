@extends('master')
@section("content")
<?php use App\Http\Controllers\ProductController;
$total=0;//number of items
$totalPrice=0;// summ of prices of items

if(Session::has('user')){
$total = ProductController::cartItem();
$totalPrice= ProductController::totalPrice();}
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


@if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif

    <?php if (!(count($products)==0)): ?>
    <div class="container" style="padding:30px 30px 30px 30px ; margin:20px 20px 200px 20px;">
      <div class="row " style="margin:30px 30px 30px 150px ; width :100%;">
        <div class="col-5">
          <h3 style="font-size: 22px ; font-family:  'Comfortaa', cursive;">Number of Items : {{$total}}</h3>
        </div>
        <div class="col-5">
          <p style=" font-size: 22px ; ">Total Price : {{$TotalCost}}  </p>
        </div>
        <div class="col">
          <a class="btn btn-warning " style="" href="buynow">Buy Now </a>
        </div>
      </div>

       <div class="row main" style="margin:20px 30px 100px 30px; width:110%; ">
         <table class="table table-hover table-fixed">
                       <!--Table head-->
                       <thead>
                         <tr style="font-size:20px;">
                           <th>Image</th>
                           <th>Name</th>
                           <th>Price</th>
                           <th>size</th>
                           <th>Quantity</th>
                           <th>Status</th>
                           <th></th>


                         </tr>
                       </thead>
                       <!--Table head-->
                      <!--Table body-->
                      <?php foreach ($products as $item): ?>
                        <?php if (!($item->Deleted_Status)): ?>
                         <tbody>
                           <tr   style="font-size:20px;" >
                             <td><a href="detail/{{$item->Product_id}}"><img id="cart-item-img" src="{{$item->image}}"></img></a></td>
                             <td><h2 style="font-size:20px;">{{$item->name}}</h2></td>
                             <td><h2 style="font-size:20px;">{{$item->price}}$</h2></td>
                              <td><h4 style="font-size:20px;">{{$item->size}}</h4></td>
                             <td><h4 style="font-size:20px;">{{$item->quantity}}</h4></td>
                              <td><h4 style="color: green ;font-size:20px;">Available</h4></td>
                             <td><a href="/removecart/{{$item->cart_id}}"><i class="bi bi-trash3-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></i>
                            </a></td>
                           </tr>
                         </tbody>
                         <?php else: ?>
                           <tbody>
                             <tr   style="font-size:20px;" >
                               <td><a href="detail/{{$item->Product_id}}">{{$item->Product_id}}</a></td>
                               <td><h2 style="font-size:20px;">N/A</h2></td>
                               <td><h2 style="font-size:20px;">N/A</h2></td>
                                <td><h4 style="font-size:20px;">N/A</h4></td>
                               <td><h4 style="font-size:20px;">N/A</h4></td>
                                <td><h4 style="font-size:20px;">N/A</h4></td>
                               <td><a href="/removecart/{{$item->cart_id}}"><i class="bi bi-trash3-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
  </svg></i>
                              </a></td>
                             </tr>
                           </tbody>
                           <?php endif; ?>
                       <!--Table body-->
                  <?php endforeach; ?>
           </table>
        </div>
        <div class="row " style="margin:30px 30px 30px 150px ;width:100%;">
          <div class="col-5">
            <h3 style="font-size: 22px ; font-family:  'Comfortaa', cursive;">Number of Items : {{$total}}</h3>
          </div>
          <div class="col-5">
            <p style=" font-size: 22px ; ">Total Price : {{$TotalCost}}  </p>
          </div>
          <div class="col">
            <a class="btn btn-warning " style="" href="buynow">Buy Now </a>
          </div>
        </div>
    </div>
  <?php else: ?>
      <h1 style="color:#ccc; text-align:center ;font-size:70px;padding: 20px 20px 20px 20px ;margin:400px 50px 600px 50px; border-top:1px solid #ccc ;border-bottom:1px solid #ccc ;"> Nothing In Cart</h1>

  <?php endif; ?>
</body>


<style media="screen">
      @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');

      #cart-item-img{
        width: 100px;
        height: 100px;
      }
      .container{
        font-family:  'Comfortaa', cursive;
      }



      .buybtn{
        background-color: green;
        font-size: 22px ;
        color: white;
        border-style:none;
        border-radius: 10px 10px 10px 10px  ;
        padding: 10px 10px 10px 10px ;
        width: 200px ;
        cursor: pointer;

      }

          .material-symbols-outlined {
            cursor: pointer;
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
          }

  </style>
</html>

@endsection
