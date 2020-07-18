<?php

namespace App\Http\Controllers;

use App\InfoSubmit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InfoSubmitController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register()
    {
        $arrCategory = array("1" => "Du học Hàn Quốc", "2" => "Thực tập sinh Hàn Quốc", "3" => "Kỹ sư Hàn Quốc", "4" => "Kỹ năng đặc định");
        return view('authentication.register',compact('arrCategory'));
    }

    public function registration(Request $request)
    {

        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255',
            'date_of_birth'  => 'max:10',
            'category_id'    => 'required|string|min:1|max:2',
            'phone'          => 'required|string|min:1|max:15',
            'address'        => 'max:255',
        ]);

        $infoSubmit = InfoSubmit::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'category_id'   => $request->category_id,
            'phone'         => $request->phone,
            'address'       => $request->address
        ]);

        return redirect()->route('dashboard');
    }


}
