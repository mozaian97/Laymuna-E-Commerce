@extends('master')
@section("content")
<?php use App\Http\Controllers\ProductController; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


  </head>
  <body >
  <?php if (!(count($orders)==0)): ?>

         <div class="container" style="padding:30px 30px 30px 30px ; margin:20px 20px 200px 20px;">


          <div class="row main" style="margin:20px 30px 100px 30px; width:110%; ">



             <table class="table table-hover table-fixed">

                     <!--Table head-->
                     <thead>
                       <tr>
                         <th>#ID</th>
                         <th>Number of Items</th>
                         <th>Total Cost</th>
                         <th>Payment Method</th>
                         <th>Address</th>
                         <th>Date</th>
                        <th>Status</th>
                        <th></th>

                       </tr>
                     </thead>
                     <!--Table head-->
                 <?php foreach ($orders as $item): ?>
                     <!--Table body-->
                     <tbody>
                       <tr>
                         <th scope="row">{{$item->Order_Id}}</th>
                         <td >{{$item->items}} </td>
                         <td >{{$item->total_cost}}$</td>
                         <td >{{$item->payment_method}}</td>
                         <td >{{$item->address}}</td>
                         <td >{{$item->created_at}}</td>
                         <td >{{$item->status}}</td>
                         <td>
                           <?php
                           $orderdetails=ProductController::viewOrderDetail($item->Order_Id);

                            ?>
                           <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"  >Details</button>

                         </td>


                       </tr>

                     </tbody>
                     <!--Table body-->
               <?php endforeach; ?>
                   </table>


                   <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document" >
                       <div class="modal-content" style ="width:800px ;">
                         <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body" style="  font-size: 18px;
                           font-family:'Comfortaa', cursive;">

                           <table class="table table-hover table-fixed" style="width:700px; ">

                                   <!--Table head-->
                                   <thead>
                                     <tr>
                                       <th>#Product ID</th>
                                       <th>Image</th>
                                       <th>Name</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Category</th>
                                      <th>Subcategory</th>


                                     </tr>
                                   </thead>
                                   <!--Table head-->
                               <?php foreach ($orderdetails as $order): ?>
                                   <!--Table body-->
                                   <tbody>
                                     <tr>
                                       <th scope="row">{{$order->Product_id}}</th>
                                       <td ><img src="{{$order->image}}"  style="width:40px; height:60px;"alt=""> </td>
                                       <td >{{$order->name}}$</td>
                                       <td >{{$order->price}}</td>
                                       <td >{{$order->quantity}}</td>
                                       <td >{{$order->CategName}}</td>
                                       <td >{{$order->SubName}}</td>

                                     </tr>

                                   </tbody>
                                   <!--Table body-->
                             <?php endforeach; ?>
                                 </table>

                         </div>
                         <div class="modal-footer">

                         </div>
                       </div>
                     </div>
                   </div>


         </div>
       </div>
     <?php else: ?>
       <h1 style="color:#ccc; text-align:center ;font-size:70px;padding: 20px 20px 20px 20px ;margin:400px 50px 600px 50px; border-top:1px solid #ccc ;border-bottom:1px solid #ccc ;"> Nothing In Order List </h1>

<?php endif; ?>
  </body>
  <style media="screen">
      @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');


      .main{
        /*  border-bottom: 1px solid #ccc;*/
          padding-bottom: 15px;
      }
      .container{
        font-size: 22px;
        font-family:'Comfortaa', cursive;
      }

  </style>
</html>

@endsection
