<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['OIB', 'first_name', 'last_name', 'sex', 'date_of_birth', 'city_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }
}
