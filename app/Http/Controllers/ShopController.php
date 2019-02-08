<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
        return view('layouts.frontend.shop', compact('categories'));
    }
}
