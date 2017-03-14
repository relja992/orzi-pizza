<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use App\Order;
use App\OrderItems;

class EmailController extends Controller
{
    
    public function posalji($id){

    	$ord = Order::find($id);
        $ordItems = OrderItems::where('order_id', $id)->get();
        $i=1;

    	$data = ['ord' => $ord, 'test' => $ordItems, 'i' => $i];

    	Mail::send('admin.orders.orderDetails', $data, function($message){
    		$message->to('office@rimteam.com', 'RiM Team')->subject('Ovo je naslov');
    	});

    	echo 'poslato';
    }
}
