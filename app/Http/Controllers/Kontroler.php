<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;

class Kontroler extends Controller
{

    public function index(){
    	return view('layout.index');
    }

    public function menu(){
    	return view('layout.menu');
    }

    public function menu2(){
        $cat = Category::all();
        $pro = Product::all();
        $vel = "1";
        return view('layout.menu2')->withCategories($cat)->withProducts($pro)->withTest($vel);
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
