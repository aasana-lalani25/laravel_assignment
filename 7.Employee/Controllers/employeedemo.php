<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeedemo extends Controller
{
    public function index(){
        return view('employee');
    }

    public function submitform(Request $request){

         $name= $request->input('name');
         $email= $request->input('email');
         $phone= $request->input('phone');
         $department= $request->input('department');

        return view('employeesummary',compact('name','email','phone','department'));
    }
}
