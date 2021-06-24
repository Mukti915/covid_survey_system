<?php

namespace App\Http\Controllers;

use App\bed;
use App\ward;
use Illuminate\Http\Request;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ward = ward::orderBy("id", "desc")->get();
        $bed =  bed::orderBy("id", "desc")->get();
        return view("admin.bed_setup", compact("ward","bed"));
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
        $bed = new bed();
        $bed->ward_name = $request->ward_name;
        $bed->bed_name = $request->bed_name;

        $bed->bed_fee = $request->bed_fee;
        $bed->save();
        toastr()->success('Bed Setup Successfully.');
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\bed $bed
     * @return \Illuminate\Http\Response
     */
    public function show(bed $bed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\bed $bed
     * @return \Illuminate\Http\Response
     */
    public function edit(bed $bed)
    {
        //
        $bed->delete();
        toastr()->error('Bed Deleted Successfully.');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\bed $bed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bed $bed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\bed $bed
     * @return \Illuminate\Http\Response
     */
    public function destroy(bed $bed)
    {
        //
    }
}
