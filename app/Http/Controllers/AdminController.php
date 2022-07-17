<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //
    function login(Request $req){
      $admin= Admin::where(['email'=>$req->email])->first();

      if(!$admin || !Hash::check($req->password,$admin->password))
      {
        return "email or password is invaild ";
      }
      else {
        $req->session()->put('admin',$admin);
        return redirect('adminpanel');
      }
    }
}
