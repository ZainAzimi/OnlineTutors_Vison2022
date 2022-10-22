<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function studentregister(){

        return view('student.studentregister');
    }


    public function studentlogin(){

        return view('student.studentlogin');
    }

    public function registerpost(Request $req){

        $student =new Student;
        $student->firstname=$req->input('firstname');
        $student->lastname=$req->input('lastname');
        $student->email=$req->input('email');
        $student->phoneno=$req->input('phoneno');
        $student->password=$req->input('password');
        $student->repeat_password=$req->input('repeat_password');

        $student->save();
        Session(['sid'=>$student->id]);
        Session(['sname'=>$student->firstname]);
        Session(['semail'=>$student->email]);
        // dd(Session('sid'));
        return redirect('/');    

    }
    public function studentloginpost(Request $request){

        $student=Student::where('email','=',$request->email)->first();
        if($student){
            if(Student::where($request->password, $student->Password)){
                Session(['sid'=>$student->id]);
                Session(['sname'=>$student->firstname]);
                Session(['semail'=>$student->email]);
                $request->session()->put('Id',$student);
                return redirect('/');
            }
        }
        else {
            return back()->with('fail','this email is not recognized');
        }
    }
    public function Logout(Request $request){

        $request->session()->forget('sid');       
        $request->session()->forget('sname');
        $request->session()->forget('semail');
        return redirect('/');
        
    }
}
