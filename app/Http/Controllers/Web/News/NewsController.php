<?php

namespace App\Http\Controllers\Web\News;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Carbon\Carbon;

class NewsController extends Controller
{
  /**
   * Show Newspage
   *
   * @return response
   */
    public function index() {
        $news = News::orderBy('id','desc')->paginate(5);
        $resentNews = News::orderBy('id','desc')->paginate(5);
//      $a=$news->created_at->format('d');/
        $setting = Setting::first();
        foreach ($news as $new) {
            $new->full_image = asset('public/uploads/' . $new->image);
            $new->image = asset('public/uploads/thumbs2/' . $new->image);
            $new->en_title = clean_limit($new->en_title, 30);
            $new->month = Carbon::parse($new->created_at)->format('M');
            $new->en_details = clean_limit($new->en_details, 100);

        }

        return view('web.news.news', compact('news','resentNews','setting'));
    }

    /**
     * Show news page by the given permalink
     *
     * @return response
     */
    public function new($permalink) {
        $news = News::where('permalink', $permalink)->first();

        if ($news) {
            $news->full_image = asset('public/uploads/' . $news->image);
            $news->image = asset('public/uploads/thumbs2/' . $news->image);
            $news->month = Carbon::parse($news->created_at)->format('M');
            $news->day = Carbon::parse($news->created_at)->day;

            $resentNews = News::where('id', '!=', $news->id)->inRandomOrder()->limit(10)->get();
            foreach ($resentNews as $resent) {

                $resent->en_title = clean_limit($resent->en_title, 25);


            }
        }

        return $news ? view('web.news.new', compact('news', 'resentNews')) : view('web.errors.notfound');
    }
}
