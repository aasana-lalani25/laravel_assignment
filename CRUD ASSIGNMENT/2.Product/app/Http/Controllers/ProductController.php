<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata=$request->validate([
            'pname'=>'required',
            'des'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'type'=>'required'
        ]);

        product::create($validatedata);
        return redirect()->route('products.index')->with('success','product added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::FindOrFail($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::FindOrFail($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata=$request->validate([
            'pname'=>'required',
            'des'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'type'=>'required'
        ]);

        product::whereId($id)->update($validatedata);
        return redirect()->route('products.index')->with('sucess','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('sucess','product deleted');
    }
}
