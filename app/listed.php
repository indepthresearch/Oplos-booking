<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class listed extends Model
{   
	use Searchable;
    
     protected $fillable = [
          'property_name',
          'name_owner',
          'phone_number',
          'email',
          'location',
          'Ratings',
          'number_conference_hall',
          'capacity',
          'price_per_person',
          'price_per_metre',
          'price_per_hall',
          'Description',
          'image',
          'checkbox',


    ];
    public function searchableAs()
    {
        return 'listeds_index';
    }

}
