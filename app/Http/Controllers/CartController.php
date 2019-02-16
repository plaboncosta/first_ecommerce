<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.frontend.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required|numeric|between:1,5'
        ]);
        $duplicates = Cart::search(function($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->id; 
        });


        if($duplicates->isNotEmpty())
        {
            Toastr::error('This Product is already exist in your cart ', 'Access denied!');
            return redirect()->route('cart.index');
        }

        Cart::add($request->id, $request->name, $request->quantity, $request->present_price)->associate('App\Product');

        Toastr::success('Product added in your cart successfully', 'Success!');
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5',
        ]);

        if($validator->fails())
        {
            Toastr::error('Quantity must be between 1 to 5', 'Access denied!');
            return response()->json(['success' => false]);
        }
        Cart::update($id, $request->quantity);

        Toastr::success('Quantity updated successfully', 'Success!');
        return response()->json(['success' => false], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        Toastr::success('Product removed from your cart successfully', 'Success!');
        return redirect()->back();
    }   
}
