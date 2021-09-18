<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Car;
use App\Models\Proform;

class Maintenance extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'version',
        'date_realized',
        'details',
        'comment',
        'representant_name',
        'representant_phone',
        'representant_email',
        'client_id',
        'car_id',
        'proform_id',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function proform(){
        return $this->belongsTo(Proform::class);
    }

    public function addItem($item){
        $details = json_decode($this->details, true);
        $details = Arr::add($details,$item);
        $this->update([
            'details'=>json_encode($details)
        ]);
    }
    public function updateItem($index, $item){
        $details = json_decode($this->details, true);
        $details[$index] = $item;
        $this->update([
            'details'=>json_encode($details)
        ]);
    }
    public function removeItem($index, $item){
        $details = json_decode($this->details, true);
        $this->update([
            'details'=>json_encode(Arr::except($details, [$index]))
        ]);
    }
    
}
