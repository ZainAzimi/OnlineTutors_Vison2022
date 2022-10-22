<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TutorModel;
use App\Models\Profile;



class TutorController extends Controller
{

    public function index(Request $request){

      
        
        if(Session('sid')==null){
            return redirect('/studentlogin');

            
        }
        else{
             $search=$request['search']?? "";
             if($search !=""){
                 $profiles=Profile::where('subject','Like',"%$search%")->get();
    
             }
             else {
                $profiles = Profile::all();      
            }
    
            
            return view('tutor.profile',compact('profiles','search'));
        }

      
        
        // dd($profiles);


        // return view('tutor.profile',compact('profiles','search'));

    }

    public function selectlogin(){

        return view('tutor.selectlogin');

    }
    
    public function selectregister(){
        
        return view('tutor.selectregister');

    }

    public function tutorregister(){

        return view('tutor.tutorregister');
        
    }

    public function tutorcreate(Request $req){


        $tutor =new TutorModel;
        $tutor->firstname=$req->input('firstname');
        $tutor->lastname=$req->input('lastname');
        $tutor->email=$req->input('email');
        $tutor->phoneno=$req->input('phoneno');
        $tutor->password=$req->input('password');
        $tutor->repeat_password=$req->input('repeat_password');

      
        $tutor->save();
        Session(['tid'=>$tutor->id]);
        Session(['tname'=>$tutor->firstname]);
        Session(['temail'=>$tutor->email]);
        // dd(Session('tid'));
        return redirect('/profilecreate');    

    }
    public function profilecreate(){

        Session('tid');
        return view('tutor.profiecreate');
    }
    public function saveprofile(Request $request){

        
       // dd($request);
        // $request->validate([
        //     'image'=>'required|mimes:png,jpg,jpeg',
        //     'subject'=>'required',
        //     'experience'=>'required',
        //     'shortintro'=>'required',
        //     'detailintro'=>'required',
        //     'basicplantime'=>'required',
        //     'basicplanprice'=>'required',
        //     'standardplantime'=>'required',
        //     'standardplanprice'=>'required',
        //     'premiumplantime'=>'required',
        //     'premiumplantime'=>'required',
 
        // ]);
          
      
       
        //  dd($request);
       
    
        $newimagename = time() . '-'.$request->subject . '.'.$request->image->extension();
        $request->image->move(public_path('storage/uploads'),$newimagename);

        

        $profile=Profile::create([
           

            'image'=>$newimagename,
            'user_id'=>$request->input('id'),
            'subject'=>$request->input('subject'),
            'experience'=>$request->input('experience'),
            'shortintro'=>$request->input('shortintro'),
            'detailintro'=>$request->input('detailintro'),
            'basicplantime'=>$request->input('basicplanhours'),
            'basicplanprice'=>$request->input('basicplanprice'),
            'standardplantime'=>$request->input('standardplanhours'),
            'standardplanprice'=>$request->input('standardplanprice'),
            'premiumplantime'=>$request->input('premiumplanhours'),
            'premiumplanprice'=>$request->input('premiumplanprice'),
            'user_name'=>$request->input('name'),
            'user_email'=>$request->input('email'),
           // dd($request)   
         
        ]);
        // dd($profile);

        return redirect('/teacherdashboard');


    }
    public function ProfileDetail($id){

        $profiles= Profile::find($id);
         $profiles->update();
        return view('tutor.ProfilePage',['Profiles'=>$profiles]);

    }

    public function tutorlogin(){

        if(Session('tid')==null){

        return view('tutor.tutorlogin');
        }
        else{
            return redirect('/teacherdashboard');
        }

    }

    public function tutorpostlogin(Request $request){

    //    dd($request->email);
        $profile=TutorModel::where('email','=',$request->email)->first();
        if($profile){
            if(TutorModel::where($request->password, $profile->Password)){
                Session(['tid'=>$profile->id]);
                Session(['tname'=>$profile->firstname]);
                Session(['temail'=>$profile->Email]);
                $request->session()->put('Id',$profile);
                return redirect('/teacherdashboard');
            }
        }
        else {
            return back()->with('fail','this email is not recognized');
        }
    }
    public function Logout(Request $request){

        $request->session()->forget('tid');       
        $request->session()->forget('tname');
        return redirect('/');
        
    }
}
