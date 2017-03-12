<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CheckoutController extends Controller
{
    public function step1(){

        return redirect()->route('checkout.shipping');
    }

    public function shipping()
    {
        return view('layout.shipping-info');
    }
}
