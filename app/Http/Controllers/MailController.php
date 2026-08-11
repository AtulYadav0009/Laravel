<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use  App\Mail\WelcomeEmail;
use App\Models\Device;
use Illuminate\Support\Facades\Blade;

class MailController extends Controller
{
    function sendmail()
    {
        // return "Mail Send";

        $to = "atul.yadav1.0009@gmail.com";
        $msg = "Dummy Mail BY AD";
        $subject = "Code Step by step";

        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
    }
    function formmail(Request $req)
    {
        // return "Mail Send";

        $to = $req->to;
        $msg = $req->subject;
        $subject = $req->message;

        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        return "Mail Send";
    }

    function routemodelbinding(Device $key){
    // return Device::all();
    return $key;
    }

    function inlineblade(){
        $user=40;
        return Blade::render('<h1>Hello {{$user}} users</h1> <br>
        <a href="https://google.com" target="_blank">Google</a>',['user'=>$user]);
    }
}
