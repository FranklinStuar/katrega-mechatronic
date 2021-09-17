<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditSeller extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'adelanto',
        'total_inicial',
        'total_final',
        'fecha_inicio',
        'fecha_fin',
        'fecha_pagado',
        'status',
        'seller_id'
    ];
}
