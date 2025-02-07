<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Meedicaldemo extends Controller
{
    public function index(){
        return view('medical');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $dname= $request->input('dname');
         $date= $request->input('date');

         return view('medicalsummary',compact('name','email','dname','date'));
    }
}
