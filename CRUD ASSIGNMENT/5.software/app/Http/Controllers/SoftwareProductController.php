<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftwareProduct;

class SoftwareProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $softwares=SoftwareProduct::all();
        return view('softwares.index',compact('softwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('softwares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata=$request->validate([
            "name"=>"required",
            "version"=>"required",
            "type"=>"required",
            "price"=>"required|numeric"

        ]);

        software::create($validatedata);
        return redirect()->route('softwares.index')->with('success','software stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $software=ProductSoftware::findfOrFail($id);
        return view('softwares.edit',comapact('software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedata=$request->validate([
            "name"=>"required",
            "version"=>"required",
            "type"=>"required",
            "price"=>"required|numeric"

        ]);

        software::whereId($id)->update($validatedata);
        return redirect()->route('softwares.index')->with('success','software updates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $software=ProductSoftware::findOrFail($id);
        $software->delte();

        return redirect()->route('softwares.index')->with('success','software delted');
    }
}
