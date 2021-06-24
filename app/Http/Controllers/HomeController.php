<?php

namespace App\Http\Controllers;

use App\admission;
use App\bed;
use App\CovidRegistration;
use App\vaccine;
use App\ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $admitted = admission::where("dis_ind", 1)->get();
            $all_admitted = admission::all();
            $vaccine_patient = admission::where("vaccine_ind", 1)->get();
            $vaccin = DB::select("select sum(vaccine_no) as vaccine, count(id) as total from vaccines");
            //dd($vaccin[0]->vaccine);
            $register = CovidRegistration::all();
            $bed = bed::all();
            $booked_bed = bed::where('status', 1)->get();
            $ward = ward::all();
            return view('admin.dashboard', compact("bed", "ward", "admitted", "all_admitted", "vaccine_patient", "vaccin", "register", "booked_bed"));

        }else{
            return view("user.logged");
        }
    }
}
