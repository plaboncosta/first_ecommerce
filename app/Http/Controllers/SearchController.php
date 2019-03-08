<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $query = request()->input('name');
        $products = Product::where('name', 'LIKE', "%$query%")
                            ->orWhere('description', 'LIKE', "%$query%")
                            ->paginate(10);
        return view('layouts.frontend.search', compact('products'));
    }


    public function search(Request $request)
    {
        
    }
}
