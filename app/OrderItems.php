<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';

    public function order(){

    	return $this->belongsTo('App\Order');
    }

    public function product(){
    	
    	return $this->belongsTo('App\Product');
    }
}
