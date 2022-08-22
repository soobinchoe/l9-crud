<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $connection = 'mysql';
    protected $fillable = [
        'name',
        'email',
        'address',
        'country_code'
    ];

}
