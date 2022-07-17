@extends('adminMaster')
@section("adminContent")

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>


  </head>
  <body >


@if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif




<?php if (Session::has('admin')): ?>
     <div class="container" >

       <div class="col">
         <div class="row main" style="padding-top:20px ;">
          <form  action="addcategory"  method="POST" >
            @csrf
            <div class="row">
              <input type="text" name="categoryId" value="" placeholder="enter ID " style="width:100px ; font-size:24px ; padding:5px 5px 5px 5px ; margin-right:15px ;" required>
               <input type="text" name="categoryname" value="" placeholder="enter name of new category " style="width:400px ; font-size:24px ; padding:5px 5px 5px 5px ;" required>
               <button type="submit" name="button" class="btn btn-outline-warning" style="font-size:24px;margin-left:-1px;">Add New Category</button>
            </div>
          </form>
         </div>

         <?php foreach ($categories as $value): ?>
         <div class="row main">
           <div class="col">
             <h3>{{$value->Category_ID}}</h3>
           </div>
           <div class="col">
             <h3>{{$value->name}}</h3>
           </div>
           <div class="col">
            <form class="" action="/updatecategory/{{$value->Category_ID}}" method="get">
              @csrf
             <div class="row">
                <input type="text" name="updatecategory" value="" placeholder="New Name" style="width:160px ; font-size:24px ; padding:5px 5px 5px 5px ;">
                <button type="submit" class="btn btn-outline-warning" style="font-size:24px; margin-left:-1px;"name="button">Update</button>
             </div>
            </form>
           </div>
           <div class="col" >
               <a  href="/removecategory/{{$value->Category_ID}}"><i class="bi bi-trash3 fa-3x amber-text pr-3" aria-hidden="true"><svg  xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                 <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
               </svg></i></a>
           </div>


         </div>
         <?php endforeach; ?>



       </div>

     </div>
<?php endif; ?>

  </body>
  <style media="screen">
    .main{
        border-bottom: 1px solid #ccc;
        padding-bottom: 15px;
    }

  </style>
</html>
@endsection
