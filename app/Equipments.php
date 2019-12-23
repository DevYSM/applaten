<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    //
    protected $fillable = [
        'equipment_name', 'description', 'id_workshop'
    ];
}
