<?php

namespace App\Http\Controllers;

use App\ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ward  =  ward::orderBy("id","desc")->get();
        return view("admin.ward",compact("ward"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ward = new ward();
        $ward->ward_name = $request->ward_name;
        $ward->bed_no = $request->bed_no;
        $ward->save();
        toastr()->success('Ward Setup Successfully.');
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ward $ward
     * @return \Illuminate\Http\Response
     */
    public function show(ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ward $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(ward $ward)
    {
        //
        $ward->delete();
        toastr()->error('Ward Deleted Successfully.');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ward $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ward $ward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ward $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(ward $ward)
    {
        //
    }
}
