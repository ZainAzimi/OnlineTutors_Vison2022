<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SetProfile;


class StudentDashboardController extends Controller
{
    public function studentdashboard(){

      if(Session('sid')==null){
        return redirect('/studentlogin');

        

      }
      else{
        return view('dashboard.studentdashboard');
  }
}

  public function myteachers(){


    $id = session()->get('sid');

    //dd($id);

    $myteachers=SetProfile::where('user_id','=',$id)->get();
   

   // dd($myteachers);



    return view('dashboard.myteachers',compact('myteachers'));
  }
}
