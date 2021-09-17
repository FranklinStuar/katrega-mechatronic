<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillSeller extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'serial',
        'version',
        'client',
        'values',
        'date_realized',
        'details',
        'seller_id',
        'status',
        'comment'
    ];
}
