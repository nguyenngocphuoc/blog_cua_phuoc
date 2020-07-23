<?php

namespace App\Http\Controllers;

use App\Setting;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function ressetForm()
    {
        $setting = Setting::first();

        return view('authentication.reset_pass',compact('setting'));
    }

    public function checkExist(Request $request)
    {
        // $request->validate([
        //     'email'         => 'required',
        //     'password'      => 'required',
        //     'repassword'    => 'required',
        //     'remember'      => 'required'
        // ]);

        $emailReq    = $request->email;
        $passwordReq = $request->password;
        $repasswordReq = $request->repassword;
        $rememberReq = $request->remember_token;
        if($repasswordReq == $passwordReq) {
            $users = User::select('*')->get();
            foreach ($users as $user){
            if($user->email == $emailReq) {
                DB::table('users')->where('id',$user->id)->update(["password" => $passwordReq]);
                return redirect()->intended('dashboard');
            }
        } 
    }
}
}