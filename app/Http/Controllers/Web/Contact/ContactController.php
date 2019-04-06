<?php

namespace App\Http\Controllers\Web\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Contact\ContactRequest;
use App\Mail;
use Validator;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Submit sending contact
     *
     * @return response
     */
    public function submit(Request $request) {
        // $validator=$request->validate([
        //      'name' => 'required',
        //      'email' => 'required|email',
        //      'details' => 'required|min:6',
        //     // 'captcha' => 'required|captcha',
        //      'userAnswer' => 'required',
        //  ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'details' => 'required|min:6',
            // 'captcha' => 'required|captcha',
            'userAnswer' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect::back()->with(['contact_errors' => $validator->errors()->all()]);
        }

        $num1 = $request->num1;
        $num2 = $request->num2;
        $o = $request->operand;
        $userAnswer = $request->userAnswer;
        switch ($o) {
            case 0:
                $actual = $num1 + $num2;
                break; // 0 = Addition
            case 1:
                $actual = $num1 - $num2;
                break; // 1 = Subtraction
            case 2:
                $actual = $num1 * $num2;
                break; // 2 = Multiplication
        }
        if ($userAnswer != $actual) {
            $request->session()->flash('contact_captcha', "Your answer is incorrect");
            return redirect::back()->withInput();
        }

        Mail::create($request->only(['name', 'email', 'details']))->save();

        return redirect:: back()->with(['contact_success' => 'Your Message Was Sent Successfully']);
    }
    // public function refreshCaptcha()
    // {
    //     return response()->json(['captcha'=> captcha_img()]);
    // }
}
