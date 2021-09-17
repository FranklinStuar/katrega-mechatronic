<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'identification',
        'name',
        'phone',
        'email',
        'address',
        'final_user',
        'isactive',
        'type'
    ];
}

