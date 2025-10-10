<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\UserLogin;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\OtpMailController;
class LoginController extends Controller
{
    public function Login(){
        return view("login");
    }

    public function createAccount(LoginRequest $request){
        $user= new UserLogin;
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->name=$request['name'];
        $user->OTP=rand(100000,999999);
        $user->save();

        $msg="Hi $user->name
        Your verification code is <strong> $user->OTP </strong>. 
        Please enter this 6-digit code to complete your verification. 
        This code will expire in 5 minutes.";
        $subject='Student Portal Verification Code';
        Mail::to($user->email)->send(new WelcomeEmail($msg,$subject));
       session()->put('user_id', $user->email);
        return redirect()->route('otp.ShowOTPform');
    }
    
    public function UserLogin(Request $request){
     $credentioanl =   $request->validate([
        'email' => 'required',
        'password' => 'required',]);
         if(Auth::attempt($credentioanl)){
                return view('HomePage');
             }
             else{
                return back()->with('error','Invalid email or password!');
             }

        }
        public function Home(){
            return   view('HomePage');
        }

        public function Logout(){
            Auth::Logout();
            return view("login");
        }
    
    }

