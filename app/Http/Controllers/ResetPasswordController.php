<?php

namespace App\Http\Controllers;

use App\Setting;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function ressetForm()
    {

        return view('authentication.reset_pass');
    }

    public function checkExist(Request $request)
    {
        $request->validate([
            'email'         => 'required',
            'password'      => 'required',
            'repassword'    => 'required'
        ]);

        $emailReq    = $request->email;
        $passwordReq = $request->password;
        $repasswordReq = $request->repassword;
        $rememberReq = $request->remember_token;

        if($repasswordReq == $passwordReq) {
            $users = User::select('*')->get();
            foreach ($users as $user) {
                if($user->email == $emailReq) {
                    DB::table('users')->where('id',$user->id)->update(["password" => bcrypt($passwordReq)]);
                    return redirect()->route('dashboard')->with(['message' => 'Đổi mật khẩu thành công!!']);
                }
            } 
        }
       return redirect()->route('resetpassword')->with('errorcredentials','Xác nhận mật khẩu không đúng!');
    }
}