<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditSellerDues extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'credit_seller_id',
        'date_finish',
        'capital',
        'abono',
        'status',
    ];
}
