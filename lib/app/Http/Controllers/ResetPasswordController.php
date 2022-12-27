<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use App\Notifications\ResetPasswordRequest;
use Str;
use Mail;
class ResetPasswordController extends Controller
{

    public function getQuenMatKhau(){
        return view('page.quenmatkhau');
     }
    public function postQuenMatKhau(Request $request){
        $user = User::where('email', $request->email)->firstOrFail();
        $passwordReset = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random(60),
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }
        return redirect()->back()->with(['flag'=>'success','message'=>'Link lấy lại mật khẩu đã gửi vào email của bạn']);
    }
    public function getLayMatKhau($token)
     {
       return view('page.click_reset');
     }
}
