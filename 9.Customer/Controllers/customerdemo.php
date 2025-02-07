<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerdemo extends Controller
{
    public function index(){
        return view('customer');
    }

    public function submitform(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $rating=$request->input('rating');
        $comment=$request->input('comment');

        return view('customersummary',compact('name','email','rating','comment'));
    }
}
