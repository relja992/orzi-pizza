<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use Mail;
use App\OrderItems;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ord = Order::orderBy('id', 'desc')->paginate(10);

        return view('admin.orders.index')->withOrders($ord);
    }

    public function orderDetails($id){

        $ord = Order::find($id);
        $ordItems = OrderItems::where('order_id', $id)->get();
        $i=1;

        //dd($ordItems);

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
        $cenaOrd = explode(".", $ord->price);

        if(intval($cenaOrd[0])<100){
        $prvaCifra = $cenaOrd[0] * 1000;
        $ostatak = array();
        $ostatak = explode(",", $cenaOrd[1]);
    
        $cenaOrdera = $prvaCifra + intval($ostatak[0]);
        }else{
        $cenaOrdera = $cenaOrd[0];
        }

        $cenaDodataka = $cenaOrdera - $cenaProizvoda;

        return view('admin.orders.orderDetails')->withOrd($ord)->withTest($ordItems)->withI($i)->withPrilozi_cena($cenaDodataka);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $orders)
    {
        dd($orders);
    }

    public function updatee($id)
    {
        Order::where('id', $id)->update(['status' => 'odobrena']);


        $ord = Order::find($id);

            $data = ['ord' => $ord, ];

            Mail::send('admin.orders.email2', $data, function($message) use ($ord){
                $message->to($ord['email'], $ord->name . ' ' . $ord->surname)->subject('Orzi pizzeria');
            });


        return redirect()->route('admin.orders.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
