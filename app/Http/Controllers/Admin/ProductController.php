<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view ('admin.product.create', compact('categories'));
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
            'name' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,bmp',
            'multiple_image' => 'required',
            'present_price' => 'required',
            'previous_price' => 'required',
            'featured_image' => 'required',
            'description' => 'required',
        ]);



        // Display Image
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if($image)
        {
            // Create unique Image name
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Check if Product display folder is exists
            if(!Storage::disk('public')->exists('product/display'))
            {
                Storage::disk('public')->makeDirectory('product/display');
            }

            // Resize Image and Upload to database
            $displayImage = Image::make($image)->save($imagename);
            Storage::disk('public')->put('product/display/'. $imagename, $displayImage);
        }
        else
        {
            $imagename = 'default.png';
        }



        // Checking Image
        $get_multiple_image = $request->hasFile('multiple_image');
        if($get_multiple_image)
        {
            foreach ($request->multiple_image as $single_multiple_image) {

                // Create Unique Multiple image name
                $currentDate = Carbon::now()->toDateString();
                $multiple_image_name = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $single_multiple_image->getClientOriginalExtension();


                // Check if Product Checking folder is exists
                if(!Storage::disk('public')->exists('product/checking'))
                {
                    Storage::disk('public')->makeDirectory('product/checking');
                }


                // Resize Multiple Image and Upload to database
                $multiple_checking_image = Image::make($single_multiple_image)->save($multiple_image_name);
                Storage::disk('public')->put('product/checking/'. $multiple_image_name, $multiple_checking_image);

                $checking_image_data[] =  $multiple_image_name;
            }
        }
        else
        {
            $multiple_image_name = 'default.png';
            $checking_image_data[] = $multiple_image_name;
        }


        // Featured Image
        $get_featured_image = $request->hasFile('featured_image');
        if($get_featured_image)
        {
            foreach ($request->featured_image as $single_featured_image) {

                // Create Unique Featured image name
                $currentDate = Carbon::now()->toDateString();
                $multiple_featured_image_name = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $single_featured_image->getClientOriginalExtension();


                // Check if Product Featured folder is exists
                if(!Storage::disk('public')->exists('product/featured'))
                {
                    Storage::disk('public')->makeDirectory('product/featured');
                }


                // Resize Multiple Image and Upload to database
                $multiple_featured_image = Image::make($single_featured_image)->save($multiple_featured_image_name);
                Storage::disk('public')->put('product/featured/'. $multiple_featured_image_name, $multiple_featured_image);

                $featured_image_data[] =  $multiple_featured_image_name;
            }
        }
        else
        {
            $multiple_featured_image_name = 'default.png';
            $featured_image_data[] = $multiple_featured_image_name;
        }
        



        // Send All Data To Database
        $product = new Product();
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category;
        $product->image = $imagename;
        $product->multiple_image = json_encode($checking_image_data);
        $product->present_price = $request->present_price;
        $product->previous_price = $request->previous_price;
        $product->featured_image = json_encode($featured_image_data);
        $product->description = $request->description;

        if($request->stock == 'on')
        {
            $product->stock = 1;
        }
        else
        {
            $product->stock = 0;
        }

        $product->save();

        Toastr::success('Product Created Successfully', 'Success!');
        return redirect()->route('admin.product.index');

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
