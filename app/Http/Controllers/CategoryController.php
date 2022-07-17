<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category ;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewCategories()
    {
        //
        $categories=DB::table('category')
        ->select('*')
        ->get();

        return view('category',['categories'=>$categories]);
    }


    static function view()
    {
        //
        $categories=DB::table('category')
        ->select('*')
        ->get();

        return $categories;
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
    public function addCategory(Request $req)
    {

        $category = new Category ;
        $name= Category::where('name','=',$req->categoryname)->get();
        $ID=Category::where('Category_ID','=',$req->categoryId)->get();
          if(count($name) == 0 && count($ID)==0){
            $category->name=$req->categoryname;
            $category->Category_ID=$req->categoryId;
            $category->save();
            return redirect('/category')->back()->with(['message' => 'Great News']);

           }
           else{
             return redirect('/category')->back()->with(['message' => 'already name exists and ID  exists']);
           }
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
    public function UpdateCategory(Request $req , $id)
    {

        $check= Category::where('name','=',$req->updatecategory)->get();
         if (count($check)==0){
           DB::table('category')->where('Category_ID',$id)->update(['name'=>$req->updatecategory]);
           return redirect('category')->back()->with(['message' => 'Name Updated Successfully']);

         }
         else{
           return redirect('category')->back()->with(['message' => 'Enter same name of another category ']);

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
      Category::where('Category_ID',$id)->delete();
      return redirect('category')->back()->with(['message' => 'Categoy Deleted Successfully ']);
    }
}
