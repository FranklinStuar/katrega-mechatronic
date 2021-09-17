<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'version',
        'client_id',
        'date_realized',
        'proform_id',
        'maintenance_id',
        'comment',
    ];
}
