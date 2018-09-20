<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Filter extends Model
{    
	use Searchable;
     public function scopeFilter(Builder $builder, $request)
    {
        return (new ProductFilter($request))->filter($builder);
}
}
