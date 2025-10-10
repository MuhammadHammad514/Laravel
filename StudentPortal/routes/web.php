<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidUser;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtpMailController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,'login']);
Route::post('/createAccount',[LoginController::class ,'createAccount']);
Route::get('/Home',[LoginController::class,'Home'])->middleware(ValidUser::class);
Route::post('/UserLogin',[LoginController::class,'UserLogin']);
Route::get('/Logout',[LoginController::class, 'Logout']);
Route::get('/ShowOTPform', [OtpMailController::class, 'ShowOTPform'])->name('otp.ShowOTPform');
Route::post('/OTP_verification', [OtpMailController::class, 'OTP_verification'])->name('otp.verification'); 
Route::post('/ResendOTP', [OtpMailController::class, 'ResendOTP'])->name('otp.ResendOTP'); 