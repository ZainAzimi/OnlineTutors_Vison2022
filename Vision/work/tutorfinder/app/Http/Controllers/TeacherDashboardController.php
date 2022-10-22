<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SetProfile;
use App\Models\Profile;

class TeacherDashboardController extends Controller
{
    public function teacherdashboard(){
      if(Session('tid')!=null){
        return view('dashboard.teacherdashboard');
      }
      else{
        return redirect('/tutorlogin');
      }
  }

  public function mystudents(){

    $id = session()->get('tid');

    //dd($id);

    $mystudents=SetProfile::where('tutor_id','=',$id)->get();

   // dd($myteachers);



    return view('dashboard.mystudent',compact('mystudents'));


  }
  public function myprofile(){

    $id=session()->get('tid');

    $myprofile=Profile::where('user_id','=',$id)->get();

    //dd($myprofile);


    return view('dashboard.myprofile',compact('myprofile'));


  }
}
