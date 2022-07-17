@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laymuna</title>

  </head>
  <body>

    <div class="container" style="margin-top:50px;margin-bottom: 50px ;">
    <?php foreach ($product as $output): ?>
      <div class="row" style=" border-bottom: 2.5px solid gray ;">
          <h3 >{{$output->name}}</h3>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col-3" style="border-right: 2.5px solid #ccc ; padding:2px 2px 2px 2px ;">
           <img src="{{$output->image}}" class="img-responsive" style="width:100%; height:100%;">
        </div>
        <div class="col">
          <div class="row">
              <table class="table">
                <tbody>
                  <tr >
                    <td><h4>Product ID </h4></td>
                    <td><h4>{{$output->Product_id}} </h4></td>

                  </tr>
                  <tr>
                    <td><h4>Description </h4></td>
                    <td><h6>{{$output->description}} </h6></td>

                  </tr>
                  <tr>
                    <td><h4>Category</h4></td>
                    <td><h4>{{$output->SubName}}  </h4></td>

                  </tr>
                  <tr>
                    <td><h4>Subcategory </h4></td>
                    <td><h4>{{$output->CategName}}</h4></td>
                  </tr>
                  <tr>
                    <td><h4>Price</h4></td>
                    <td><h4>{{$output->price}}$</h4></td>
                  </tr>
                  <tr>
                    <?php if (!($output->Deleted_Status)): ?>
                      <td><h4>Status</h4></td>
                      <td><h4 style="color :green ;">Available</h4></td>
                    <?php endif; ?>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="row" style="margin-left:20px;">
            <form class="form-inline" action="/add_to_cart" method="POST">
                @csrf
                <div class="row">
                  <div class="col">
                    <?php if (!($output->SubName =='Shoes')): ?>
                    <div class="input-group mb-3">
                      <select class="custom-select "  name="size" id="inputGroupSelect01" style="font-family:'Comfortaa', cursive;font-size: 20px; width:250px; height:60px;" required>
                        <option selected>Size</option>
                        <option value="1">S</option>
                        <option value="2">M</option>
                        <option value="3">L</option>
                        <option value="4">XL</optin>
                      </select>
                    </div>
                    <?php else: ?>
                      <input type="hidden" name="size" value="5">
                    <?php endif; ?>
                  </div>
                  <div class="col">
                    <input  type="number"  name="quantity" min="1" max="1000" placeholder="QTY" style="width: 170px  ;border-style: solid ;
                    padding: 10px;color: black ;border-radius: 3px 3px 3px 3px ;border-color: #ccc ;font-size: 25px ;" required>
                  </div>

                    <input type="hidden" name="product_id" value="{{$output->Product_id}}">
                    <?php if ($output->Deleted_Status ==0): ?>
                    <button class="btn addbtn" type="submit" style="width:250px; background-color:rgb(245,224,66);padding: 10px ;color: black ;border:none ;font-size: 25px ;cursor: pointer;font-weight: bold;margin-left:15px ; height:60px;" > ADD</button>
                    <?php else: ?>
                      <button class="btn disavlebtn" type="button" style="width:125px; background-color:rgb(245,224,66);" disabled > Disabled </button>
                    <?php endif; ?>

                </div>
            </form>
          </div>
          <div class="row" style="margin-left:500px; margin-top:10px;">
            <form class="" action="/addtofavorite" method="post">
               @csrf
             <input type="hidden" name="product_id" value="{{$output->Product_id}}">
             <button class="btn favbtn" type="submit" style="width:250px; background-color:rgb(250,89,67);">ADD TO FAV</button>

              </form>
          </div>
       </div>
     </div>
    <?php endforeach; ?>
  </div>
</body>

  <style >
  @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');

   .container{
       font-family: 'Comfortaa', cursive;
       font-size: 24px;}

      .addbtn:hover, .favbtn:hover{opacity: 0.7;}

      .disavlebtn{
        background-color: red;
      }


  </style>
</html>
@endsection
