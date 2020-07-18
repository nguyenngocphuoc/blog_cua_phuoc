<?php

namespace App\Http\Controllers;

use App\InfoSubmit;
use App\GroupCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InfoSubmitController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function index()
    {
        $listInfoSubmit = InfoSubmit::with('groupCategory')->latest()->get();

        return view('backend.info_submit.index', compact('listInfoSubmit'));
    }

    public function register()
    {
        $arrCategory = GroupCategory::latest()->get();
        // array("1" => "Du học Hàn Quốc", "2" => "Thực tập sinh Hàn Quốc", "3" => "Kỹ sư Hàn Quốc", "4" => "Kỹ năng đặc định");
        return view('view.contact',compact('arrCategory'));
    }

    public function registration(Request $request)
    {

        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255',
            'date_of_birth'  => 'max:10',
            'orders'         => 'required|string|min:1',
            'phone'          => 'required|string|min:1|max:15',
            'address'        => 'max:255',
        ]);

        $infoSubmit = InfoSubmit::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'group_category_id'  => $request->orders
        ]);
        // return view('authentication.register',compact('arrCategory'));
        // return Redirect::back()->withErrors(['msg', 'The Message']);
        return redirect()->route('home')->with('messageSuccess', 'Bạn đã đăng ký tư vấn thành công. Chúng tôi sẽ gọi điện lại cho bạn trong thời gian sớm nhất');
        // return redirect()->route('home');
    }

    public function destroy(InfoSubmit $infoSubmit)
    {
        $infoSubmit = InfoSubmit::findOrFail($group_category->id);

        // if(file_exists(public_path('images/') . $group_category->image)){
        //     unlink(public_path('images/') . $group_category->image);
        // }

        $infoSubmit->delete();

        return back()->with(['message' => 'Info deleted successfully!']);
    }


}
