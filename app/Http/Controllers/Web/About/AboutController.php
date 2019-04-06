<?php

namespace App\Http\Controllers\Web\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{
  /**
   * Show about page
   *
   * @return response
   */
  public function index( $permalink) {
    $about = About::where('permalink', $permalink)->first();
      if ($about) {
          $about->full_image = asset('public/uploads/' . $about->image);
          $about->image = asset('public/uploads/thumbs/' . $about->image);

      }

    return $about ? view('web.about.index', compact('about')) : view('web.errors.notfound');
  }
}
