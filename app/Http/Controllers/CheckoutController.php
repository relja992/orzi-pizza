<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\OrderItems;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function step1(){

        return redirect()->route('checkout.shipping');
    }

    public function shipping()
    {
        return view('layout.shipping-info');
    }

    public function finishOrder(Request $request){

    	//validation
    	$this->validate($request, [
                'name' => 'required',
                'surname' => 'required',
                'address' => 'required',
                'telephone' => 'required',
                'email' => 'required|email',
            ]);

    	//taking datas from form
    	$order = new Order();
        $order->name = $request->name;
        $order->surname = $request->surname;
        $order->address = $request->address;
        $order->sprat = $request->sprat;
        $order->stan = $request->stan;
        $order->telephone = $request->telephone;
        $order->email = $request->email;
        $order->napomena = $request->napomena;
        $order->price = Cart::subtotal();
        $order->save();

        $id = $order->id;

        //taking data from cart inserting to db * 2
        $cartItems = Cart::content();
        	foreach($cartItems as $cartItem){

        		$orderItem = new OrderItems();
        		$orderItem->order_id = $id;
        		$orderItem->product_id = $cartItem->id;
        		$orderItem->amount = $cartItem->qty;
        		$orderItem->size = $cartItem->options->size;

        		$orderItem->save();
        	}

    	//send email

    }
}
