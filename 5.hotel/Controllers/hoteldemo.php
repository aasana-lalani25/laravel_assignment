<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hoteldemo extends Controller
{
    public function index(){
        return view("hotel");
    }

    public function submitform(Request $request){

        $name=$request->input('name');
        $email=$request->input('email');
        $cdate=$request->input('cdate');
        $idate=$request->input('idate');

        return view('hotelsummary',compact('name','email','cdate','idate'));
    }
}
