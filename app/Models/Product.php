<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'barcode',
        'name',
        'tax',
        'sale_stock_null',
        'presentation',
        'measurement',
        'package',
        'stock',
        'type',
        'purchase',
        'sale',
        'cost',
        'price',
        'isactive',
        'comments',
        'reserved',
        'reserved_details'
    ];

    public static function addProducts($id, $value){
        try {
            $product = Product::findOrFail($id);
            $product->update([
                'stock' => $product->stock + $value
            ]);
            return ['status'=>"success","system"=>false,"message"=>"success"];
        } catch (\Throwable $th) {
            return ['status'=>"error","system"=>true,"message"=>$th];
        }
    }

    public static function reduceProducts($id, $value){
        try {
            $product = Product::findOrFail($id);
            $newValue = $product->stock - $product->reserved - $value;
            if($newValue >= 0 || ($newValue < 0 && $product->sale_stock_null)){
                $product->update([
                    'stock' => $newValue
                ]);
                return ['status'=>"success","system"=>false,"message"=>"success"];
            }
            return ['status'=>"error","system"=>false,"message"=>"New value not accepted"];
        } catch (\Throwable $th) {
            return ['status'=>"error","system"=>true,"message"=>$th];
        }
    }

    public static function updateReserved($id,$value,$document){
        try {
            $product = Product::findOrFail($id);
            $reserved = 0;
            $details = json_decode($product->reserved_deails, true);
            $documentIndex = -1;
            foreach ($details as $key => $detail) {
                if($detail['document']== $document){
                    $reserved += $value;
                    $documentIndex = $key;
                }
                else{
                    $reserved += $detail['value'];
                }
            }
            $newValue = $product->stock - $reserved;
            if($newValue >= 0 || ($newValue < 0 && $product->sale_stock_null)){
                if ($documentIndex == -1) {
                    $details = Arr::add($details,[
                        'value'=> $value,
                        'document'=> $document
                    ]);
                }
                else {
                    $details[$documentIndex]['value'] = $value;
                }
                $product->update([
                    'reserved' => $reserved,
                    'reserved_details' => json_encode($details)
                ]);
                return ['status'=>"success","system"=>false,"message"=>"The reserved product has been updated"];
            }
            return ['status'=>"error","system"=>false,"message"=>"There haven't stock available"];
        } catch (\Throwable $th) {
            return ['status'=>"error","system"=>true,"message"=>$th];
        }
    }

    public static function removeReserve($id,$document){
        try {
            $product = Product::findOrFail($id);
            $details = json_decode($product->reserved_deails, true);
            foreach ($details as $key => $detail) {
                if($detail['document']== $document){
                    $product->update([
                        'reserved' => $product->reserved - $detail['value'],
                        'reserved_details' => json_encode(Arr::except($details, [$key]))
                    ]);
                    return ['status'=>"success","system"=>false,"message"=>"The reserved product has been updated"];
                }
            }
            return ['status'=>"error","system"=>false,"message"=>"Reserved product was not found"];
        } catch (\Throwable $th) {
            return ['status'=>"error","system"=>true,"message"=>$th];
        }
    }
}
