<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
    	if(request()->category)
    	{
    		$products = Product::with('category')->whereHas('category', function($query){
    			$query->where('slug', request()->category);
    		});
    		$categories = Category::all();
	    	$compare_products = Product::where('compare', 1)->get();
	    	$categoryName = Category::all()->where('slug', request()->category)->first()->name;
    	}
    	else
    	{
    		$categories = Category::all();
	    	$compare_products = Product::where('compare', 1)->get();
	    	$products = Product::take(12);
	    	$categoryName = 'Featured';
    	}

    	if(request()->sort == 'low_high')
    	{
    		$products = $products->orderBy('present_price', 'asc')->paginate(8);
    	}
    	elseif(request()->sort == 'high_low')
    	{
    		$products = $products->orderBy('present_price', 'desc')->paginate(8);
    	}
        else
        {
            $products = $products->paginate(8);
        }
    	return view('layouts.frontend.shop', compact('categories', 'compare_products', 'products', 'categoryName'));
    	
    }
}
