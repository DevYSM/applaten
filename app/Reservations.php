<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'notes', 'cancelled', 'id_user' ,
        'id_car', 'id_workshop', 'id_service', 'chassis_number',
        'gas_type','id_car_owner','id_model', 'year'
    ];
}
