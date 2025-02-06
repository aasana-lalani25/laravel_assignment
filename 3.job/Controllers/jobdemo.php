<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobdemo extends Controller
{
    public function index(){
        return view('jobregister');
    }


    public function submitform(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'position' => 'required|string|max:255',

        ]);

        $name= $request->input('name');
        $email= $request->input('email');
        $phone= $request->input('phone');
        $position= $request->input('position');

        return view('jobsummary',compact('name','email','phone','position'));
    }
}
