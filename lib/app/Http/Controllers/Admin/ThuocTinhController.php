<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;

class ThuocTinhController extends Controller
{
   public function getThuocTinh(){
       return view('backend.thuoctinh');
   }
   public function getAddThuocTinh(){
       return view('backend.addthuoctinh');
   }
   public function postAddThuocTinh(Request $req){
     
    $data=new Attribute;
    $data->name=$req->name;
    $data->value=$req->value;
    $data->save();
    return back();
   }
}
