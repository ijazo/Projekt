<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = ['county_name'];

    public function municipalities()
    {
        return $this->hasMany(\App\Municipality::class);
    }

    public function driverlicences()
    {
        return $this->hasMany(\App\DriverLicence::class);
    }

}
