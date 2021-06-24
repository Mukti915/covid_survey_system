<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});   





Route::get('/contact', function () {
    return view('contact');
});

Route::get('/feed_back', function () {
    return view('feed_back');
});


Route::get('/registration', function () {
    return view('registration');
});

Route::get('/find_donor', function () {
    return view('faq');
});

Route::get('/log_in', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    //return view('admin.dashboard');
    return redirect("/home");
});
Route::get('/add_patient', function () {
    $bed = \App\bed::orderBy("id","desc")->get();
    $ward = \App\ward::orderBy("id","desc")->get();
    return view('admin.paitient_registrattion',compact("bed","ward"));
});
Route::get('/patient_list', function () {
    $patientList = \App\admission::orderBy("id","desc")->get();
    return view('admin.patient_list',compact("patientList"));
});
Route::get('/bed_viewer', function () {
    return view('admin.bed_viewer');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Resource

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post("/getSearchResult","CovidRegistrationController@getSearchResult")->name("getSearchResult");
Route::get("/surveyList","CovidRegistrationController@surveyList")->name("surveyList");

Route::get("/admission_action/{id}","AdmissionController@admited_patient_action")->name("admission.action");

Route::get("/book_vaccine/{id}","VaccineController@book_vaccine")->name("book_vaccine");
Route::get("/bookingList","VaccineController@bookingList")->name("bookingList");

Route::resource("CovidRegistration","CovidRegistrationController");

Route::resource("ward","WardController");

Route::resource("bed","BedController");

Route::resource("admission","AdmissionController");

Route::resource("vaccine","VaccineController");

Route::resource("feedback","FeedBackController");

Route::resource("contactus","ContactusController");


