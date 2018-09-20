<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderListing extends Model
{
    protected $table = 'order_listing';

     protected $fillable = ['order_id', 'listing_id', 'quantity'];
}
