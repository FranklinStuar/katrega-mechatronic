<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proform extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'version',
        'client_id',
        'discount_0',
        'discount_tax',
        'total_0',
        'total_tax',
        'subtotal_0',
        'tax',
        'subtotal_tax',
        'total',
        'date_realized',
        'details',
        'comment'
    ];
    public $timestamps = false;
}
