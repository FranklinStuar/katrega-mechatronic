<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

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

    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
