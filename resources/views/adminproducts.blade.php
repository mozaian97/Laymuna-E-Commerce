@extends('adminMaster')
@section("adminContent")
<?php
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\CategoryController;
$cats=CategoryController::view();
$subs=SubcategoryController::view();
//echo $subs."<br>";
//echo $sub[0] ;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>


  </head>
  <body >

    <?php if (session('error')): ?>
      <div class="alert alert-danger" role="alert">
        {{session('error')}}
      </div>
    <?php endif; ?>



<?php if (Session::has('admin')): ?>
     <div class="container" >

       <div class="col">
         <div class="row main" style="padding-top:20px ;">
            <form class="form-inline" style="margin-left:50px;" method="get" action="/searchproduct">
              <input  name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:400px;" required>
              <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
          <form  action="addproduct"  method="POST"  style="margin-left:400px; " >
            @csrf
            <div class="row" >
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"  >Add Product</button>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Name:</label>
                          <input type="text" class="form-control" id="recipient-name" name="name" required>
                        </div>
                        <div class="form-group">
                          <label for="recipient-price" class="col-form-label">Price:</label>
                          <input type="text" class="form-control" id="recipient-price" name="price" required>
                        </div>
                        <div class="form-group">
                          <label for="message-description:" class="col-form-label">Description:</label>
                          <textarea class="form-control" id="message-description" name="description" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect02" >Category</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect02" name="category" required>
                              <option selected>Choose...</option>
                              <?php foreach ($cats as $value): ?>
                                  <option value="{{$value->Category_ID}}">{{$value->name}}</option>
                              <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01" >Subcategory</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="subcategory" required>
                              <option selected>Choose...</option>
                              <?php foreach ($subs as $value): ?>
                                  <option value="{{$value->Subcategory_ID}}">{{$value->name}}</option>
                              <?php endforeach; ?>
                            </select>
                        </div>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Image URL</span>
                            </div>
                            <input type="text" class="form-control" name="image" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                          </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-warning">ADD</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>




         <table class="table table-hover table-fixed">

                 <!--Table head-->
                 <thead>
                   <tr>
                     <th>#ID</th>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Price</th>
                     <th>Description</th>
                     <th>Category</th>
                     <th>Subcategory</th>
                     <th>Edit</th>
                     <th>Delete</th>

                   </tr>
                 </thead>
                 <!--Table head-->
<?php foreach ($products as $value): ?>
                 <!--Table body-->
                 <tbody>
                   <tr>
                     <th scope="row">{{$value->Product_id}}</th>
                     <td contenteditable="true"> <img src="{{$value->image}}" alt="" style="width:55% ; height:30%;" contenteditable="true"></img></td>
                     <td contenteditable="true">{{$value->name}}</td>
                     <td contenteditable="true">{{$value->price}}</td>
                     <td contenteditable="true"><p style="font-size:12px; ">{{$value->description}}</p></td>
                     <td contenteditable="true">{{$value->CategName}}</td>
                     <td contenteditable="true">{{$value->SubName}}</td>
                     <td >Edit</td>
                     <td><a href="/removeproduct/{{$value->Product_id}}"><i class="bi bi-trash3-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></i>
                    </a></td>

                   </tr>

                 </tbody>
                 <!--Table body-->
                <?php endforeach; ?>

                  <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                  </div>
               </table>




       </div>

     </div>
<?php endif; ?>

  </body>
  <style media="screen">
    .main{
      /*  border-bottom: 1px solid #ccc;*/
        padding-bottom: 15px;
    }
  </style>
</html>
@endsection
