<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_plate',
        'brand',
        'year',
        'millage_now',
        'millage_next',
        'description',
        'isactive',
        'client_id',
    ];
}
