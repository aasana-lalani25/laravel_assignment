<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collegedemo extends Controller
{
    public function index(){
        return view('college');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $course= $request->input('course');
         $quali= $request->input('quali');

         return view('collegesummary',compact('name','email','course','quali'));
    }
}
