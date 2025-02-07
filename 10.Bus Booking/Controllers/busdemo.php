<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class busdemo extends Controller
{
    public function index(){
        return view('bus');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $destination= $request->input('destination');
         $date= $request->input('date');

         return view('bussummary',compact('name','email','destination','date'));
    }
}
