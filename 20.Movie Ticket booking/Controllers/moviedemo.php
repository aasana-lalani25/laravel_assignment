<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moviedemo extends Controller
{
   public function index(){
    return view('movie');
   }

   public function submitform(Request $request){

    $name=$request->input('name');
    $email=$request->input('email');
    $mname=$request->input('mname');
    $ticket=$request->input('ticket');

    return view('moviesummary',compact('name','email','mname','ticket'));
   }
}
