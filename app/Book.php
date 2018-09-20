<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Book extends Model
{
    use Searchable;
    protected $fillable = [
               'country',
               'first_name',
               'last_name',
               'email',
               'phone_number',
               'city',
               'address',
    ];

    public function searchableAs()
    {
        return 'books_index';
    }
}

