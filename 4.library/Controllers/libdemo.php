<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libdemo extends Controller
{
    public function index(){
        return view('library');
    }

    public function submitform(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'aname' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'year' => 'required|string|max:255',

        ]);

        $name=$request->input('name');
        $aname=$request->input('aname');
        $isbn=$request->input('isbn');
        $year=$request->input('year');

        return view('libsummary',compact('name','aname','isbn','year'));

    }
}
