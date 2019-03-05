<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\Http\Requests\CheckoutRequest;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.frontend.checkout');
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
    public function store(CheckoutRequest $request)
    {
        if(Cart::count() > 0)
        {
            $contents = Cart::content()->map(function($item){
                  return $item->model->slug . ', ' . $item->qty;
            })->values()->toJson();

            try {
                $charge = Stripe::charges()->create([
                    'amount' => Cart::total(),
                    'currency' => 'BDT',
                    'source' => $request->stripeToken,
                    'description' => 'Order',
                    'receipt_email' => $request->email,
                    'metadata' => [
                        'contents' => $contents,
                        'quantity' => Cart::count(),
                    ],
                ]);

                // Session::put('payment_message', 'You have paid successfully');
                Toastr::success('success', 'You have paid successfully');
                Cart::destroy();
                return redirect()->route('welcome');
            } catch (CardErrorException $e) {
                Toastr::error($e->getMessage(), 'Access denied!');
                return redirect()->back();
            }
        }
        else {
            Toastr::error('You should choose a product first!', 'Access denied!');
            return redirect()->back();
        }

        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
