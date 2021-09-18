<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Maintenance;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_plate',
        'brand',
        'year',
        'millage_now',
        'millage_next',
        'description',
        'isactive',
        'client_id',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    
    public function maintenances(){
        return $this->hasMany(Maintenance::class);
    }
    
}
