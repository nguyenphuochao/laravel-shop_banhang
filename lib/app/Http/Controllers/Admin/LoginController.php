<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Mail;
class LoginController extends Controller
{
    //đăng nhập của admin
   public function getLogin(){
       return view('backend.login');
   }
   //yêu cầu đăng nhập
   public function postLogin(Request $request){
    $arr = [
        'email' => $request->email,
        'password' => $request->password,
        'quyen' => 1
    
    ];
       if($request->remember='remember_token'){
           $remember=true;
       }else{
           $remember=false;
       }  
           
        if(Auth::attempt($arr,$remember)){
            
            return redirect()->intended('admin/home');
        }else{
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng!');
        }
    }
    //trang quên mật khẩu
    public function getReset(){
        return view('backend.quenmatkhau');
    }
    //gửi yêu cầu quên password qua mail
    public function postReset(Request $req){
        $email=$req->email;
        $checkUser=User::where('email',$email)->first();
        if(!$checkUser){
            return redirect()->back()->with(['flag'=>'danger','message'=>'Thông tin emai không tồn tại']);
        }
        $code=bcrypt(md5(time().$email));
       
        $checkUser->code=$code;
        $checkUser->time_code=Carbon::now();
        $checkUser->save();
        $url=route('laymatkhauadmin',['code'=>$checkUser->code]);
        $data=[
            'route'=>$url
        ];

        Mail::send('backend.guimatkhauadmin', $data, function ($message) use ($email) {
            $message->to($email, 'John Doe')->subject('Lấy lại mật khẩu');
           
        });
        return redirect()->back()->with(['flag'=>'success','message'=>'Link lấy lại mật khẩu đã gửi vào email của bạn']);
     }     
     //trang xem lấy mật khẩu
     public function getLayMatKhau(){
         return view('backend.resetpass');
     }
     //trang gửi yêu cầu quên password
     public function postLayMatKhau(Request $reqpassword){
        if($reqpassword->password){
            
            $email=$reqpassword->email;        
            $code=$reqpassword->code;         
            $checkUser=User::where([
               'code'=>$code
              
                ])->first();
            if(!$checkUser){
                return redirect()->back()->with(['flag'=>'danger','message'=>'Xin lỗi!Đường dẫn link của bạn sai! Hãy thử lại']);
            }else
           
               $checkUser->password=bcrypt($reqpassword->password);
               $checkUser->save();
               return redirect()->back()->with(['flag'=>'success','message'=>'Mật khẩu đã thay đổi thành công, mời bạn đăng nhập!']);
            }
        }
     }
    
