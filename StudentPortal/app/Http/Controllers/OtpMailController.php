<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogin;
use App\Mail\WelcomeEmail;
class OtpMailController extends Controller
{
    public function OTP_verification(Request $request){
       $user_otp=  $request->validate([
        'otp'=>'required',
       ]);
       echo '<br>';
       print_r( $user_otp);
       echo "userotp".$user_otp['otp'];
          $email = session('user_id');
      $userData=UserLogin :: where('email',$email)->first();
      
      if($userData->OTP == $user_otp['otp']){
        return view("HomePage");
      }
      else{
         return back()->with('error', 'Invalid OTP. Please try again.');
      }


    }
    public function ShowOTPform(){
        return view("OTP");
    }
    public function ResendOTP(Request $request){
         $email = session('user_id');
        $userData=UserLogin :: where('email',$email)->first();
        $userData->OTP=rand(100000,999999);
         $userData->save();
        $msg="Hi {$userData->name}
        Your verification code is  $userData->OTP . 
        Please enter this 6-digit code to complete your verification. 
        This code will expire in 5 minutes.";
        $subject='Student Portal Verification Code';
        Mail::to($userData->email)->send(new WelcomeEmail($msg,$subject));
    }

}
