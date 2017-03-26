<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;
use App\Prilog;

class Kontroler extends Controller
{

    public function index(){
    	return view('layout.index');
    }

    public function menu(){
    	//return view('layout.menu');
        $cat = Category::all();
        $pro = Product::all();
        $pri = Prilog::orderBy('price', 'desc')->get();
        $vel = "1";
        return view('layout.menu2')->withCategories($cat)->withProducts($pro)->withTest($vel)->withPrilozi($pri);
    }

    public function menu2(){
        $cat = Category::all();
        $pro = Product::all();
        $pri = Prilog::orderBy('price', 'desc')->get();
        //$vel = "1";


        $odobrenoNarucivanje = false;
        $dayofweek = date('l');
        //dd($dayofweek);
        $sat = date('H');
        $satInt = intval($sat);
        $min = date('i');
        $minInt = intval($min);

        //dd($satInt);
        $vreme1 = 9;
        $vreme2 = 16;
        $vreme3 = 22;
        $vremeMin3 = 45;


        if($dayofweek == 'Sunday'){
            if($satInt < $vreme2){
                $odobrenoNarucivanje = false;
            }
            elseif($satInt >= $vreme3){
                if($minInt > $vremeMin3){
                $odobrenoNarucivanje = false;
                }
            }else{
                $odobrenoNarucivanje = true;
            }
        }else{
            if($satInt < $vreme1){
                $odobrenoNarucivanje = false;
            }
            elseif($satInt >= $vreme2){
                if($minInt > $vremeMin3){
                $odobrenoNarucivanje = false;
                }
            }else{
                $odobrenoNarucivanje = true;
            }
        }


        //,.....
        //dd($dayofweek);
        return view('layout.menu2')->withCategories($cat)->withProducts($pro)->withPrilozi($pri)->withOdobreno($odobrenoNarucivanje);
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
