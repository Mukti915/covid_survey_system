<?php

namespace App\Http\Controllers;

use App\CovidRegistration;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CovidRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = DB::table("users")
            ->join("covid_registrations","users.email","covid_registrations.email")
            ->where('covid_registrations.email',Auth::user()->email)->first();

        return view("user.update_profile",compact("user"));
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
        try {
            $reg = new CovidRegistration();
            $reg->full_name = $request->full_name;
            $reg->email = $request->email;
            $reg->phone = $request->phone;
            $reg->address = $request->address;
            $reg->blood_group = $request->blood_group;
            $reg->details = $request->details;
            $reg->vaccine_ind = isset($request->vaccine_ind) ? $request->vaccine_ind : 0;
            $reg->test_ind = isset($request->test_ind) ? $request->test_ind : 0;
            $reg->covid_ind = isset($request->covid_ind) ? $request->covid_ind : 0;
            $reg->save();
            $user = new User();
            $user->name = $request->full_name;
            $user->email = $request->email;
            $user->password = Hash::make("12345678");
            $user->type =2;
            $user->save();

            toastr()->success('Registration Done.');
        } catch (\Exception $e) {
            toastr()->success('Registration Failed.');
        }
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\CovidRegistration $covidRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(CovidRegistration $covidRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\CovidRegistration $covidRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(CovidRegistration $covidRegistration,Request $request)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\CovidRegistration $covidRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CovidRegistration $covidRegistration)
    {
        //
        try {
            $user = User::where('email',Auth::user()->email)->first();
            $user->name = $request->full_name;
            $user->email = $request->email;
            $user->password = Hash::make("12345678");
            $user->type =2;
            $user->save();
            $reg = CovidRegistration::where('email',Auth::user()->email)->first();
            $reg->full_name = $request->full_name;
            $reg->email = $request->email;
            $reg->phone = $request->phone;
            $reg->address = $request->address;
            $reg->blood_group = $request->blood_group;
            $reg->details = $request->details;
            $reg->vaccine_ind = isset($request->vaccine_ind) ? $request->vaccine_ind : 0;
            $reg->test_ind = isset($request->test_ind) ? $request->test_ind : 0;
            $reg->covid_ind = isset($request->covid_ind) ? $request->covid_ind : 0;
            $reg->save();


            toastr()->success('Registration Done.');
        } catch (\Exception $e) {
            toastr()->success('Registration Failed.');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\CovidRegistration $covidRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(CovidRegistration $covidRegistration)
    {
        //
    }

    public function getSearchResult(Request $request)
    {
        //dd($request->all());
        $search_cond = null;
        if (isset($request->search)) {
            $search_cond .= isset($search_cond) ? "and full_name like '%$request->search%' " : "where full_name like '%$request->search%' ";

        }
        if (isset($request->blood_group)) {
            $search_cond .= isset($search_cond) ? "and blood_group = '$request->blood_group' " : "where blood_group = '$request->blood_group'  ";

        }
        if (isset($request->ind)) {
            if ($request->ind == 1)
                $search_cond .= isset($search_cond) ? "and covid_ind = 1 " : "where covid_ind = 1   ";

            if ($request->ind == 2)
                $search_cond .= isset($search_cond) ? "and test_ind = 1 " : "where test_ind = 1   ";

            if ($request->ind == 3)
                $search_cond .= isset($search_cond) ? "and vaccine_ind = 1 " : "where vaccine_ind = 1   ";

        }
        $result = DB::select("Select * from covid_registrations $search_cond");
        return view("search_result", compact("result"));
    }

    public function surveyList()
    {
        $data = CovidRegistration::orderBy("id", "desc")->get();
        return view("admin.surveyList", compact("data"));
    }
}
