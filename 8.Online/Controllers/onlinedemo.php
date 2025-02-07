<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class onlinedemo extends Controller
{
    public function index(){
        return view('online');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $course= $request->input('course');
         $duration= $request->input('duration');

         return view('onlinesummary',compact('name','email','course','duration'));
    }
}
