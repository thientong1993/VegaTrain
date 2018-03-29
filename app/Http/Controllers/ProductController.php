<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //function product
    public function product(){
        return view('products.product');
    }

    //function datail product
    public function datailproduct(){
        return view('products.datailproduct');
    }
}
