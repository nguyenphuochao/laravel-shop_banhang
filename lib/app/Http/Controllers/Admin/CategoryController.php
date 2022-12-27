<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\AddEditCateRequest;

class CategoryController extends Controller
{
    //xem danh sách danh mục
    public function getCate(){
        $data['catelist']=ProductType::all();
        return view('backend.category',$data);
    }
    //thêm danh mục
    public function postCate(AddCateRequest $request ){
            $category=new ProductType;
            $category->name=$request->name;

            $category->save();
            return back()->with('thongbao','Thêm thành công');
    }
    //trang sửa danh mục
    public function getEditCate($id){
        $data['cate']=ProductType::find($id);
        return view('backend.editcategory',$data);
    }
    // xóa danh mục theo id
    public function getDeleteCate($id){
        ProductType::destroy($id);
        return back();
    }
    //Sửa danh mục theo id
    public function postEditCate(AddEditCateRequest $request,$id){
        $category= ProductType::find($id);
            $category->name=$request->name;
            $category->save();
            return redirect()->intended('admin/category/')->with('thongbao','Sửa thành công');
    }
}
