<?php

namespace App\Http\Controllers;

use App\News;
use App\ReWork;
use App\GroupCategory;
use App\Category;
use App\Advertisement;
use App\Setting;
use Illuminate\Http\Request;
use App\HeroImages;
use App\Comment;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    public function index()
    {
        $newslist = News::latest()->with('category')->whereHas('category')->where('status',1)->take(10)->get();
        return view('view.index',compact(
                'newslist'
            )
        );
    }

    public function loadMore($page)
    {
        $newslist = News::latest()->with('category')->whereHas('category')->where('status', 1)->skip($page * 10)->take(10);
        if($newslist->exists()){
            $newslist = $newslist->get();
            $html = view('view.postitem',compact('newslist'))->render();
            return $html;
        }
        return abort(404);
    }

    public function pageCategory($slug)
    {
        $category           = Category::where('slug',$slug)->first();
        $featurednewslist   = $category->newslist()->where('status',1)->where('featured',1)->take(5)->get();
        $newscategorylist   = $category->newslist()->where('status',1)->where('featured',0)->get();
        $advertisements     = Advertisement::where('type','category')->where('slug',$slug)->first();

        return view('frontend.pages.category',compact('category','featurednewslist','newscategorylist','advertisements'));
    }


    public function pageNews($slug)
    {

        $newssingle = News::with('category')->where('slug',$slug)->first();
        $comments = Comment::latest()->where('newsId',$newssingle->id)->get();
        $newssessionkey = 'news-'.$newssingle->id;
        if(!session()->has($newssessionkey)){
            $newssingle->increment('view_count');
            session()->put($newssessionkey,1);
        }
        return view('view.singlepost',compact('newssingle','comments'));
    }

    public function pageReworks($slug)
    {
        $newssingle = ReWork::with('category')->where('slug',$slug)->first();

        $newssessionkey = 'Reworks-'.$newssingle->id;
        if(!session()->has($newssessionkey)){
            $newssingle->increment('view_count');
            session()->put($newssessionkey,1);
        }
        return view('view.singlepostrework',compact('newssingle'));
    }

    public function pageSearch()
    {
        $search = request()->input('search');

        $newssearch = News::with('category')->where('status',1)->where('title','like','%'.$search.'%')->whereHas('category')->where('status',1)->get();

        return view('frontend.pages.search',compact('newssearch'));
    }

    public function pageArchive(Request $request)
    {
        $newslist = [];
        
        $newslist = News::select('*')->with('category')->where('title', 'like', '%' .$request->search. '%')
            ->orWhere('slug', 'like', '%'.$request->search.'%')
            ->orWhere('tags', 'like', '%'.$request->search.'%')
            ->orderBy('created_at','desc')
            ->paginate(5);
        $tags = explode("#",$request->search);
        if(count($tags) > 1) {
            $tags = array_slice($tags,1);
            foreach ($tags as $value) {
                $newslist = DB::table("news")->select('*')
                    ->Where('tags', 'like', '%'.$value.'%')
                    ->orderBy('created_at','desc')
                    ->paginate(5); 
            }
        }
        if(substr( $request->search , 0, 5 ) === "time:" ) {
            $search = explode("/",substr( $request->search , 5 ));
            if(count($search) > 1){
                $month = $search[0];
                $year  = $search[1];
                $newslist = News::select('*')
                    ->whereRaw(DB::raw('MONTH(created_at) = ' . $month . ' AND ' . 'YEAR(created_at) = ' . $year))
                    ->orderBy('created_at','desc')
                    ->paginate(5);
            }

        }
        return view('view.archive', compact('newslist'));
    }

    public function pageArchiveCategory($slug)
    {
        $category = Category::latest()->where('slug', $slug)->first();
        $newslist = News::latest()->with('category')->where('category_id', $category->id)->paginate(5);
        return view('view.archive_category',compact('category', 'newslist'));
    }

    public function pageArchiveCategoryGroup($slug)
    {
        $groupCategory = GroupCategory::latest()->where('slug', $slug)->first();
        $listCategory = Category::latest()->where('group_categories_id', $groupCategory->id)->paginate(5);
        $arr = [];
        foreach ($listCategory as $key => $value) {
            $obj = [];
            $listRework = ReWork::latest()->with('category')->where('category_id', $value->id)->get();
            $obj["list"] = $listRework;
            $obj["categoryInfo"] = $value;
            array_push($arr,$obj);
        }

        return view('view.archive_category_group',compact('listCategory', 'arr', 'groupCategory'));
    }

    public function getPageAbout()
    {
        $about_us = "";
        if(Setting::latest()->where('id',1)->exists())
            $about_us = Setting::latest()->where('id',1)->first()->about_us;
        return view('view.about', compact('about_us'));
    }

}
