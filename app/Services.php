<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'service_name','service_description','guarantee','warranty_period','spare_parts','emergency'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
