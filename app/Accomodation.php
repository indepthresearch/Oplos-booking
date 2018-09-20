<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Accomodation extends Model
{
    protected $fillable=[
    	'property_name',
       
        'room_type',
        'location',
        'price',
        'details',
        'maximum_occupacy',
        'rooms',
        'Area',
    ];
}
