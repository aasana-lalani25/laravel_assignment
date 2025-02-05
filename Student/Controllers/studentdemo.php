<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentdemo extends Controller
{
    public function index(){
        return view('register');
    }

    public function submitform(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'courses' => 'required'
        ], [
            'name.required' => 'The full name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'The phone number field is required.',
            'phone.digits' => 'The phone number must be exactly 10 digits.',
            'courses.required' => 'Please select a course.'
        ]);

        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $courses=$request->input('courses');

        return view ('studentprint', compact('name','email','phone','courses'));
    }

}
