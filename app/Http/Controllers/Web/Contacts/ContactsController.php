<?php

namespace App\Http\Controllers\Web\Contacts;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    /**
     * Show contact page
     *
     * @return response
     */

        public function index() {
            $setting = Setting::first();
            return view('web.contacts.index',compact('setting'));
        }

}
