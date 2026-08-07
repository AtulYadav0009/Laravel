<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use  App\Mail\WelcomeEmail;

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
}
