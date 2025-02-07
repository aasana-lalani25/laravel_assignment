<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cardemo extends Controller
{
    public function index(){
        return view('car');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $model= $request->input('model');
         $days= $request->input('days');

         return view('carsummary',compact('name','email','model','days'));
    }
}
