<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register(Request $request){
        
        
        
        $std=$request->all();
        $request->validate([
            'F_name'=>'required',
            'L_name'=>'required',
            'femail'=>'required|email',
            'faddress'=>'required',
            'fage'=>'required|numeric|min:1|max:100',
            'fclass'=>'required']);
            
        return view('StudentData',compact('std'));
// echo "<div style='border:1px solid black; padding:10px; width:350px;'>";
//         echo"hello from registerController <br>";
//         echo"<h2>Form data are as follows:</h2>";
//         echo "<p><strong>Name: ".$request->F_name.$request->L_name."</p></strong>";
//         echo"<p><strong>Class: ". $request->fclass."</strong></p>";  
//         echo "<p><strong>Gender: ".$request->fgender."</strong></p>";
//         echo "<p><strong>Address". $request->faddress."</strong></p>";
//         echo "<p><strong>Email". $request->femail."</p></strong>";
//         echo "<p><strong>Age:". $request->fage."</p></strong>";
//         echo "</div>";
    }
}
