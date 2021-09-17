<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'barcode',
        'name',
        'tax',
        'sale_stock_null',
        'presentation',
        'measurement',
        'package',
        'stock',
        'type',
        'purchase',
        'sale',
        'cost',
        'price',
        'isactive',
        'comments'
    ];
}
