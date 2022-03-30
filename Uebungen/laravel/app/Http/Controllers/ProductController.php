<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list() 
    {
        // dd(\App\Http\Controllers\ProductController);
        // die('in here!');
        $products = \App\Models\Product::all();
        return view('products', ['products' => $products]);
    }

    public function detail($id) 
    {   
        // dd($id);
        $product = \App\Models\Product::find($id);
        return view("product", ['product' => $product]);
    }
}
