<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    public function driverlicence()
    {
        return $this->belongsTo(\App\DriverLicence::class);
    }

    public function categorydriverlicence()
    {
        return $this->belongsTo(\App\CategoryDriverLicence::class);
    }
}
