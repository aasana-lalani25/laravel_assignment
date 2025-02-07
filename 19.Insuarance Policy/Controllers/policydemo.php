<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class policydemo extends Controller
{
    public function index(){
        return view('policy');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $type= $request->input('type');
         $amount= $request->input('amount');

         return view('policysummary',compact('name','email','type','amount'));
    }
}
