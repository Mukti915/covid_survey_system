<?php

namespace App\Http\Controllers;

use App\vaccine;
use App\vacinebooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vaccine = vaccine::orderBy("id","desc")->get();
        return view("admin.vaccine",compact("vaccine"));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $vaccine = new vaccine();
        $vaccine->vaccine_name = $request->vaccine_name;
        $vaccine->vaccine_no = $request->vaccine_no;

        $vaccine->save();
        toastr()->success('Vaccine Added Successfully.');
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function show(vaccine $vaccine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function edit(vaccine $vaccine)
    {
        //
        $vaccine->delete();
        toastr()->error('Vaccine Deleted Successfully.');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vaccine $vaccine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy(vaccine $vaccine)
    {
        //
    }
    public  function book_vaccine($id){
        $vc = new vacinebooking();
        $vc->v_id = $id;
        $vc->email = Auth::user()->email;
        $vc->save();
        toastr()->success('Vaccine Booked Successfully.');
        return redirect()->back();
    }
    public function bookingList(){
        $list = DB::table("vacinebookings")
            ->join('vaccines','vaccines.id',"vacinebookings.v_id")
            ->join('covid_registrations','covid_registrations.email',"vacinebookings.email")
            ->get();
        return view("admin.bookingList",compact("list"));
    }
}
