<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Contact;
use App\Models\Comment;
use DB;
class KhachhangController extends Controller
{
    //xem danh sách khách hàng
    public function getKhachhang(){
        $khachhang = DB::table('users')
        ->join('customer', 'users.id', '=', 'customer.id_user')
        ->select('*')
        ->get();
        return view('backend.khachhang',compact('khachhang'));
    }
    // xóa khách hàng theo id
    public function getDeleteKhachhang($id){
        Customer::destroy($id);
        return back();
    }
    // xem danh sách bình luận
    public function getBinhLuan(){
        $data['comment']=DB::table('products')-> join('binh_luan','products.id','=','binh_luan.product')->select('*')
        ->paginate(10);
        return view('backend.binhluan',$data);
    }
    // xóa bình luận theo id
    public function getDeleteBinhLuan($id){
        Comment::destroy($id);
        return back();
    }
    //  xem danh sách liên hệ
    public function getLienHe(){
        $data['lienhe']=Contact::all();
        return view('backend.lienhe',$data);
    }
    //xóa liên hệ theo id
    public function getDeleteLienHe($id) {
        Contact::destroy($id);
        return back();
    }
}
