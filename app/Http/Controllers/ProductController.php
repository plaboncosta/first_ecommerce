<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$specification = $product->specifications()->first();
    	return view('layouts.frontend.product', compact('product', 'specification'));
    }
}
