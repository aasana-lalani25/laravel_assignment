<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class billdemo extends Controller
{
    public function index(){
        return view('bill');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $billno= $request->input('billno');
         $amount= $request->input('amount');

         return view('billsummary',compact('name','email','billno','amount'));
    }
}
