<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class waterdemo extends Controller
{
    public function index(){
        return view('water');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $address= $request->input('address');
         $type= $request->input('type');

         return view('watersummary',compact('name','email','address','type'));
    }
}
