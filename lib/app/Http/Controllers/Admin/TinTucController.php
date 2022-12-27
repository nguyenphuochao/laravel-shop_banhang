<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use DB;
use App\Models\NewsDetail;
class TinTucController extends Controller
{
    //trang xem danh sách tin tức
    public function getTinTuc(){
        $data['tintuc']=DB::table('news')->orderBy('id','desc')->paginate(7);
        return view('backend.tintuc',$data);
    }
    //trang thêm tin tức
    public function getAddTinTuc(){
        
        return view('backend.addtintuc');
    }
    //thêm tin tức
    public function postAddTinTuc(Request $req){

        $this->validate($req,
        [
        'name'=>'unique:news,title',
       
        ],
        [
            'name.unique'=>'Tiêu đề đã có', 
        ]);
        $new = new News;
       $new->title=$req->name;
       $new->content=$req->noidung;
       $new->image=$req->img;
       $new->new=$req->tintuc;
       $new->tacgia=$req->tacgia;
       $new->news_detail=$req->chitiet;
       $new->save();
         return redirect()->intended('admin/tintuc');
 }
 //trang sửa tin tức
    public function getEditTinTuc($id){
        $data['tintuc']=News::find($id);
        return view('backend.edittintuc',$data);
    }
    //sửa tin tức
    public function postEditTinTuc(Request $req,$id){
         $new=News::find($id);
        if($req->has('img')){
        
            $file=$req->img;
            //lấy tên file
            $filename=$req->img->getClientOriginalName();
            //upload
            $file->move(base_path('source/image/tintuc/'),$filename);
    }else
        $filename=$new->image;
       
        $new->title=$req->name;
        $new->content=$req->noidung;
        $new->image=$filename;
        $new->new=$req->tintuc;
        $new->tacgia=$req->tacgia;
        $new->news_detail=$req->chitiet;
        $new->save();
  
            return redirect()->intended('admin/tintuc/');
        }
    
    //xóa tin tức theo id
    public function getDeleteTinTuc($id){
        News::destroy($id);
        return back();
    }
    //trang xem danh sách chi tiết tin tức
    public function getXemChiTietTinTuc($id){
        $data['chitiet']=News::find($id);
        return view('backend.chitiettintuc',$data);
    }

}
