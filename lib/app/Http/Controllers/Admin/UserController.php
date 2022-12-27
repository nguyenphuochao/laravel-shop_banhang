<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    //xem danh sách user
    public function getUser(){
         $user['user']=User::all();
        return view('backend.user',$user);
    }
    //xóa danh sách user theo id
    public function getDeleteUser($id){
        User::destroy($id);
        return back();
    }
    //trang thêm user
    public function getAddUser(){
        return view('backend.adduser');
    }
    //thêm user
    public function postAddUser(Request $req){
        $this->validate($req,
        [
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:6|max:20',
        'fullname'=>'required',
        'repassword'=>'required|same:password',
       
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không dúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập password',
            'repassword.same'=>"Mật khẩu ko giống nhau",
            'password.min'=>"Mật khẩu ít nhất 6 kí tự"
           
        ]);
        $use = new User();
        $use->email=$req->email;
        $use->fullname=$req->fullname;
        $use->address=$req->address;
        $use->phone=$req->phone;
        $use->password=bcrypt($req->password);
        $use->quyen=$req->thanhvien;
        $use->save();
         return redirect()->intended('admin/user');
    }
    //trang sửa user
    public function getEditUser($id){
        $data['user']=User::find($id);
        return view('backend.edituser',$data);
    }
    //sửa user
    public function postEditUser(Request $req,$id){
        $use =User::find($id);
        $use->fullname=$req->fullname;
        $use->address=$req->address;
        $use->phone=$req->phone;
        $use->quyen=$req->thanhvien;
        $use->save();
        return redirect()->intended('admin/user');
    }
    //trang đổi mật khẩu
    public function getEditPasswordUser($id){
        $data['user']=User::find($id);
        return view('backend.editpassuser',$data);
    }  
    //đổi mật khẩu     
    public function postEditPasswordUser(Request $req,$id){
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
        $use =User::find($id);
        $use->password=bcrypt($req->password);
        $use->save();
        return redirect()->intended('admin/user');
    }
    
}
