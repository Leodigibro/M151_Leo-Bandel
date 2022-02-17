<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        dd(\App\Http\Controllers\ProductController)
    }

    public function product($id) {
        dd($id);
    }
}
