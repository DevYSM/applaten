<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    //
    protected $fillable = [
        'place', 'city', 'country', 'country_code'

    ];


}
