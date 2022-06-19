<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function contact_Us(Request $request){
        $valid = Validator::make($request->all(),[
            'name'        =>'required',
            'subject'     =>'required',
            'message'     =>'required',
            'email'       =>'required'
        ]);

        $name       = $request->input('name');
        $email      = $request->input('email');
        $subject    = $request->input('subject');
        $message    = $request->input('message');

        $contact_us = ContactUs::create([
           'name'    => $name,
           'subject' => $subject,
           'message' => $message,
           'email'   => $email
        ]);

        // $data = array();
        // $data['name']              = $name;
        // $data['email']             = $email;
        // $data['area']              = "Contact Us";
        // $data['subject']           = $subject;
        // $data['message']           = $message;

        // Mail::to( '2016kamera@gmail.com' )->send( new ContactUsEmail($data));

        return back()->with('success', 'Success! An email has been successfully sent.');
    }
}
