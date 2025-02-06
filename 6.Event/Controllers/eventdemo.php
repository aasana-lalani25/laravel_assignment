<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventdemo extends Controller
{
    public function index(){
        return view('event');
    }

    public function submitform(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $type = $request->input('type');
        $attendent = $request->input('attendent');

        return view('eventsummary',compact('name','email','type','attendent'));

        }
}
