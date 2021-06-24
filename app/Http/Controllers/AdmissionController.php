<?php

namespace App\Http\Controllers;

use App\admission;
use App\bed;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $admission = new admission();
        $admission->full_name = $request->full_name;
        $admission->g_name = $request->g_name;
        $admission->phone = $request->phone;
        $admission->age = $request->age;
        $admission->address = $request->address;
        $admission->blood_group = $request->blood_group;
        $admission->condition = $request->condition;
        $admission->ward = $request->ward;
        $admission->bed = $request->bed;
        $admission->admission_fee = $request->admission_fee;
        $admission->bed_fee = $request->bed_fee;
        $admission->service_charge = $request->service_charge;
        if (isset($request->bed)) {
            $bed = bed::find($request->bed);
            $bed->status = 1;
            $bed->save();
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '1.' . $extension;
            $file->move('uploads/', $filename);
            $admission->image = $filename;
        }
        $admission->save();
        toastr()->success('Admission Complete.');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\admission $admission
     * @return \Illuminate\Http\Response
     */
    public function show(admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\admission $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(admission $admission)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\admission $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\admission $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(admission $admission)
    {
        //
    }

    public function admited_patient_action($id)
    {
        $id = explode("_", $id);
        $admitted = admission::find($id[0]);
        if ($id[1] == 1) {
            $admitted->dis_ind = 1;
            $bed = bed::find($admitted->bed);
            $bed->status = 0;
            $bed->save();
            toastr()->success('Discharge Complete.');
        }
        if ($id[1] == 2) {
            $admitted->vaccine_ind = 1;
            toastr()->success('Vaccine Complete.');
        }
        $admitted->save();

        return redirect()->back();

    }
}
