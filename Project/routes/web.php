<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicContoller;
use App\Http\Controllers\registerController;
use App\Models\Students;
Route::get('/StudentData', function () {
    $students=Students::all();
    echo $students[1]->Email;
    });
Route::get('/{name?}', function ($name=null) {
    $data=compact('name');
    return view('welcome')->with($data);
});
Route::post('/register',[registerController::class,'register']);
Route::get('/register/StudentData',[registerController::class,'StudentData']);


