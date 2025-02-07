<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gymdemo extends Controller
{
    public function index(){
        return view('gym');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $membership= $request->input('membership');
         $days= $request->input('days');

         return view('gymsummary',compact('name','email','membership','days'));
    }
}
