<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

use App\Models\Client;
use App\Models\Proform;
use App\Models\Seller;
use App\Models\Maintenance;

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
        'details',
        'comment',
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    
    public function proform(){
        return $this->belongsTo(Proform::class);
    }
    
    public function maintenance(){
        return $this->belongsTo(Maintenance::class);
    }
    
    public function seller(){
        return $this->belongsTo(Seller::class);
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
