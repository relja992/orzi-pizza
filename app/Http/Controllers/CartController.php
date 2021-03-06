<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Oblast;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        $oblasti = Oblast::all();
        $obl = array();

        foreach($oblasti as $oblast){
            $obl[$oblast->id] = $oblast->name;
        }

        return view('cart.index', compact('cartItems'))->withOblasti($obl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        
    }

    public function addItem(Request $request, $id){

        //dd($request->ch);

        $product = Product::find($id);

        if($product->category->slug == 'pizza'){

            $this->validate($request, [
                'optradio' => 'required',
            ]);
        } 

        $size ="";
        $price = 0;
        $check = array();
        $pieces = array();
        $check = $request->ch;
        $checkString = "";

        $broj = count($check);
        $cenaPriloga = 0;

        for($i=0; $i<$broj; $i++){
            
            $pieces = explode(",", $check[$i]);
                 
            $cenaPriloga += intval($pieces[1]);

            if($i == ($broj-1) ){
                $checkString = $checkString . $pieces[0] . ' ';
            }else{
                $checkString = $checkString . $pieces[0] . ', ';
            }           
        }

        if($request->optradio == 1){
            $size = "small";
            $price = $product->price + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 2){
            $size = "medium";
            $price = $product->price2 + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 3){
            $size = "large";
            $price = $product->price3 + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 4){
            $size = "pene";
            $price = $product->price + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 5){
            $size = "fusili";
            $price = $product->price + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 6){
            $size = "200g";
            $price = $product->price + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 7){
            $size = "300g";
            $price = $product->price2 + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 8){
            $size = "500g";
            $price = $product->price3 + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }elseif($request->optradio == 9){
            $size = "1kg";
            $price = $product->price4 + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }else{
            $size = "standard";
            $price = $product->price + $cenaPriloga;
            Cart::add($id, $product->name, 1, $price,['size'=> $size, 'prilozi' => $checkString]); 
        }

        /*if($request->optradio == 2){
            Cart::add($id, $product->name, 1, $product->price,['size'=> $vrednost]);

            return redirect()->route('home');
        }*/

        /*

        if($product->category->name == 'pizza'){

            Cart::add($id, $product->name, 1, $product->price,['size'=>'standard']);

        }else{

            Cart::add($id, $product->name, 1, $product->price,['size'=>'standard']);

        }

        Cart::add($id, $product->name, 1, $product->price,['size'=>'medium']);
        //Cart::add($product, 1, ['size' => 'large']);
        //Cart::add('192', 'Product 1', 1, 9.99);

        return view('layout.gallery');*/
        
        return back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $item = Cart::get($id);
        $product = Product::find($item->id);

        $size ="";
        $price = 0;
        $cenaPriloga=0;

        if($request->size == "small"){
            if($item->options->size == "small"){
                $cenaPriloga = $item->price - $product->price;
            }elseif($item->options->size == "medium"){
                $cenaPriloga = $item->price - $product->price2;
            }elseif($item->options->size == "large"){
                $cenaPriloga = $item->price - $product->price3;
            }
            $price = $product->price + $cenaPriloga;
        }elseif($request->size == "medium"){
            if($item->options->size == "small"){
                $cenaPriloga = $item->price - $product->price;
            }elseif($item->options->size == "medium"){
                $cenaPriloga = $item->price - $product->price2;
            }elseif($item->options->size == "large"){
                $cenaPriloga = $item->price - $product->price3;
            }
            $price = $product->price2 + $cenaPriloga;
        }elseif($request->size == "large"){
            if($item->options->size == "small"){
                $cenaPriloga = $item->price - $product->price;
            }elseif($item->options->size == "medium"){
                $cenaPriloga = $item->price - $product->price2;
            }elseif($item->options->size == "large"){
                $cenaPriloga = $item->price - $product->price3;
            }
            $price = $product->price3 + $cenaPriloga;
        }elseif($request->size == 'standard'){
            $cenaPriloga = $item->price - $product->price;
            $price = $product->price + $cenaPriloga;
        }elseif($request->size == 'pene'){
            $cenaPriloga = $item->price - $product->price;
            $price = $product->price + $cenaPriloga;
        }elseif($request->size == 'fusili'){
            $cenaPriloga = $item->price - $product->price;
            $price = $product->price + $cenaPriloga;
        }elseif($request->size == '200g'){
            if($item->options->size == "200g"){
                $cenaPriloga = $item->price - $product->price;
            }elseif($item->options->size == "300g"){
                $cenaPriloga = $item->price - $product->price2;
            }elseif($item->options->size == "500g"){
                $cenaPriloga = $item->price - $product->price3;
            }elseif($item->options->size == "1kg"){
                $cenaPriloga = $item->price - $product->price4;
            }
            $price = $product->price + $cenaPriloga;
        }elseif($request->size == '300g'){
            if($item->options->size == "200g"){
                $cenaPriloga = $item->price - $product->price;
            }elseif($item->options->size == "300g"){
                $cenaPriloga = $item->price - $product->price2;
            }elseif($item->options->size == "500g"){
                $cenaPriloga = $item->price - $product->price3;
            }elseif($item->options->size == "1kg"){
                $cenaPriloga = $item->price - $product->price4;
            }
            $price = $product->price2 + $cenaPriloga;
        }elseif($request->size == '500g'){
            if($item->options->size == "200g"){
                $cenaPriloga = $item->price - $product->price;
            }elseif($item->options->size == "300g"){
                $cenaPriloga = $item->price - $product->price2;
            }elseif($item->options->size == "500g"){
                $cenaPriloga = $item->price - $product->price3;
            }elseif($item->options->size == "1kg"){
                $cenaPriloga = $item->price - $product->price4;
            }
            $price = $product->price3 + $cenaPriloga;
        }elseif($request->size == '1kg'){
            if($item->options->size == "200g"){
                $cenaPriloga = $item->price - $product->price;
            }elseif($item->options->size == "300g"){
                $cenaPriloga = $item->price - $product->price2;
            }elseif($item->options->size == "500g"){
                $cenaPriloga = $item->price - $product->price3;
            }elseif($item->options->size == "1kg"){
                $cenaPriloga = $item->price - $product->price4;
            }
            $price = $product->price4 + $cenaPriloga;
        }else{
            $cenaPriloga = $item->price - $product->price;
            $price = $product->price + $cenaPriloga;
        }
        //dd($request->size);
        if($request->size == null){
            $request->size = 'standard';
        }
        Cart::update($id, ['qty'=>$request->qty, 'price' => $price, 'options'=> ['size'=> $request->size, 'prilozi' => $item->options->prilozi]]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back();
    }
}
