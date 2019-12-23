<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModels extends Model
{
    protected $fillable = [
        'car_model', 'car_year', 'car_kilo', 'chassis_number',
        'fuel_type', 'transmission', 'gas_type', 'id_car', 'car_number'
    ];


}
