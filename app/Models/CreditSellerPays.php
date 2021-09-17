<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditSellerPays extends Model
{
    use HasFactory;
    protected $fillable = [
        'credit_seller_id',
        'day_pay',
        'cost'
    ];
}
