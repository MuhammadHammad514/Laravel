<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentLogin;
use App\Http\Requests\LoginRequest;
class loginController extends Controller
{
       public function signin(){
        return view("SignIn");  }

//     public function stdLogin(Request $request)
// {
//      $request->validate([
//         'femail' => 'required|email',
//         'password' => 'required|min8',]);
//     $data = $request->all();
//     $std = StudentLogin::where('Email', $request->email)->first();
  
//     echo "<br> std info from db:<br>";

//     if ($std) {
//         echo $std->Email; 
//           if($std->Password==$request->password){
//             return view("HomePage");
//            }
//             else {
//                 return view("SignIn");
//     }
    
//         } 

//     else {
//         echo "No student found with this email in database!";
//     }
// }

public function stdLogin(Request $request)
{
    $data = $request->all();
    $std = StudentLogin::where('Email', $request->email)->first();
    if ($std) {
        
         if ($std->Password == $request->password) {
            return view("HomePage");
        } 
        else {
           
                return redirect()->back()->with('error', 'Invalid password!');
        }
    
    } else {
            return redirect()->back()->with('error', 'No student found with this email!');
        
    }
}

     public function stdSignIn(LoginRequest $request){
    

        $std_log= new StudentLogin;
        $std_log->Email=$request['email'];
        $std_log->Password=$request['password'];
        $std_log->save();
         return view("HomePage");
       }

       

}
