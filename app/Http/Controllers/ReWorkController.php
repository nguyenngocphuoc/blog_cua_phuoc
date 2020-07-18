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
            'image'         => 'required|image|mimes:jpg,png,jpeg'
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

        if ($request->hasFile('image')) {
            $imageName = 'reworks-'.time().uniqid().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
        }

        ReWork::create([
            'title'         => $request->title,
            'slug'          => str_slug($request->title),
            'details'       => $request->details,
            'category_id'   => $request->category_id,
            'image'         => $imageName,
            'status'        => $status,
            'featured'      => $featured,
            'video_id'      => $request->video_id,
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


    public function edit(ReWork $reworks)
    {
        $categories = Category::latest()->select('id','name')->where('status',1)->get();
        $reworks    = ReWork::findOrFail($reworks->id);

        return view('backend.reworks.edit', compact('categories','reworks'));
    }

 
    public function update(Request $request, ReWork $reworks)
    {
        $request->validate([
            'title'         => 'required|max:255',
            'details'       => 'required',
            'category_id'   => 'required',
            'image'         => 'image|mimes:jpg,png,jpeg'
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

        $reworks = ReWork::findOrFail($reworks->id);

        if ($request->hasFile('image')) {

            if(file_exists(public_path('images/') . $reworks->image)){
                unlink(public_path('images/') . $reworks->image);
            }

            $imageName = 'reworks-'.time().uniqid().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

        }else{
            $imageName = $reworks->image;
        }

        $reworks->update([
            'title'         => $request->title,
            'slug'          => str_slug($request->title),
            'details'       => $request->details,
            'category_id'   => $request->category_id,
            'image'         => $imageName,
            'status'        => $status,
            'featured'      => $featured,
            'video_id'      => $request->video_id,
            'work_address'  => $request->work_address,
            'deadline_for_sub'  => $request->deadline_for_sub,
            'salary'        => $request->salary,
            'emp_total'        => $request->emp_total
        ]);

        return redirect()->route('admin.reworks.index')->with(['message' => 'Chỉnh sửa thành công!']);
    }

 
    public function destroy(ReWork $reworks)
    {
        $reworks = ReWork::findOrFail($reworks->id);

        if(file_exists(public_path('images/') . $reworks->image)){
            unlink(public_path('images/') . $reworks->image);
        }

        $reworks->delete();

        return back()->with(['message' => 'Xóa thành công!']);
    }
}
