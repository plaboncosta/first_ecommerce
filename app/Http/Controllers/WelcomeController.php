<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;


// use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $products = Product::inRandomOrder()->get();
        return view('welcome', compact('sliders', 'products'));
    }   
}
