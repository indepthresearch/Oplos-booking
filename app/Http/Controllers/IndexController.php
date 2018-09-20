<?php

namespace App\Http\Controllers;
use App\Listing;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $Listing = Listing::inRandomOrder()->all();
        return view('index',['listings'=>$listings]);
        //$listings = Listing::where('featured', true)->take(8)->inRandomOrder()->get();

        //return view('index')->with('listing', $Listings);
       //return view('index');
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
 public function home(){
     return view('index');
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

         return view('product')->with('$listings',$listings);   
          }



    public function search(Request $request)
    {
        /*$request->validate([
            'query' => 'required|min:3',
        ]);*/

        $query = $request->input('query');

        $listings = Listing::where('property_name', 'like', "%$query%")
                           ->orWhere('location', 'like', "%$query%")
                           ->orWhere('price_per_hall', 'like', "%$query%")
                           ->paginate(10);

        /*$listings = Listing::search("%$query%")->paginate(6);
*/
        return view('search')->with('listings', $listings);
    }

    public function searchAlgolia(Request $request)
    {
        
        return view('search-results-algolia');
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
