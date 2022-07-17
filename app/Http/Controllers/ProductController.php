<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product ;
use App\Models\Cart ;
use App\Models\Order ;
use App\Models\OrderDetail ;
use App\Models\Favorite ;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index (){
    //  $data=Product::all()->random(18);
     $data=Product::paginate(18);
      return view('product',['products'=>$data]);
    }


    function detail ($id){
      $data=DB::table('products')
      ->join('subcategory','products.Subcategory_id','=','subcategory.Subcategory_ID')
      ->join('category','products.Category_ID','=','category.Category_ID')
      ->where('Product_id','=',$id)
      ->select('products.*','subcategory.name as SubName','category.name as CategName')
      ->get();

      return view('detail',['product'=>$data]);

    }

    function search(Request $req){
      $products=Product::where ('name','like','%'.$req->input('query').'%')->paginate();

      if(empty($products)){

      }

         return view('product',['products'=>$products]);

    }

    function addToCart(Request $req){
      if($req->session()->has('user')){
        $cart=new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        if($req->size == 1){
          $cart->size='S';
        }elseif($req->size == 2){
          $cart->size='M';
        }elseif($req->size == 3){
          $cart->size='L';
        }elseif($req->size == 4){
          $cart->size='XL';}
          else{
              $cart->size='No Size';
          }
        if(empty($req->quantity)){
          $cart->quantity=1;
        }else{
          $cart->quantity=$req->quantity;
        }

        $cartlist=Cart::where('product_id','=',$req->product_id)
                    ->where('user_id','=',$cart->user_id)
                    ->get();
           if(count($cartlist)==0){
             $cart->product_id=$req->product_id;
             $delete_status=Product::where('Product_id',$req->product_id)->get('Deleted_Status');
             foreach( $delete_status as $status){
             $cart->Deleted_Status=$status->Deleted_Status;
             }
             $cart->save();
            return redirect('/')->back()->with(['message' => 'Added to Cart Successfully ']);
            }
            else{
              return redirect('/')->back()->with(['message' => 'Already Added in Cart List ']);

            }

      }
      else {
        return redirect('/login');
      }
    }

    function addToFav(Request $req){
      if($req->session()->has('user')){
        $fav=new Favorite;
        $fav->user_id=$req->session()->get('user')['id'];
        $favlist=Favorite::where('product_id','=',$req->product_id)
                    ->where('user_id','=',$fav->user_id)
                    ->get();
           if(count($favlist)==0){
              $fav->product_id=$req->product_id;
              $fav->save();
              return redirect('/')->back()->with(['message' => 'Added to Favorite List Successfully']);
            }
            else{
              return redirect('/')->back()->with(['message' => 'Already Added in Favorite List']);
            }
      }
      else {
        return redirect('/login');
      }
    }

    function addToOrder(Request $req){

      if($req->session()->has('user')){

        $ord=new Order;
        $user_id=$req->session()->get('user')['id'];
        if($req->payment == 0){
        $payment_method="Cash";}
        else{
          $payment_method="Credit Card";
        }
        $address=$req->address;
        $items=ProductController::cartItem();
        $totalPrice=ProductController::totalPrice();
        foreach($totalPrice as $cost){
          $TotalCost=$cost->total ;
        }
         $current_date_time = date('Y-m-d H:i:s');

        $id = DB::table('order')->insertGetId([
          'user_id'=>$user_id,
          'status'=>'Processing',
          'payment_method'=>$payment_method,
          'address'=>$address,
          'total_cost'=>$TotalCost+5,
          'items'=>$items,
          "created_at"=>$current_date_time,
          "updated_at"=>$current_date_time
       ]);

        return ProductController::orderDetail($id);
       }
      else {
        return redirect('/login');
      }

    }




    public function orderDetail($id){
       $userId=Session::get('user')['id'];
       $items=ProductController::cartItem();
       $total=ProductController::totalPrice();
       foreach($total as $cost){
         $TotalCost=$cost->total ;
       }


       $products=DB::table('cart')
       ->join('products','cart.product_id','=','products.Product_id')
       ->where('cart.user_id',$userId)
       ->select('products.*','cart.Cart_id as cart_id','cart.quantity as quantity')
       ->get();
       foreach($products as $value){
         $detail= new OrderDetail;
         $detail->order_id=$id ;
         $detail->number_of_items=$items;
         $detail->total=$TotalCost;
         $detail->product_id=$value->Product_id ;
         $detail->price=$value->price;
         $detail->quantity=$value->quantity;
         $detail->save();
         Cart::where('user_id', $userId)->delete();
       }

        return redirect('/')->back()->with(['message' => 'Your Order Submitted Successfully ']);


    }

// to view the details of order in modal in orderlist view
     static function viewOrderDetail($order_id){

      $userId=Session::get('user')['id'];
      $orderdetails=DB::table('orderdetail')
      ->join('products','orderdetail.product_id','=','products.Product_id')
      ->join('order','orderdetail.order_id','=','order.Order_Id')
      ->join('subcategory','products.Subcategory_id','=','subcategory.Subcategory_ID')
      ->join('category','products.Category_ID','=','category.Category_ID')
      ->where('order.user_id',$userId)
      ->where('order.Order_Id',$order_id)
      ->select('products.*','orderdetail.*','subcategory.name as SubName','category.name as CategName')
      ->get();

      return $orderdetails;



    }

    public function allOrders(){

      $userId=Session::get('user')['id'];
      $orders=DB::table('order')->where('user_id','=',$userId)->get();
      return view('orderlist',['orders'=>$orders]);
    }




    static function cartItem(){
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }

    static function SumOfItems()
    {
      $userId=Session::get('user')['id'];
      return Cart::where('user_id',$userId)->sum('quantity');
    }



    public function cartList(){
      $userId=Session::get('user')['id'];
      $products=DB::table('cart')
      ->join('products','cart.product_id','=','products.Product_id')
      ->where('cart.user_id',$userId)
      ->select('products.*','cart.Cart_id as cart_id','cart.quantity','cart.size','cart.Deleted_Status')
      ->get();//should get quantity column from cart

      return view('cartlist',['products'=>$products]);
    }


    function favList(){
      $userId=Session::get('user')['id'];
      $favs=DB::table('favorite')
      ->join('products','favorite.product_id','=','products.Product_id')
      ->where('favorite.user_id',$userId)
      ->select('products.*','favorite.Fav_ID as fav_id')
      ->get();


       return view('favoritelist',['favorites'=>$favs]);
    }



    function removeCart($id){
      Cart::where('cart_id',$id)->delete();
      return redirect('cartlist')->back()->with(['message' => 'Item removed from cart Successfully']);


    }

    function removeFav($id){
      Favorite::where('fav_id',$id)->delete();
      return redirect('favoritelist')->back()->with(['message' => 'Item removed from favorite Successfully']);


    }


    static function totalPrice(){
      $userId=Session::get('user')['id'];
      $totalPrice=DB::table('cart')
      ->join('products','cart.product_id','=','products.Product_id')
      ->where('cart.user_id',$userId)
      ->select(DB::raw('sum(products.price * cart.quantity) as total '))
      ->get();

      return $totalPrice;

    }
    function buyNow(){

      return view('buynow');

    }

    function FilterPrice(Request $req){


      if($req->input('filter') ==1 ){
        $products=Product::where ('price','<=',50)->paginate();
        return view('product',['products'=>$products]);
      }
      elseif ($req->input('filter') ==2) {
        $products=Product::where ('price','<=',100)->paginate();
        return view('product',['products'=>$products]);
      }elseif ($req->input('filter') ==3) {
        // code...
        $products=Product::where ('price','<=',150)->paginate();
        return view('product',['products'=>$products]);
      }elseif ($req->input('filter') ==4) {
        // code...
        $products=Product::where ('price','<=',200)->paginate();
        return view('product',['products'=>$products]);
      }else{
        return redirect('/product');
      }
    }

    function SortName(Request $req){
      if($req->input('sort') ==1 ){
        $products=Product::orderBy ('price','ASC')->paginate();
        return view('product',['products'=>$products]);
      }
      elseif ($req->input('sort') ==2) {
        // code...
        $products=Product::orderBy ('price','DESC')->paginate();
        return view('product',['products'=>$products]);
      }else {
        return redirect('/product');
     }
   }



 }
