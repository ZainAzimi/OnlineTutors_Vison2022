<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SetProfile;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function create(Request $request){
        //dd($request);

        $setprofile =new SetProfile;
        $setprofile->user_id=$request->input('user_id');
        $setprofile->user_name=$request->input('user_name');
        $setprofile->user_email=$request->input('user_email');
        $setprofile->tutor_id=$request->input('tutor_id');
        $setprofile->tutor_pic_path=$request->input('tutor_pic_path');
        $setprofile->tutor_name=$request->input('tutor_name');
        $setprofile->tutor_email=$request->input('tutor_email');
        $setprofile->plan=$request->input('plan');

        //dd($setprofile);

       
        $setprofile->save();

        $value= Session(['setprofileid'=>$setprofile->id]);
       // dd(Session('setprofileid'));
        return redirect('/payment');

    }

    public function payment(){
        return view('payment.index');
    }
    public function store(Request $req){

        $id = session()->get('setprofileid');

        //dd($id);
        //dd($request);
        $payment =new Payment;
        $payment->FirstName=$req->input('FirstName');
        $payment->CardNumber=$req->input('CardNumber');
        $payment->ExpirationDate=$req->input('ExpirationDate');
        $payment->SecurityCode=$req->input('SecurityCode');
        $payment->PricePlan=$req->input('priceplan');

        //dd($payment);
        $payment->save();

        
        // $data=SetProfile::find($id);
        // $data->plan=$payment->priceplan;
        // $data->save();

        $data=SetProfile::find($id);
        $data->plan=$req->priceplan;
        $data->update();

        //dd('Great');

        return redirect('/studentdashboard');

    }
}
