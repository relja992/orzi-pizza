<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\OrderItems;
use Mail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;

class CheckoutController extends Controller
{
    public function step1(){

        return redirect()->route('checkout.shipping');
    }

    public function shipping()
    {
        return view('cart.shipping-info');
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
        $order->price = Cart::subtotal(2, ',', '.');
        $order->status = 'na čekanju';
        //$order->mojDatum = date('Y-m-d H:i:s');
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
                $orderItem->prilozi = $cartItem->options->prilozi;

        		$orderItem->save();
        	}

            $ordItems = OrderItems::where('order_id', $id)->get();

            $cenaDodataka = 0;
            $cenaProizvoda = 0;

            foreach($ordItems as $ordItem){

                if($ordItem->product->size == 'small'){
                    $cenaProizvoda += $ordItem->product->price * $ordItem->amount;
                }elseif($ordItem->size == 'medium'){
                    $cenaProizvoda += $ordItem->product->price2 * $ordItem->amount;
                }elseif($ordItem->size == 'large'){
                    $cenaProizvoda += $ordItem->product->price3 * $ordItem->amount;
                }elseif($ordItem->size == 'pene'){
                    $cenaProizvoda += $ordItem->product->price * $ordItem->amount;
                }elseif($ordItem->size == 'fusili'){
                    $cenaProizvoda += $ordItem->product->price * $ordItem->amount;
                }elseif($ordItem->size == '200g'){
                    $cenaProizvoda += $ordItem->product->price * $ordItem->amount;
                }elseif($ordItem->size == '300g'){
                    $cenaProizvoda += $ordItem->product->price2 * $ordItem->amount;
                }elseif($ordItem->size == '500g'){
                    $cenaProizvoda += $ordItem->product->price3 * $ordItem->amount;
                }elseif($ordItem->size == '1kg'){
                    $cenaProizvoda += $ordItem->product->price4 * $ordItem->amount;
                }elseif($ordItem->size == 'standard'){
                    $cenaProizvoda += $ordItem->product->price * $ordItem->amount;
                }else{
                    $cenaProizvoda += $ordItem->product->price * $ordItem->amount;
                }
            }

            $cenaOrd = array();
            $cenaOrd = explode(".", $order->price);

            if(intval($cenaOrd[0])<100){
            $prvaCifra = $cenaOrd[0] * 1000;
            $ostatak = array();
            $ostatak = explode(",", $cenaOrd[1]);
        
            $cenaOrdera = $prvaCifra + intval($ostatak[0]);
            }else{
            $cenaOrdera = $cenaOrd[0];
            }

            $cenaDodataka = $cenaOrdera - $cenaProizvoda;


        //setovanje sesije za obavestenje
            Session::flash('success', 'Uspešno ste izvršili naručivanje. Poslat Vam je email sa specifikacijom narudžbine.');

    	//send email

            $ord = Order::find($id);
            $ordItems = OrderItems::where('order_id', $id)->get();
            $i=1;

            $data = ['ord' => $ord, 'test' => $ordItems, 'i' => $i, 'cenaPriloga' => $cenaDodataka];

            Mail::send('admin.orders.email', $data, function($message) use ($ord){
                $message->to($ord['email'], 'RiM Team')->cc('reljin992@gmail.com')->subject('Orzi pizzeria');
            });


        //praznjenje korpe
            Cart::destroy();

        //redirekcija
            return redirect()->route('menu2');

    }
}
