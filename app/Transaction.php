<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'pembayaran',
        'order_id', 
        'product_id',
        'quantity'
    
    
    ];

    public function order() {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function product() {
        return $this->belongsTo('App\Product', 'product_id');
    }
    public function getTotalPriceAttribute() {
        return $this->quantity * $this->product->price;
    }
}
