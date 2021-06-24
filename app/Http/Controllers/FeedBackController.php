<?php

namespace App\Http\Controllers;

use App\feed_back;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $feedback = feed_back::orderBy("id","desc")->get();
        return  view("admin.feedback",compact("feedback"));
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
        $feedback = new feed_back();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->save();
        toastr()->success('Feedback Done.');
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\feed_back  $feed_back
     * @return \Illuminate\Http\Response
     */
    public function show(feed_back $feed_back)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\feed_back  $feed_back
     * @return \Illuminate\Http\Response
     */
    public function edit(feed_back $feed_back)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\feed_back  $feed_back
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feed_back $feed_back)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\feed_back  $feed_back
     * @return \Illuminate\Http\Response
     */
    public function destroy(feed_back $feed_back)
    {
        //
    }
}
