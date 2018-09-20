<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deals');
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
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
     public function show($property_name)
    {
        $listings = listing::where('property_name', $property_name)->firstOrFail();

         return view('deals')->with('$listings',$listings);   
          }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
