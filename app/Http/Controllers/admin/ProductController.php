<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    //
    public function showProducts() {
       $prodictsList = Product::all();
       return view('backend.product.product-list', compact('prodictsList'));
    }
}
