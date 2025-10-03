<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class registerController extends Controller
{
    public function register(Request $request){
        //$std=$request->all();
        $request->validate([
            'F_name'=>'required',
            'L_name'=>'required',
            'femail'=>'required|email',
            'faddress'=>'required',
            'fage'=>'required|numeric|min:1|max:100',
            'fclass'=>'required']);
            echo"prev";
            print_r($request->all());
    }
}

