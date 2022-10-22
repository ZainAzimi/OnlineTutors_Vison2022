<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutus(){
        
        return view('pages.aboutus');
    }
    public function contactus(){
        
        return view('pages.contactus');
    }
}
