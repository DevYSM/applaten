<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    //
    protected $fillable = [
        'car_type', 'id_user'
    ];

    public function Car_model()
    {
        return $this->hasMany(CarModels::class);
    }

}
