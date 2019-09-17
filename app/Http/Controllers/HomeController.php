<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Request;
use App\User;
use App\Mail\SendMail;
use App\Mail\WarningMail;
//use App\Mail\Asign;
use Auth;
use Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();
        return view('user.home');
    }

    public function mymail()
    {
        $user = Auth::user()->email;
        $email = 'sagnik@unifiedinfotech.net';
        Mail::to($email)->send(new SendMail());
       // $message = 'Send Successfully';
        //return $user;
       // return ("Successfully Send");
        return redirect('/home');
    }

    public function manual()
    {
        return view('user.manual');
    }

}
