<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
    public function Warenkorb($id, Request $request) 
    {   
        $increment = 1;
        if ($request->isMethod('POST')) 
        {
            $increment = $request->all()['amount'];
        }
        session()->increment('product' . $id, $increment);
        return redirect('/products');
    }
    public function ShowWarenkorb() 
    {   
        $allproducts = [];
        array_push($allproducts, 0);
        foreach (Product::get() as $item) 
        {
            if (session()->exists('product' . $item['id'])) 
            {
                array_push($allproducts, session()->get('product' . $item['id']));
            } 
            else 
            {
                array_push($allproducts, 0);
            }
        }
        return view('Warenkorb', [
            'products' => Product::get(),
            'amount' => $allproducts
        ]);
    }
}
