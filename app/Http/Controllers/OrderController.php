<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order ;
use App\Models\OrderDetail ;
use App\Models\User ;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       public function GetOrders(){

         if(Session::has('admin')){

            $list=DB::table('order')
            ->join('users','users.id','=','order.user_id')
            ->select('order.*','users.name')
            ->get();

               return view('customerorders',['orders'=> $list]);
           }
       }






       public function Search(Request $req)
       {
         $list=DB::table('order')
         ->join('users','users.id','=','order.user_id')
         ->where ('users.name','like','%'.$req->input('search').'%')
         ->orwhere('order.user_id','=',$req->input('search'))
         ->select('order.*','users.name')
         ->get();

         if(empty($list)){ }
         return view('customerorders',['orders'=>$list]);
        }




         static function viewOrderDetail($order_id){

         $orderdetails=DB::table('orderdetail')
         ->join('products','orderdetail.product_id','=','products.Product_id')
         ->join('order','orderdetail.order_id','=','order.Order_Id')
         ->join('subcategory','products.Subcategory_id','=','subcategory.Subcategory_ID')
         ->join('category','products.Category_ID','=','category.Category_ID')
         ->where('order.Order_Id',$order_id)
         ->select('products.*','orderdetail.*','subcategory.name as SubName','category.name as CategName')
         ->get();//we need to get category and subcategory

         return $orderdetails;



       }


       public function UpdateStatus(Request $req, $id){

         if($req->status == 1){
           DB::table('order')->where('Order_Id',$id)->update(['status'=>'Shipped']);
           return redirect('OrdersViewAdmin')->back()->with(['message' => 'Status Updated Successfully ']);

         }elseif ($req->status == 2){
         DB::table('order')->where('Order_Id',$id)->update(['status'=>'Delivered']);
         return redirect('OrdersViewAdmin')->back()->with(['message' => 'Status Updated Successfully ']);
        }elseif ($req->status == 3){
        DB::table('order')->where('Order_Id',$id)->update(['status'=>'Completed']);
        return redirect('OrdersViewAdmin')->back()->with(['message' => 'Status Updated Successfully ']);
       }else{
       DB::table('order')->where('Order_Id',$id)->update(['status'=>'Canceled']);
       return redirect('OrdersViewAdmin')->back()->with(['message' => 'Status Updated Successfully ']);
      }
    }

/* $orders=Order::select('user_id',
        DB::raw('count(Order_Id) as Number_of_Orders'))->groupBy('user_id')->get();
        $users=User::all();

        foreach($users as $user){
          foreach($orders as $o){
        if ($user->id == $o->user_id){
          $view=array("user_id"=>$user->id,
                      "name"=>$user->name,
                      "number_of_orders"=>$o->Number_of_Orders);
             }
           }
        }
*/









    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
