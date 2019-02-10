<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Specification;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specifications = Specification::latest()->get();
        return view('admin.specification.index', compact('specifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.specification.create', compact('products'));
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
            'product' => 'required',
            'Color' => 'required',
            'Network' => 'required',
            'Dimensions' => 'required',
            'Weight' => 'required',
            'Build' => 'required',
            'Sim' => 'required',
            'Display' => 'required',
            'Size' => 'required',
            'Resolution' => 'required',
            'Multitouch' => 'required',
            'Platform' => 'required',
            'Chipset' => 'required',
            'CPU' => 'required',
            'GPU' => 'required',
            'Memory' => 'required',
            'Internal' => 'required',
            'Main_Camera' => 'required',
        ]);


        $specification = new Specification();
        $specification->product_id = $request->product;
        $specification->Color = $request->Color;
        $specification->Network = $request->Network;
        $specification->Dimensions = $request->Dimensions;
        $specification->Weight = $request->Weight;
        $specification->Build = $request->Build;
        $specification->Sim = $request->Sim;
        $specification->Display = $request->Display;
        $specification->Size = $request->Size;
        $specification->Resolution = $request->Resolution;
        $specification->Multitouch = $request->Multitouch;
        $specification->Platform = $request->Platform;
        $specification->Chipset = $request->Chipset;
        $specification->CPU = $request->CPU;
        $specification->GPU = $request->GPU;
        $specification->Memory = $request->Memory;
        $specification->Internal = $request->Internal;
        $specification->Main_Camera = $request->Main_Camera;
        $specification->save();

        Toastr::success('Product Specification Created Successfully', 'Success!');
        return redirect()->route('admin.specification.index');
        
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
        $products = Product::all();
        $specification = Specification::findOrFail($id);
        return view('admin.specification.edit', compact('products', 'specification'));
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
        $this->validate($request, [
            'product' => 'required',
            'Color' => 'required',
            'Network' => 'required',
            'Dimensions' => 'required',
            'Weight' => 'required',
            'Build' => 'required',
            'Sim' => 'required',
            'Display' => 'required',
            'Size' => 'required',
            'Resolution' => 'required',
            'Multitouch' => 'required',
            'Platform' => 'required',
            'Chipset' => 'required',
            'CPU' => 'required',
            'GPU' => 'required',
            'Memory' => 'required',
            'Internal' => 'required',
            'Main_Camera' => 'required',
        ]);


        $specification = Specification::findOrFail($id);
        $specification->product_id = $request->product;
        $specification->Color = $request->Color;
        $specification->Network = $request->Network;
        $specification->Dimensions = $request->Dimensions;
        $specification->Weight = $request->Weight;
        $specification->Build = $request->Build;
        $specification->Sim = $request->Sim;
        $specification->Display = $request->Display;
        $specification->Size = $request->Size;
        $specification->Resolution = $request->Resolution;
        $specification->Multitouch = $request->Multitouch;
        $specification->Platform = $request->Platform;
        $specification->Chipset = $request->Chipset;
        $specification->CPU = $request->CPU;
        $specification->GPU = $request->GPU;
        $specification->Memory = $request->Memory;
        $specification->Internal = $request->Internal;
        $specification->Main_Camera = $request->Main_Camera;
        $specification->save();

        Toastr::success('Product Specification Updated Successfully', 'Success!');
        return redirect()->route('admin.specification.index');
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



    public function delete($id)
    {
        Specification::findOrFail($id)->delete();

        Toastr::success('Product Specification Deleted Successfully', 'Success!');
        return redirect()->back();
    }
}
