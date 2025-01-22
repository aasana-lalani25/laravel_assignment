<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstdemo extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function blog(){
        return view('blog');
    }

    public function submitForm(Request $request)
    {
        $name=$request->input('name');
        $message=$request->input('message');
        //return redirect('/contact')->with('success','Message sent successfully!');
        return view ('thankyou', compact('name','message'));
    }
}
