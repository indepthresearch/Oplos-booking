<?php

namespace App\Http\Controllers;
use App\Listing;
use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($property_name)
    {
         $listings = listing::where('property_name', $property_name)->firstOrFail();
         return view('product')->with('listing',$listings); 
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        $product::all();
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
    public function show()
    {
         return view ('product');   
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
