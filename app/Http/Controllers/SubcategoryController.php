<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory ;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function viewSubcategories()
     {
         //
         $subcategories=DB::table('subcategory')
         ->select('*')
         ->get();

         return view('subcategory',['subcategories'=>$subcategories]);
     }

    static function view()
     {
         //
         $subcategories=DB::table('subcategory')
         ->select('*')
         ->get();

         return $subcategories;
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
     public function addSubcategory(Request $req)
     {
       $subcategory=new Subcategory;
       $name= Subcategory::where('name','=',$req->subcategoryname)->get();
       $ID=Subcategory::where('Subcategory_ID','=',$req->subcategoryId)->get();
         if(count($name) == 0 && count($ID)==0){
           $subcategory->name=$req->subcategoryname;
           $subcategory->Subcategory_ID=$req->subcategoryId;
           $subcategory->save();
           return redirect('/subcategory')->back()->with(['message' => 'Added Successfully']);
          }
          else{
            return redirect('/subcategory')->back()->with(['message' => 'already name and ID  existss']);

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
     public function UpdateSubcategory(Request $req , $id)
     {

         $check= Subcategory::where('name','=',$req->updatesubcategory)->get();
          if (count($check)==0){
            DB::table('subcategory')->where('Subcategory_ID',$id)->update(['name'=>$req->updatesubcategory]);

            return redirect('subcategory')->back()->with(['message' => 'Updated Successfully']);

          }
          else{
            return redirect('subcategory')->back()->with(['message' => 'Not Updated ']);
          }
     }


     /*
     try{
        foreach($old as $value){
          if(!(Str::upper($value->name) === Str::upper($req->updatesubcategory))){
            DB::table('subcategory')->where('Subcategory_ID',$id)->update(['name'=>$req->updatesubcategory]);
            return redirect('subcategory');
          }
          else {
            return "Enter same name of another category ";
          }
        }
      }catch (QueryException $e){
        return back()->withError($e->getMessage())->withInput();
      }

     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       Subcategory::where('Subcategory_ID',$id)->delete();
       return redirect('subcategory')->back()->with(['message' => 'Deleted Successfully ']);

     }
}
