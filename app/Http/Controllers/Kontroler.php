<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Kontroler extends Controller
{

    public function index(){
    	return view('layout.index');
    }

    public function menu(){
    	return view('layout.menu');
    }

    public function contact(){
    	return view('layout.contact');
    }

    public function gallery(){
    	return view('layout.gallery');
    }

    public function online(){
        return view('layout.online');
    }

}
