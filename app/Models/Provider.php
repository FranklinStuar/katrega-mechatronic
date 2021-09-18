<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'identification',
        'name',
        'phone',
        'email',
        'address',
        'isactive'
    ];

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }

}
