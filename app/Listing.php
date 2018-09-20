<?php

namespace App;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Listing extends Model
{   
	use SearchableTrait;
    
     protected $fillable = [


 
          'property_name'=>10,
          'name_owner'=>1,
          'phone_number'=>5,
          'listings.email'=>5,
          'location'=>10,
          'Ratings'=>8,
          'listings.number_conference_hall'=>7,
          'capacity'=>10,
          'listings.price_per_person'=>8,
          'price_per_metre'=>5,
          'listings.price_per_hall'=>10,
          'Description'=>5,
          'listings.image'=>5,
          'checkbox'=>2,

 
    ];

    
     
    public function searchableAs()
    {
        return 'listings_index';
    }

}
