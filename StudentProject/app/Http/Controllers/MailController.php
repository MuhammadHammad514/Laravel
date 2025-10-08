<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WecomeEmail;

class MailController extends Controller
{
    public function Sendmail(){
        $to="hammadzulfiqar555@gmail.com";
        $msg=" Hi,
        Welcome to our Student Portal! 🎉
        We are excited to have you join our learning community.";
        $subject="Welcome to Our Student Portal! 🎓 ";
         Mail::to($to)->send(new WecomeEmail($msg,$subject));
    }
   
}
