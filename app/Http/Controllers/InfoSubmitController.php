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
        $listInfoSubmit = InfoSubmit::latest()->get();
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
            'email'          => 'max:255',
            'message'  => 'required',
            'phone'          => 'required|string|min:1|max:15',
            'address'        => 'max:255',
        ]);

        $infoSubmit = InfoSubmit::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'message'       => $request->message,
            'phone'         => $request->phone,
            'orders'        => $request->orders
        ]);
        return redirect()->back()->with(['message' => 'successfully!']);
    }

    public function destroy(InfoSubmit $infoSubmit)
    {
        $infoSubmit = InfoSubmit::findOrFail($infoSubmit->id);

        // if(file_exists(public_path('images/') . $group_category->image)){
        //     unlink(public_path('images/') . $group_category->image);
        // }

        $infoSubmit->delete();

        return back()->with(['message' => 'Info deleted successfully!']);
    }

    public function readed($id)
    {
        $infoSubmit = InfoSubmit::whereId($id)->update([
            'status'        => 1
        ]);
        return 'successfully!';
    }

    public function unreadedNotify()
    {
        return view('backend.layout.partials.notify');
    }


}
