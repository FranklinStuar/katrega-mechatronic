<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'number',
        'version',
        'provider_id',
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
}
