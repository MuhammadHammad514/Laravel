<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\StudentExportController;
use App\Http\Controllers\MailController;
Route::get('/', function () {
    return view('Signup');
});
Route::get('/register',function(){
    return view('welcome');
});
Route::post('/register',[registerController::class,'register']);
Route::get('/register/DisplayStudents',[registerController::class,'DisplayStudents']);
Route::get('/register/delete/{id}',[registerController::class,'delete'])->name('student.delete');
Route::get('/register/edit/{id}',[registerController::class,'edit'])->name('student.edit');
Route::post('/register/update/{id}',[registerController::class,'update'])->name('student.update');
Route::get('/register/create',[registerController::class,'create'])->name('student.create');
Route::get('/register',[registerController::class,'create']);
Route::get('/signin', [loginController:: class,'signin']);
Route::post('/stdSignIn',[loginController:: class,'stdSignIn']);
Route::post('/stdLogin',[loginController:: class,'stdLogin']);
Route::get('/exportStudent',[StudentExportController:: class,'exportStudent'])->name('student.export');
Route::get('/Sendmail',[MailController::class,'Sendmail']);