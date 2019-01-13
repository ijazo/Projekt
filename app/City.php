<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['city_name', 'municipality_id'];


public function municipality()
{
    return $this->belongsTo(\App\Municipality::class);
}
    public function drivers()
    {
        return $this->hasMany(\App\Driver::class);
    }
}
