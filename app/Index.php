<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
namespace App\Components\Currencies;

use SSD\Currency\Currencies\BaseCurrency;

class Index extends Model
{
    //
public function Listing() {
return $this->belongsTo('App\Listing');
}
}
