<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyListing;

class PropertyListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property=PropertyListing::all();
        return view('property.index',compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata=$request->validate([
            'address'=>'required',
            'type'=>'required',
            'price'=>'required|numeric',
            'des'=>'required',
        ]);

        PropertyListing::create($request->all());
        return redirect()->route('property.index')->with('success','created');
    }

    /**()
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = PropertyListing::findOrFail($id);
        return view('property.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyListing $property)
    {
        $request->validate([
            'address'=>'required',
            'type'=>'required',
            'price'=>'required|numeric',
            'des'=>'required',
        ]);


            $property->update($request->all());
            return redirect()->route('property.index')->with('success', 'property updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyListing $property)
    {
       $property->delete();
       return redirect()->route('property.index')->with('success','delete');
    }
}
