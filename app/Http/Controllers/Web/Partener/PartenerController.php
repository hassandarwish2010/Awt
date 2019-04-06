<?php

namespace App\Http\Controllers\Web\Partener;

use App\Agent;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartenerController extends Controller
{
    /**
     * Show contact page
     *
     * @return response
     */

    public function index() {
        $setting = Setting::first();
        $parteners=Agent::orderBy('id','desc')->get();
        foreach ($parteners as $partener){
            $partener->image=asset('public/uploads/thumbs/'.$partener->image);
        }
        return view('web.parteners.index',compact('setting','parteners'));
    }

}
