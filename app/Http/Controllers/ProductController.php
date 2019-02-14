<?php

namespace App\Http\Controllers;

use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$specification = $product->specifications()->first();
    	return view('layouts.frontend.product', compact('product', 'specification'));
    }



    public function compare($slug)
    {
    	$compare = Product::where('slug', $slug)->update([
    		'compare' => 1,
    	]);

    	Toastr::success('You have successfully added your product in comparing list', 'Success!');
    	return redirect()->back();

    }


    public function uncompare($slug)
    {
    	$compare = Product::where('slug', $slug)->update([
    		'compare' => 0,
    	]);

    	Toastr::success('You have successfully uncompared your product from comparing list', 'Success!');
    	return redirect()->back();
    }
}
