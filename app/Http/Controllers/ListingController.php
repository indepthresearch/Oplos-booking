<?php

namespace App\Http\Controllers;

use App\Listing;
use Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //$Listings::all();
       //return view('listing',['Listings' => $Listings]);
       //return view('index', compact('Listings'));
     //Listing::create(Request::all())->toArray();
       // return view('Index')->with('listing',$listings);

        return view('Listing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Listing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {    
        
         listing::create(Request::all());

         return redirect('listing')->with('success', 'Details has been added successfully');


        /**
             $request->validate([
          'property_name' => 'required',
          'name_owner'=> 'required',
    
          'phone_number',
          'email'=> 'required|',
          'location',
          'Ratings'=> 'required|numeric',
          'number_conference_hall'=> 'required|numeric',
          'capacity',
          'price_per_person'=> 'required|numeric',
          'price_per_metre'=> 'required|numeric',
          'price_per_hall'=> 'required|numeric',
          'Description',
          'image',
          'checkbox',

        ]); 
        
        $listing = new listing();
        $listing->propert_name=$request->get('property_name');
        $listing->name_owner=$request->get('name_owner');
        $listing->phone_number=$request->get('name_owner');
        $listing->email=$request->get('email');
        $listing->location=$request->get('location');
        $listing->Ratings=$request->get('Ratings');
        $listing->number_conference_hall=$request->get('number_conference_hall');
        $listing->capacity=$request->get('capacity');
        $listing->price_per_person=$request->get('price_per_person');
        $listing->price_per_metre=$request->get('price_per_metre');
        $listing->price_per_hall=$request->get('price_per_hall');
        $listing->image=$request->get('image');
        $checkbox = implode(",", $request->get('boxes'));
        //$form->dropdown=$request->get('dropdown');
        //$form->radio=$request->get('radio');
        $listing->checkbox = $checkbox; 
        $listing->save();
        return redirect('listing')->with('success', 'Details has been added successfully');

     if($request->hasFile('file')){   
       $request->file('file');
       return Storage::putFile('public',$request->file('image'));
    //return $name = time().$file->getClientOriginalName();
    //return $file->store('storage/app/public', $name);
     //return 'yes';
    //$file = array_merge(['photo' => "storage/app/public/{$name}"], $request->all());

    //Listing::create($file);

    return 'Done';
    }else{
        return'no file uploaded';
    }

   return $request->all();**/
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()

    {     
          $listings = listing::all();
          return view('Listing')->withListings($listings);
          //dd($listings);
       // $Listings = Listing::where('id',$Listings)->first();

        // return view ::make('listing',['Listing'=>$Listings]);   
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
