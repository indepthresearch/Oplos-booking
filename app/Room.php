<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Room extends Model
{
    use Searchable;
}
