<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

//    protected $table = 'companies';
//    protected $connection = 'mysql';

    // attributes that aren't mass assignable
    protected $fillable = [
        'name',
        'email',
        'address',
        'country_code'
    ];

    // OPTIONAL
//    protected $guarded = [];

    // THE Model's default values for attributes - OPTIONAL
    /*protected $attributes = [
        'country_code' => 'AUS',
    ];*/

    // relationships

}
