<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Comment;
use App\Models\Cart;
use App\Models\User;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\News;
use Hash;
use Auth;
use Session;
use Mail;
use App\Models\Contact;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Models\NewsDetail;
use App\Models\ProductAltr;
use App\Models\Attribute;
class PageController extends Controller
{

    //trang chủ
    public function getIndex(){
        $slide=Slide::all();
        $new_product=Product::where('new',1)->paginate(8);
        $sanpham_khuyenmai=Product::where('promotion_price','<>',0)->paginate(8);
        $km_pro = DB::table('products')
        ->join('khuyen_mai', 'products.id', '=', 'khuyen_mai.id_pro')
        ->select('*')
        ->get();
        return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai','km_pro'));
    }
    //lấy sản phẩm theo danh muc
    public function getLoaiSanPham($type){ 
        $sp_theoloai=Product::where('id_type',$type)->paginate(6);
        $sp_khac=Product::where('id_type','<>',$type)->paginate(3);
        $loai=ProductType::all();
        $ten_loai=ProductType::where('id',$type)->first();
        return view('page.loaisanpham',compact('sp_theoloai','sp_khac','loai','ten_loai'));
    }
    // xem chi tiết sản phẩm,lấy sản phẩm cùng loại,xem bình luận sản phẩm
    public function getChiTiet(Request $req,$id)
    {
        $data=Comment::where('product',$id)->get();
        $new_product=Product::where('new',1)->paginate(4);
        $sp_duoi_10trieu=Product::where('unit_price','<','10000000')->paginate(4);
        $sanpham=Product::where('id',$req->id)->first();
        $sanpham_tuongtu=Product::where('id_type',$sanpham->id_type)->paginate(3);
        $km=DB::table('khuyen_mai')->where('id_pro',$id)->get();
        return view('page.chitiet',compact('sanpham','sanpham_tuongtu','new_product','sp_duoi_10trieu','data','km'));
    }
    //xem thông tin liên hệ
     public function getLienHe(){
         return view('page.lienhe');
     }
     //gửi thông tin liên hệ
     public function postLienHe(Request $req) {
        $data=$req->except('_token');
        Contact::insert($data);
        return redirect()->back()->with('thanhcong','Bạn đã gửi thành công');
     }
     //xem tin tức
     public function getTinTuc(){
        $data['tintuc']=News::where('new',1)->paginate(5);
        $data1['noibat']=News::where('new',0)->paginate(6);
            return view('page.tintuc',$data,$data1);
    }
    //xem chi tiết của tin tức
    public function getChiTietTinTuc($id){
       $data['chitiet']=News::find($id);
             $data['news'] = DB::table('news')->paginate(6);
            return view('page.news_detail',$data);
    }
    //xem giới thiệu
     public function getGioiThieu(){
         $data['about']=About::get();
         return view('page.gioithieu',$data);
     }
     //gửi bình luận
     public function postBinhLuan(Request $request ,$id){
        $comment=new Comment;
        $comment->name= $request->name;
        $comment->email= $request->email;
        $comment->noi_dung= $request->description;
        $comment->product=$id;
        $comment->save();
            return back()->with('thongbao','Cảm ơn bạn đã bình luận');  
     }
     //lấy sản phẩm vào giỏ hàng
    public function getAddtoCart(Request $req,$id){
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
            return redirect()->back();   
    }
    //thêm nhiều số lượng vào giỏ hàng ajax
    public function postAddCartDetail(Request $req,$id,$quanty){
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->addCartItem($product,$id,$quanty);
        $req->session()->put('cart',$cart);

            return redirect()->back();   
    }
    
    //xóa sản phẩm khỏi giỏ hàng
    public function getDeleteCart($id){
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return back();
    }
    //view cart
    public function getViewCart(){
        
        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            return view('page.update_cart',['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>
            $cart->totalQty]);
                }
                else{
                    return view('page.update_cart');
                }
    }
    //updatecart
    public function getUpdateCart(Request $req,$id,$quanty){
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->UpdateItemCart($id,$quanty);

        $req->Session()->put('cart',$cart);
      
        return back();
    }
    //xem trang đăng kí
    public function getDangki(){
        return view('page.dangki');
    }
    // public function postDangki(Request $req){
    //     $this->validate($req,
    //         [
    //         'email'=>'required|email|unique:users,email',
    //         'password'=>'required|min:6|max:20',
    //         'fullname'=>'required',
    //         're_password'=>'required|same:password',
           
    //         ],
    //         [
    //         'email.required'=>'Vui lòng nhập email',
    //         'email.email'=>'Không dúng định dạng email',
    //         'email.unique'=>'Email đã có người sử dụng',
    //         'password.required'=>'Vui lòng nhập password',
    //         're_password.same'=>"Mật khẩu ko giống nhau",
    //         'password.min'=>"Mật khẩu ít nhất 6 kí tự"
               
    //         ]);
    //     $use = new User();
    //     $use->email=$req->email;
    //     $use->fullname=$req->fullname;
    //     $use->address=$req->address;
    //     $use->phone=$req->phone_numer;
    //     $use->password=Hash::make($req->password);
    //     $use->quyen=0;
    //     $use->save();
    //         return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');

    // }
    
    //gửi xác nhận đăng kí
    public function postXacNhanDangKi(Request $req) {
        $this->validate($req,
            [
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            'fullname'=>'required',
            're_password'=>'required|same:password',
           
            ],
            [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không dúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập password',
            're_password.same'=>"Mật khẩu ko giống nhau",
            'password.min'=>"Mật khẩu ít nhất 6 kí tự"
               
            ]);
            $use = new User();
            $use->email=$req->email;
            $use->fullname=$req->fullname;
            $use->address=$req->address;
            $use->phone=$req->phone_numer;
            $use->password=Hash::make($req->password);
            $use->quyen=0;
            $use->active=0;
            $use->save();
        if($use->id){
            $email=$use->email;
            $code=bcrypt(md5(time().$email));
            $url=route('xac_nhan_dang_ki',['id'=>$use->id,'code'=>$code]);

            $use->code_active=$code;
            $use->time_active=Carbon::now();
            $use->save();
            $data=[
                'route'=>$url
            ];
    
            Mail::send('page.xacnhan_dangki', $data, function ($message) use ($email) {
                $message->to($email, 'John Doe')->subject('Xác nhận đăng kí tài khoản');
               
            });
            return redirect()->back()->with('thanhcong','Tạo tài khoản thành công! Kiểm tra email của bạn để kích hoạt nha');
        }
    
    }
    //gửi mail đăng kí xác nhận
    public function getXacNhanDangKi(Request $req) {
            $code=$req->code;        
            $id=$req->id;  
               
            $checkUser=User::where([
              'code_active'=>$code,
              'id'=>$id           
                ])->first();
             
            if(!$checkUser){
                return redirect()->back()->with(['kich_hoat'=>'danger','message'=>'Xin lỗi! Đường dẫn xác nhận tài khoản của bạn sai! Hãy thử lại']);
            }else     
            $checkUser->active=1;
            $checkUser->save();
               return redirect()->route('trang-chu')->with(['kich_hoat'=>'success','message'=>'Tài khoản của bạn đã được kích hoạt!']);
    }
    //đăng nhập
    public function getLogin(){
         return view('page.dangnhap');
     }
     public function postLogin(Request $req){
      
         $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'

            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không dúng định dạng email',
                'password.required'=>'Vui lòng nhập password',
                'password.min'=>"Mật khẩu ít nhất 6 kí tự",
                'password.max'=>"Mật khẩu ko được quá 20 kí tự"
                ]
            );
            $arr = [
                'email' => $req->email,
                'password' => $req->password,
                'quyen' => 0,
                'active'=>1
            
            ];
                if(Auth::attempt($arr)){
                     return redirect()->route('trang-chu')->with(['flags'=>'success','message'=>'Đăng nhập thành công']);
                }else{
                     return redirect()->back()->with(['flags'=>'danger','message'=>'Đăng nhập không thành công! Tài khoản của bạn chưa được kích hoạt']);
                }
     }
     //Sửa thông tin
     public function getInfoUser(){
         
         $user=Auth::user();
         return view('page.info_user',compact('user'));
     }
     public function postInfoUser(Request $req){
        $use =Auth::user();
        $use->fullname=$req->fullname;
        $use->address=$req->address;
        $use->phone=$req->phone;
        $use->password=bcrypt($req->password);
        $use->quyen=0;
        $use->save();
        return redirect()->back()->with(['flag'=>'success','message'=>'Sửa thông tin thành công']);
     }
     //xem trang đổi mật khẩu user
    public function getChangePassInfoUser(){
            return view('page.doimatkhau_thanhvien');
    }
    //thực hiện đổi mật khẩu
    public function postChangePassInfoUser(Request $req){
        $this->validate($req,
        [
        'password'=>'required|min:6|max:20',
        'repassword'=>'required|same:password',
       
        ],
        [
            'password.required'=>'Vui lòng nhập password',
            'repassword.same'=>"Mật khẩu ko giống nhau",
            'password.min'=>"Mật khẩu ít nhất 6 kí tự"
        ]); 
        $use =Auth::user();
        $use->password=bcrypt($req->password);
        $use->save();
        return redirect()->route('info_user')->with(['flag'=>'success','message'=>'Sửa thông tin thành công']);
    }
    //Đăng xuất
    public function postLogout(){
        Auth::logout();
         return redirect()->route('trang-chu');
    }
    //tìm kiếm
    public function getSearch(Request $req){
         $product=Product::where('pro_name','like','%'.$req->key.'%')
                ->orWhere('unit_price',$req->key)
                ->get();
             return view('page.search',compact('product'));
            }
    // xem đơn đặt hàng thanh toán
    public function getCheckout(){
        $user['user'] =Auth::user();
        if(Session::has('cart')){
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('page.dathang',$user,['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>
        $cart->totalQty]);
            }
            else{
                return view('page.dathang',$user);
            }
        }
    // gửi mail đơn hàng
    public function postCheckout(Request $req){
        $cart = Session::get('cart');
        $user =Auth::user();

        $customer=new Customer;
        $customer->id_user=$user->id;
        $customer->gender=$req->gioitinh;
        $customer->note=$req->note;
        $customer->trangthai=0;
        $customer->save();
       

        $bill=new Bill();
        $bill->id_customer=$customer->id;
        $bill->date_order=date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->payment=$req->payment_method;
        $bill->note=$req->note;
        $bill->save();

        foreach ($cart->items as $key => $value) {
        $billdetail=new BillDetail;
        $billdetail->id_bill=$bill->id;
        $billdetail->id_product=$key;
        $billdetail->quantity=$value['qty'];
        $billdetail->unit_price=$value['price']/$value['qty'];
        $billdetail->save();
        }
        $data['info']=$req->all();
        $email=$req->email;
        $data['hoadon'] = Session::get('cart');

        Mail::send('page.emailhoadon', $data, function ($message) use($email) {   
            $message->from('nguyenphuochao456@gmail.com', 'Hao Nguyen');
          
            $message->to($email, 'You');
            $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe');
            $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Xác nhận hóa đơn mua hàng');
                      
        });
       
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công! Kiểm tra hóa đơn trên email của bạn');
    }

    //quên mật khẩu
    public function getQuenMatKhau(){
        return view('page.quenmatkhau');
    }
    public function postQuenMatKhau(Request $req){
        $email=$req->email;
        $checkUser=User::where('email',$email)->first();
        if(!$checkUser){
            return redirect()->back()->with(['flag'=>'danger','message'=>'Thông tin emai không tồn tại']);
        }
        $code=bcrypt(md5(time().$email));
      
        $checkUser->code=$code;
        $checkUser->time_code=Carbon::now();
        $checkUser->save();
        $url=route('laymatkhau',['code'=>$checkUser->code]);
        $data=[
            'route'=>$url
        ];

        Mail::send('page.reset', $data, function ($message) use ($email) {
            $message->to($email, 'John Doe')->subject('Lấy lại mật khẩu');
           
        });
        return redirect()->back()->with(['flag'=>'success','message'=>'Link lấy lại mật khẩu đã gửi vào email của bạn']);
    }   
    // trang lấy mật khẩu  
    public function getLayMatKhau()
     {
       
       return view('page.click_reset');
    }
    // gửi yêu cầu lấy mật khẩu
    public function postLayMatKhau(Request $reqpassword){
        $this->validate($reqpassword,
        [
            'password'=>'required|min:6|max:20',
            'repassword'=>'required|same:password'

        ],
        [
            'password.required'=>'Vui lòng nhập password',
            'password.min'=>"Mật khẩu ít nhất 6 kí tự",
            'password.max'=>"Mật khẩu ko được quá 20 kí tự",
            'repassword.same'=>"Mật khẩu ko giống nhau"
            ]
        );

        if($reqpassword->password){
            $code=$reqpassword->code;        
            $checkUser=User::where([
              
                ])->first();
            if(!$checkUser){
                return redirect()->back()->with(['flag'=>'danger','message'=>'Xin lỗi!Đường dẫn link của bạn sai! Hãy thử lại']);
            }else
           
               $checkUser->password=bcrypt($reqpassword->password);
               $checkUser->save();
               return redirect()->route('login')->with(['flag'=>'success','message'=>'Mật khẩu đã thay đổi thành công, mời bạn đăng nhập!']);
            }
        }
    }
   