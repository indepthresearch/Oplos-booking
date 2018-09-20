<?php

namespace App;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Product extends Model
{   
	 use SearchableTrait;
    
     protected $searchable = [

 'columns' => [
          'property_name',      
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
          

         ]
    ];
    public function searchableAs()
    {
        return 'Products_index';
    }

}
