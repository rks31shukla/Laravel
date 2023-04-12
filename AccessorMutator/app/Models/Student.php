<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //accessor
    public function getNameAttribute($value)
    {
        // return ucfirst($value);
        return 'Shree '.ucfirst($value);
    }
    public function getCityAttribute($value)
    {
        return ucfirst($value);
    }

    //mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name']= 'Mr. '.$value;
    }
    public function setCityAttribute($value)
    {
        $this->attributes['city']=$value.' India';
    }
    public $timestamps = false;
}
