<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverLicence extends Model
{
    protected $fillable = ['date_of_issue', 'expiration_date','county_id','driver_id'];

    public function drivers()
    {
        return $this->hasMany(\App\Driver::class);
    }

    public function county()
    {
        return $this->belongsTo(\App\County::class);
    }

}

