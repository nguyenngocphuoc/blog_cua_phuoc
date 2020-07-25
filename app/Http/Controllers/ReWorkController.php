<?php

namespace App\Http\Controllers;

use App\ReWork;
use App\Category;
use Illuminate\Http\Request;

class ReWorkController extends Controller
{

    public function index()
    {
        $listReWorks = ReWork::with('category')->latest()->get();

        return view('backend.reworks.index', compact('listReWorks'));
    }


    public function create()
    {
        $categories = Category::latest()->select('id','name')->where('status',1)->get();

        return view('backend.reworks.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|unique:reworks|max:255',
            'details'       => 'required',
            'category_id'   => 'required',
            'image'         => 'required|is_img',
            'work_address'  => 'required',
            'deadline_for_sub'  => 'required',
            'salary'  => 'required',
            'emp_total'  => 'required'
        ]);

        if (strlen($request->image) > 0) {

            $image_array_1 = explode(";", $request->image);

            $image_array_2 = explode(",", $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $imageName = 'news-'. time().uniqid(). '.png';

            file_put_contents(public_path('images/').$imageName, $data);
        }

        ReWork::create([
            'title'         => $request->title,
            'slug'          => str_slug($request->title),
            'details'       => $request->details,
            'category_id'   => $request->category_id,
            'status'        => 1,
            'image'         => $imageName,
            'work_address'  => $request->work_address,
            'deadline_for_sub'  => $request->deadline_for_sub,
            'salary'        => $request->salary,
            'emp_total'        => $request->emp_total
        ]);

        return redirect()->route('admin.reworks.index')->with(['message' => 'Tạo thành công!']);
    }


    public function show(ReWork $reworks)
    {
        //
    }


    public function edit($id)
    {
        $categories = Category::latest()->select('id','name')->get();
        // $reworks    = ReWork::findOrFail($reworks->id);
        $reworks    = ReWork::where("id",$id)->first();
        return view('backend.reworks.edit', compact('categories','reworks'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required|max:255',
            'details'       => 'required',
            'category_id'   => 'required',
            'image'         => 'is_img',
            'work_address'  => 'required',
            'deadline_for_sub'  => 'required',
            'salary'  => 'required',
            'emp_total'  => 'required',
        ]);

        if(isset($request->status)){
            $status = true;
        }else{
            $status = false;
        }

        if(isset($request->featured)){
            $featured = true;
        }else{
            $featured = false;
        }
        $reworks = ReWork::findOrFail($id);

        if (strlen($request->image) > 0) {

            $image_array_1 = explode(";", $request->image);

            $image_array_2 = explode(",", $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $imageName = $reworks->image;

            file_put_contents(public_path('images/').$imageName, $data);
        }else{
            $imageName = $reworks->image;
        }

        $reworks->update([
            'title'         => $request->title,
            'slug'          => str_slug($request->title),
            'details'       => $request->details,
            'category_id'   => $request->category_id,
            'status'        => 1,
            'image'         => $imageName,
            'work_address'  => $request->work_address,
            'deadline_for_sub'  => $request->deadline_for_sub,
            'salary'        => $request->salary,
            'emp_total'        => $request->emp_total
        ]);

        return redirect()->route('admin.reworks.index')->with(['message' => 'Chỉnh sửa thành công!']);
    }


    public function destroy($id)
    {
        $reworks = ReWork::findOrFail($id);

        if(file_exists(public_path('images/') . $reworks->image)){
            unlink(public_path('images/') . $reworks->image);
        }
        $reworks->delete();
        return back()->with(['message' => 'Xóa thành công!']);
    }

    public function postSearch(Request $request)
    {
        $reworks = ReWork::select('*')->where('title', 'like', '%' .$request->resultSearch. '%')
                ->orWhere('slug', 'like', '%'.$request->resultSearch.'%')
                ->orWhere('details', 'like', '%'.$request->resultSearch.'%')->paginate(5);
        return view('view.archive', compact('reworks'));
    }
}
