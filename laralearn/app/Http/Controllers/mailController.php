<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;
class mailController extends Controller
{
    function sendMail(){
        $to = "parasprajapat8th@gmail.com";
        $msg = "fake mail";
        $subject = "Testing mail";
        Mail::to($to)->send(new welcomeMail($msg,$subject));
    }
}
