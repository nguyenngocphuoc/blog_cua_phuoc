<?php

namespace App\Http\Controllers;

use App\News;
use App\ReWork;
use App\GroupCategory;
use App\Category;
use App\Advertisement;
use App\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $newestlist = News::latest()->whereHas('category')->where('status',1)->take(10)->get();
        $topnewslist   = News::where('status',1)->orderBy("view_count")->take(10)->get();
        $reworks   = ReWork::latest()->where('status',1)->take(10)->get();
        $reworks2 = ReWork::latest()->where('status',1)->take(10)->get();
        
        $max = 5;
        if(ReWork::count() < $max) $max = ReWork::count();
        if(News::count() < $max) $max = News::count();
        $reworkRad = ReWork::all()->random($max);
        $newsRad = News::all()->random($max);
        return view('view.index',compact(
                'topnewslist',
                'newestlist',
                'reworks',
                'reworks2',
                'reworkRad',
                'newsRad'
            )
        );
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
        $newssessionkey = 'news-'.$newssingle->id;
        if(!session()->has($newssessionkey)){
            $newssingle->increment('view_count');
            session()->put($newssessionkey,1);
        }
        return view('view.singlepost',compact('newssingle'));
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

        $newssearch = News::with('category')->where('title','like','%'.$search.'%')->whereHas('category')->where('status',1)->get();

        return view('frontend.pages.search',compact('newssearch'));
    }

    public function pageArchive()
    {
        $newsarchives = Category::with('newslist')->whereHas('newslist')->get();

        return view('view.archive',compact('newsarchives'));
    }

    public function pageArchiveCategory($slug)
    {
        $category = Category::latest()->where('slug', $slug)->first();
        $listRework = ReWork::latest()->where('category_id', $category->id)->paginate(5);
        return view('view.archive_category',compact('category', 'listRework'));
    }

    public function pageArchiveCategoryGroup($slug)
    {
        $groupCategory = GroupCategory::latest()->where('slug', $slug)->first();
        $listCategory = Category::latest()->where('group_categories_id', $groupCategory->id)->paginate(5);
        $arr = [];
        foreach ($listCategory as $key => $value) {
            $obj = [];
            $listRework = ReWork::latest()->where('category_id', $value->id)->get();
            $obj["list"] = $listRework;
            $obj["categoryInfo"] = $value;
            array_push($arr,$obj);
        }

        return view('view.archive_category_group',compact('listCategory', 'arr', 'groupCategory'));
    }

    public function getPageAbout()
    {
        $setting = Setting::latest()->first();

        return view('view.about', compact('setting'));
    }

}
