<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BillSeller;
use App\Models\Client;
use App\Models\Proform;
use App\Models\Order;
use App\Models\CreditSeller;

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

    public function client(){
        return $this->belongsTo(Client::class);
    }
    
    public function proform(){
        return $this->belongsTo(Proform::class);
    }
    
    public function order(){
        return $this->belongsTo(Order::class);
    }
    
    public function credit_seller(){
        return $this->belongsTo(CreditSeller::class);
    }
    
    public function bill(){
        return $this->hasOne(BillSeller::class);
    }
    
}
