<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // protected $connection = 'sqlite';
    // protected $table='users';
    // protected $primaryKey = 'id';
    // protected $keyType= 'string';
    // public $incrementing = false;
    // public $timestamps = false;

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updation_date';
    protected $fillable=['name','email','city','marks'];
}
