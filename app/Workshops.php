<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshops extends Model
{
    protected $fillable = [
        'workshop_name', 'workshop_description', 'workshop_phone', 'workshop_land_line', 'workers_number',
        'waiting_spot','request','workshop_type','manager_name', 'manager_experience','begin_time',
        'finish_time','begin_date','finish_date','workshop_logo', 'id_location'
    ];

    public function equipment()
    {
        return $this->hasMany(Equipments::class);
    }

    public function service()
    {
        return $this->belongsToMany(Service::class);
    }
    public function car()
    {
        return $this->belongsToMany(Cars::class);
    }

    public function location()
    {
        return $this->hasMany(Location::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

}
