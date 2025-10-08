<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Jobs\EmailSendJob;
use App\Jobs\registerStudentJob;
class registerController extends Controller
{
    public function create(){
        $url= url('/register');
        $title="Create Student";
        $data=compact('url' ,'title');
        return view('welcome')->with($data);
    }
    public function register(Request $request){
        $request->validate([
            'F_name'=>'required',
            'L_name'=>'required',
            'femail'=>'required|email',
            'faddress'=>'required',
            'fage'=>'required',
            'fgender'=>'required',
            'fclass'=>'required'
        ]);
        $student=new Students;
        $student->First_Name=$request['F_name'];
        $student->Last_Name=$request['L_name'];
        $student->Email=$request['femail'];
        $student->Address=$request['faddress'];
        $student->Age=$request['fage'];
        $student->Gender=$request['fgender']; 
        $student->Class=$request['fclass'];
        $student->save();
        EmailSendJob::dispatch($student);
        return view("HomePage");
          
    }

    public function DisplayStudents(){
        $students=Students::all();
        $data=compact('students');
        return view("StudentData")->with($data);
    }
    public function delete($id){
        $delete_std=Students::find($id);
        if(!is_null($delete_std)){
            $delete_std->delete();
        }
          return redirect('/register/DisplayStudents');
    }
    public function edit($id){
        $std=Students::find($id);
        if(is_null($std)){
            return redirect('/register/DisplayStudents');
        }else{
            $url=url('/register/update')."/".$id;
            $title="Edit Student";
            $data=compact('std','url','title');
            return view('welcome')->with($data);
        }

    }
    public function update($id,Request $request){
        $student=Students::find($id);
         $student->First_Name=$request['F_name'];
        $student->Last_Name=$request['L_name'];
        $student->Email=$request['femail'];
        $student->Address=$request['faddress'];
        $student->Age=$request['fage'];
        $student->Gender=$request['fgender']; 
        $student->Class=$request['fclass'];
        $student->save();
        return redirect('/register/DisplayStudents');
    } 

}
