<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = Product::all();
        $cat = Category::all();
        return view('admin.product.index')->withProducts($pro)->withCategories($cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::pluck('name', 'id');
        return view('admin.product.create')->withCategories($cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');

        //validacija
        $this->validate($request, [
                'name' => 'required',
                'price' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:10240',
                'category_id' => 'required'
            ]);

        //slika
        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->price2 = $request->price2;
        $product->price3 = $request->price3;
        $product->image = $imageName;
        $product->category_id = $request->category_id;
        $product->save();
        
        //Product::create($request->all());
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jelo = Product::find($id);
        $cats = Category::pluck('name', 'id');

        //dd($jelo);

        return view('admin.product.edit')->withProizvod($jelo)->withCategories($cats);
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
    public function update(Request $request, $id)
    {
        //validacija
        $this->validate($request, [
                'name' => 'required',
                'price' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:10240',
                'category_id' => 'required'
            ]);

        //dd('prosla validacija');
        $imageName='';

        //slika
        if($request->image != null){
        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
            }
        }

        //update
        $proizvod = Product::find($id);

        $proizvod->name = $request->name;
        $proizvod->description = $request->description;
        $proizvod->price = $request->price;
        $proizvod->price2 = $request->price2;
        $proizvod->price3 = $request->price3;
        $proizvod->price4 = $request->price4;
        if($imageName != null){
            $proizvod->image = $imageName;
        }
        $proizvod->category_id = $request->category_id;
        $proizvod->save();

        return redirect()->route('admin.product.index');
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
