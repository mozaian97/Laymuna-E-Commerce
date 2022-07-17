<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\AdminController ;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login']);

Route::get('/logout', function () {
  Session::Forget('user');
  return  redirect('/');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::post('/admin',[AdminController::class,'login']);
Route::get('adminpanel',function(){
  return view('adminPanel');
});
Route::get('/logoutadmin', function () {
  Session::Forget('admin');
  return  redirect('/');
});


Route::view('/register', 'register');
Route::post('/register',[UserController::class,'register']);

Route::get('/',[ProductController::class,'index']);

Route::get('detail/{id}',[ProductController::class,'detail']);

Route::get('search',[ProductController::class,'search']);

Route::post('add_to_cart',[ProductController::class,'addToCart']);

Route::post('addtofavorite',[ProductController::class,'addToFav']);



Route::get('cartlist',[ProductController::class,'cartList']);
Route::get('favoritelist',[ProductController::class,'favList']);


Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('removefav/{id}',[ProductController::class,'removeFav']);


Route::get('buynow',[ProductController::class,'buyNow']);
Route::post('addtoOrder',[ProductController::class,'addToOrder']);
Route::get('orders',[ProductController::class,'allOrders']);
//Route::get('orderdetails',[ProductController::class,'viewOrderDetail']);


Route::get('OrderDetail',[ProductController::class,'addToOrder']);

Route::get('filterprice',[ProductController::class,'FilterPrice']);
Route::get('sortname',[ProductController::class,'SortName']);


Route::get('/contact',function(){
    return view('contact');

});

Route::get('privacy',function(){
    return view('privacy');

});



/*******************************************************/

Route::get('category',[CategoryController::class,'viewCategories']);

Route::get('removecategory/{id}',[CategoryController::class,'destroy']);

Route::post('/addcategory',[CategoryController::class,'addCategory']);

Route::get('updatecategory/{id}',[CategoryController::class,'UpdateCategory']);


/*************************************************/

Route::get('subcategory',[SubcategoryController::class,'viewSubcategories']);

Route::get('removesubcategory/{id}',[SubcategoryController::class,'destroy']);

Route::post('/addsubcategory',[SubcategoryController::class,'addSubcategory']);

Route::get('updatesubcategory/{id}',[SubcategoryController::class,'UpdateSubcategory']);


/********************************************************/
Route::get('adminproducts',[AdminProductController::class,'viewProducts']);

Route::get('removeproduct/{id}',[AdminProductController::class,'destroy']);

Route::get('searchproduct',[AdminProductController::class,'Search']);

Route::post('/addproduct',[AdminProductController::class,'addProduct']);

//Route::get('updatesubcategory/{id}',[SubcategoryController::class,'UpdateSubcategory']);


/**************************************************************/
Route::get('OrdersViewAdmin',[OrderController::class,'GetOrders']);
Route::get('searchorder',[OrderController::class,'Search']);
Route::get('updatestatus/{id}',[OrderController::class,'UpdateStatus']);
