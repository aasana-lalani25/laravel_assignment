<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tabeldemo extends Controller
{
    public function index(){
        return view('restaurent');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $guest= $request->input('guest');
         $date= $request->input('date');

         return view('tablesummary',compact('name','email','guest','date'));
    }
}
