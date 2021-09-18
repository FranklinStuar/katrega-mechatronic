<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maintenance;
use App\Models\Car;
use App\Models\Seller;
use App\Models\Order;
use App\Models\Proform;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'identification',
        'name',
        'phone',
        'email',
        'address',
        'final_user',
        'isactive',
        'type'
    ];
    
    public function maintenances(){
        return $this->hasMany(Maintenance::class);
    }
    
    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function sellers(){
        return $this->hasMany(Seller::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function proforms(){
        return $this->hasMany(Proform::class);
    }
}

