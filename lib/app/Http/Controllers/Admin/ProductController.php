<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Http\Requests\AddProductRequest;
use App\Models\Attribute;
use App\Models\ProductDetail;

use DB;

class ProductController extends Controller
{
    //trang xem danh sách sản phẩm
    public function getProduct(){
        $data['productlist']=DB::table('type_products')-> join('products','type_products.id','=','products.id_type')->select('*')
        ->paginate(10);
        $data['count']=Product::count();
        return view('backend.product',$data);
    }
    //trang xem thêm sản phẩm
    public function getAddProduct(){
        // $data['color']=Attribute::where('name','color')->get();
        // $data['dungluong']=Attribute::where('name','dungluong')->get();
        $data['catelist']=ProductType::all();
    
        return view('backend.addproduct',$data);
    }
    //thêm sản phẩm
    public function postAddProduct(Request $request){
        $this->validate($request,
            [
            'name'=>'unique:products,pro_name',
            'img'=>'image',
            'price'=>'min:1'
        ],
        [
            'name.unique'=>'Tên sản phẩm bị trùng',
            'img.image'=>'Phải chọn ảnh chứ',
            'price.min'=>'Ko dc nhập số 0 hoặc âm'
        ]
    );
       if($request->has('img')){
        
            $file=$request->img;
            //lấy tên file
            $filename=$request->img->getClientOriginalName();
            //upload
            $file->move(base_path('source/image/product/'),$filename);
        }else
        $filename=$product->image;
     
        $product=new Product;
        $product->pro_name=$request->name;
        $product->id_type=$request->cate;
        $product->description=$request->description;
        $product->parameter=$request->parameter;
        $product->unit_price=$request->price;
        $product->promotion_price=$request->promotion;
        $product->number=$request->number;
        $product->image=$filename;
        $product->tinhtrang=$request->condition;
        $product->trangthai=$request->status;
        $product->baohanh=$request->warranty;
        $product->phukien=$request->accessories;
        $product->new=$request->featured;
       $product->save();
        // $request->img->storeAs('avatar',$filename);
    //  foreach ((array)$request ->checkbox as $key=>$name) {
    //     $ProductDetail=ProductDetail::create([
    //        'id_pro'=>$product->id,
    //        'color'=>$request->checkbox[$key],
    //        'size'=>$request->c[$key]
    //    ]);
      
    
    // }
    
        return redirect()->intended('admin/product/')->with('thongbao','Thêm sản phẩm thành công');
    }
    //trang sừa sản phẩm 
    public function getEditProduct($id){
        $data['product']=Product::find($id);
        $data['listcate']=ProductType::all();
        // $data['size'] = DB::table('product_detail')->where('id_pro',$id)->pluck('size')->toArray();
        // $data['color'] = DB::table('product_detail')->where('id_pro',$id)->pluck('color')->toArray();
     
     
        return view('backend.editproduct',$data); 
    }
    //sửa sản phẩm theo id
    public function postEditProduct(Request $request,$id){
        $this->validate($request,
        [
       
        'price' =>'gt:0',
       
       
        ],
        [
        'price.gt'=>'Giá phải lớn hơn 0 và không được nhập số âm',
        
           
        ]);
       $product=Product::find($id);
        if($request->has('img')){
        
            $file=$request->img;
            //lấy tên file
            $filename=$request->img->getClientOriginalName();
            //upload
            $file->move(base_path('source/image/product/'),$filename);
        }else
        $filename=$product->image;
       
        $product->pro_name=$request->name;
        $product->id_type=$request->cate;
        $product->description=$request->description;
        $product->parameter=$request->parameter;
        $product->unit_price=$request->price;
        $product->promotion_price=$request->promotion;
        $product->number=$request->number;
        $product->image=$filename;
        $product->tinhtrang=$request->condition;
        $product->trangthai=$request->status;
        $product->baohanh=$request->warranty;
        $product->phukien=$request->accessories;
        $product->new=$request->featured;
        $product->save();
        return redirect()->intended('admin/product/')->with('thongbao','Cập nhật thành công');
    }
    //xóa sản phẩm theo id
        public function getDeleteProduct($id){
            Product::destroy($id);
            return back();
        }
        //tìm kiếm sản phẩm theo tên hoặc giá
        public function getTimKiem(Request $req){
            $product=Product::where('pro_name','like','%'.$req->key.'%')
            ->orWhere('unit_price',$req->key)
             ->paginate(5);
                return view('backend.timkiem',compact('product'));
        }

}
