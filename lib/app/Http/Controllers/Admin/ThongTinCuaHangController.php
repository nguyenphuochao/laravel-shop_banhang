<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use DB;

class ThongTinCuaHangController extends Controller
{
//xem danh sách thông tin cửa hàng
 public function getThongTin(){
     $data['about']=About::all();
     return view('backend.thongtincuahang',$data);
 }
 //trang xem thêm thông tin cửa hàng
 public function getAddThongTin(){
    return view('backend.addthongtin');
 }
//trang thêm thông tin cửa hàng
 public function postAddThongTin(Request $req){
    $about=new About;
    $about->title=$req->title;
    $about->mo_ta=$req->mo_ta;
    $about->save();
    return redirect()->intended('admin/thongtincuahang');
    }
    //xóa thông tin theo id
    public function getDeleteThongTin($id){
        About::destroy($id);
        return redirect()->back()->with('mess','Xóa thành công');
    }
    //trang sửa thông tin cửa hàng
    public function getEditThongTin($id){
        $data['about']=About::find($id);
        return view('backend.editthongtin',$data);
    }
    //sửa thông tin cửa hàng theo id
    public function postEditThongTin(Request $req,$id){
        $use =About::find($id);
        $use->title=$req->title;
        $use->mo_ta=$req->mo_ta;
        $use->save();
        return redirect()->intended('admin/thongtincuahang');
    }
}
