<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SearchController extends Controller
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

         Search::create(Request::all());

        $search = new Book([
        $search =>  $request->get('image'),
        $search =>  $request->get('name'),
        $search =>  $request->get('price'),
        ]);

        $search->save();
        return redirect()->route('search')->with('success', 'Details has been added successfully one of our team members will get back to you');

    }
   public function find(Request $request)
{
    return Listing::search($request->get('q'))->get();
}
    /**
     * Display the specified resource.
     *
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        /*$request->validate([
            'query' => 'required|min:3',
        ]);
*/
        $query = $request->input('query');

        // $products = Product::where('name', 'like', "%$query%")
        //                    ->orWhere('details', 'like', "%$query%")
        //                    ->orWhere('description', 'like', "%$query%")
        //                    ->paginate(10);

        $listings = Listing::search($query)->paginate(10);
}

    public function show()
    {
         //return view:: make('index1');   
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
