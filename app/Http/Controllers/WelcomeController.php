<?php

namespace App\Http\Controllers;

use App\Slider;


// use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('welcome', compact('sliders'));
    }   
}
