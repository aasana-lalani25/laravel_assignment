<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productdemo extends Controller
{
   public function index(){
    return view('product');
   }

   public function submitform(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'cname' => 'required|string|max:255',
        'price' => 'required|numeric|min:1',
        'quantity' => 'required|integer|min:1'
    ]);

    $name = $request->input('name');
    $cname = $request->input('cname');
    $price = $request->input('price');
    $quantity = $request->input('quantity');

    return view('productsummary', compact('name', 'cname', 'price', 'quantity'));
}

}

