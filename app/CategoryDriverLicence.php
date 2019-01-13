<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryDriverLicence extends Model
{
    protected $fillable = ['date_of_pass','driver_licence_id', 'id'];



public function categories()
{
    return $this->hasMany(\App\Category::class);
}

}