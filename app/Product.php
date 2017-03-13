<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
	protected $fillable = ['name', 'description', 'size', 'cetegory_id', 'image', 'price', 'price2', 'price3'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function orderItems(){
    	return $this->hasMany('App\OrderItems');
    }
}
