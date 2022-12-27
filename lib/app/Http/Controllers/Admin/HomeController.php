<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
   public function getHome(){
       $data['products']=DB::table('products')->get();
       $data['comments']=DB::table('binh_luan')->get();
       $data['users']=DB::table('users')->get();
       $data['danhmuc']=DB::table('type_products')->get();
       return view('backend.index',$data);
   }
   //đăng xuất của admin
   public function getLogout(){
       Auth::logout();
       return redirect()->intended('login');
   }
}
