<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Proform extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'number',
        'version',
        'client_id',
        'discount_0',
        'discount_tax',
        'total_0',
        'total_tax',
        'subtotal_0',
        'tax',
        'subtotal_tax',
        'total',
        'date_realized',
        'details',
        'comment'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
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
