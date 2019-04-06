<?php

namespace App\Http\Controllers\Web\Landing;

use App\Agent;
use App\Category;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\About;
use App\Product;
use App\News;

class HomeController extends Controller
{
    public function landing(Request $request){

        $setting = Setting::first();
        $banners=Banner::all();
         $why=About::where('id',2)->first();
        $welcome=About::where('id',1)->first();
        // dd($why);
        $productsranges=Product::orderBy('id','desc')->paginate(3);

        $news=News::orderBy('id','desc')->get();
        $parteners=Agent::orderBy('id','desc')->limit('6')->get();
        //dd($news);
        //dd($projects[1]);
//        $cats=Category::orderBy('id','desc')->paginate(4);
//        foreach ($cats as $cat){
//            $cat->full_image=asset('public/uploads/'.$cat->image);
//            $cat->image=asset('public/uploads/thumbs/'.$cat->image);
//
//        }
//        $photos=ImageGallery::all();
//        //dd($cats);
//        foreach ($photos as $ph){
//            $ph->main_image=asset('public/uploads/thumbs/'.$ph->main_image);
//            $ph->afterimage=asset('public/uploads/thumbs/'.$ph->afterimage);
//        }
        foreach ($banners as $banner){
            $banner->image=asset('public/uploads/'.$banner->image);
        }
//        foreach ($news as $n){
//            $new->image=asset('public/uploads/thumbs/'.$n->image);
//
//        }
        foreach ($parteners as $partener){
            $partener->image=asset('public/uploads/thumbs/'.$partener->image);
        }
        return view('web.landing.index',compact('banners','setting',
            'productsranges','news','cats','parteners','welcome','why'));
    }
}
