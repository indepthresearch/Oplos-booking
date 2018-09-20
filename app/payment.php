<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class payment extends Model
{
	use Searchable;
    protected $fillable = [
    	'card_owner',

      'expiry_date',
   
   ];
}
