<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'email', 'name', 'address', 'city',
        'province', 'postalcode', 'phone_number', 'name_on_card', 
         'subtotal', 'tax', 'total', 'error',
    ];
     public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function listings()
    {
        return $this->belongsToMany('App\Listing')->withPivot('quantity');
    }
}


