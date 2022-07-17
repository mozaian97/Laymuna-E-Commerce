<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product ;
use App\Models\Category ;
use App\Models\Subcategory ;
use App\Models\Cart ;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function viewProducts()
   {
       //
       $products=DB::table('products')
       ->join('subcategory','products.Subcategory_id','=','subcategory.Subcategory_ID')
       ->join('category','products.Category_ID','=','category.Category_ID')
       ->select('products.*','subcategory.name as SubName','category.name as CategName')
       ->paginate(16);

       return view('adminproducts',['products'=>$products]);
   }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function Search(Request $req)
   {
     $products=DB::table('products')
     ->join('subcategory','products.Subcategory_id','=','subcategory.Subcategory_ID')
     ->join('category','products.Category_ID','=','category.Category_ID')
     ->where ('products.name','like','%'.$req->input('search').'%')
     ->orwhere('products.Product_id','=',$req->input('search'))
     ->select('products.*','subcategory.name as SubName','category.name as CategName')
     ->paginate();

     if(empty($products)){ }
       return view('adminproducts',['products'=>$products]);
    }




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
   public function addProduct(Request $req)
   {
    $product = new Product ;
    $categoies=Category::all();
    $subcategoies=Subcategory::all();
    $product->name=$req->name;
    $product->price=$req->price;
    $product->description=$req->description;

    foreach ($categoies as $category) {
      if ($req->category== $category->Category_ID) {
        $product->Category_id=$req->category;
      }
    }
    foreach ($subcategoies as $subcategory) {
      if ($req->subcategory== $subcategory->Subcategory_ID) {
        $product->Subcategory_id=$req->subcategory;
      }
    }


    $product->image=$req->image;
    $product->Deleted_Status=0;
    $product->save();


    return redirect('adminproducts')->back()->with(['message' => 'Product Added Successfully ']);

   }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */



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
   public function UpdateProduct(Request $req , $id)
   {
       //
       $old=DB::table('products')->all();
    try{
       foreach($old as $value){
           DB::table('products')->where('Product_id',$id)->update(['name'=>$req->updateName]);
           DB::table('products')->where('Product_id',$id)->update(['name'=>$req->updatePrice]);
           DB::table('products')->where('Product_id',$id)->update(['name'=>$req->updateSubcateogry]);
           DB::table('products')->where('Product_id',$id)->update(['name'=>$req->updateDescription]);
           DB::table('products')->where('Product_id',$id)->update(['name'=>$req->updateImage]);
          return redirect('adminproduct')->back()->with(['message' => 'Product Updated Successfully']);

       }
     }catch (QueryException $e){
       return back()->withError($e->getMessage())->withInput();
     }

   }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
     Cart::where('product_id',$id)->update(['Deleted_Status'=>1]);
     Product::where('Product_id',$id)->delete();
     return redirect('adminproduct')->back()->with(['message' => 'Product Deleted Successfully']);

   }
}
