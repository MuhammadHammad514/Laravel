<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicContoller;
use App\Http\Controllers\registerController;


Route::get('/{name?}', function ($name=null) {
    $data=compact('name');
    return view('welcome')->with($data);
});
Route::post('/register',[registerController::class,'register']);


