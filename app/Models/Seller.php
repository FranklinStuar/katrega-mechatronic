<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'number',
        'version',
        'discount_0',
        'client_id',
        'discount_tax',
        'total_0',
        'total_tax',
        'subtotal_0',
        'tax',
        'subtotal_tax',
        'total',
        'date_realized',
        'details',
        'proform_id',
        'order_id',
        'status',
        'comment',
        'credit_seller_id'
    ];
}
