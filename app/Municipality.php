<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['municipality_name', 'county_id'];

    public function county()
    {
        return $this->belongsTo(\App\County::class);
    }

    public function cities()
    {
        return $this->hasMany(\App\City::class);
    }

}
