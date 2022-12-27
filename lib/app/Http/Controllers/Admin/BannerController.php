<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Http\Requests\AddBannerRequest;
use DB;



class BannerController extends Controller
{
    //xem banner
    public function getBanner(){
        $data['banner']=Slide::get();
        return view('backend.banner',$data);
    }
    //xóa banner theo id
    public function getDeleteBanner($id){
            Slide::destroy($id);
            return back();
    }
    //trang xem thêm banner
    public function getAddBanner(){
        return view('backend.addbanner');
    }
    //trang thêm banner
    public function postAddBanner(AddBannerRequest $req){
        $banner = new Slide;
       $banner->name=$req->name;
       $banner->noidung=$req->noidung;
       $banner->image=$req->img;
       $banner->link=$req->diachi;
       $banner->save();
         return redirect()->intended('admin/banner');
        }
        public function getEditBanner($id){
            $data['banner']=Slide::find($id);
            return view('backend.editbanner',$data);
    }
    //Sửa thông tin bannner
    public function postEditBanner(Request $request,$id){
        $banner=Slide::find($id);
        if($request->has('img')){
        
            $file=$request->img;
            //lấy tên file
            $filename=$request->img->getClientOriginalName();
            //upload
            $file->move(base_path('source/image/slide/'),$filename);
        }else
        $filename=$banner->image;
       
        $banner->name=$request->name;
        $banner->noidung=$request->noidung;
        $banner->image=$filename;
        $banner->link=$request->diachi;
        $banner->save();
  
            return redirect()->intended('admin/banner/');
        }

    }

