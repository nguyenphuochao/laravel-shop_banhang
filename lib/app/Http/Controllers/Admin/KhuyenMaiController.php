<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\KhuyenMai;
use App\Models\ProductType;
use DB;
class KhuyenMaiController extends Controller
{
    //xem danh sách khuyến mãi
   public function getKhuyenMai(){
    $data['km'] = DB::table('products')
    ->join('khuyen_mai', 'products.id', '=', 'khuyen_mai.id_pro')
    ->select('*')
    ->get();
   
       return view('backend.khuyenmai',$data    );
   }
   //trang xem thêm khuyến mãi
   public function getAddKhuyenMai(){
       $data['product']=Product::all();
       return view('backend.addkhuyenmai',$data);
   }
   //trang thêm khuyến mãi
   public function postAddKhuyenMai(Request $req){
    $this->validate($req,
    [
    'cate'=>'unique:khuyen_mai,id_pro',
    'date_start'=>'required',
    'date_end'=>'required',

    
   
    ],
    [
    'cate.unique'=>'Sản phẩm này đang trong chương trình khuyến mãi!',
    'date_start.required'=>'Bạn chưa nhập ngày bắt đầu!',
    'date_end.required'=>'Bạn chưa nhập ngày kết thúc!'
       
    ]);
    
        $km=new KhuyenMai;
        $km->name=$req->name;
        $km->id_pro=$req->cate;
        $km->gift=$req->gift;
        $km->number=$req->number;
        $km->start_date=$req->date_start;
        $km->end_date=$req->date_end;
        $km->save();
        return redirect()->intended('admin/khuyenmai');
    }
    //trang xóa khuyến mãi theo id
    public function getDeleteKhuyenMai($id){
        KhuyenMai::destroy($id);
        return back();
    }
    //trang sửa khuyến mãi
    public function getEditKhuyenMai($id){
        $data['cate']=Product::all();
        $data['km']=KhuyenMai::find($id);
        return view('backend.editkhuyenmai',$data);
    }
    //sửa khuyến mãi theo id
    public function postEditKhuyenMai(Request $request,$id){
        $km=KhuyenMai::find($id);

        $km->name=$request->name;
        $km->id_pro=$request->cate;
        $km->gift=$request->gift;
        $km->number=$request->number;
        $km->start_date=$request->date_start;
        $km->end_date=$request->date_end;
        $km->save();
  
            return redirect()->intended('admin/khuyenmai/');
      
    }
}
