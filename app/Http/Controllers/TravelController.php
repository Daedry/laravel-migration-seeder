<?php

namespace App\Http\Controllers;

use App\travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::all();
        // dd($viaggi);
        return view('travels', compact('travels'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function show(travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function edit(travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function destroy(travel $travel)
    {
        //
    }
}
