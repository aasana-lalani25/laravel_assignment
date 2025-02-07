<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class traveldemo extends Controller
{
    public function index(){
        return view('travel');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $destination= $request->input('destination');
         $date= $request->input('date');

         return view('travelsummary',compact('name','email','destination','date'));
    }
}
