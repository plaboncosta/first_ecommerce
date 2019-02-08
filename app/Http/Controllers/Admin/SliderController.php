<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,bmp',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if($image)
        {
            // Create unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Check if Slider is exists
            if(!Storage::disk('public')->exists('slider'))
            {
                Storage::disk('public')->makeDirectory('slider');
            }

            // Resize slider image and upload
            $sliderImage = Image::make($image)->resize(624, 517)->save($imagename);
            Storage::disk('public')->put('slider/'. $imagename, $sliderImage);
        }
        else {
            $imagename = 'default.png';
        }

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->image = $imagename;
        $slider->save();
        
        Toastr::success('Slider Created Sucessfully', 'Sucess!');
        return redirect()->route('admin.slider.index');
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
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
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
            'title' => 'required',
            'image' => 'image',
        ]);
        
        $slider = Slider::findOrFail($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if($image)
        {
            // Create Image name
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Check if Slider is folder is exists
            if(!Storage::disk('public')->exists('slider'))
            {
                Storage::disk('public')->makeDirectory('slider');
            }

            // Delete Old Slider image
            if(Storage::disk('public')->exists('slider/') . $slider->image)
            {
                Storage::disk('public')->delete('slider/' . $slider->image);
            }


            // Resize slider image and upload
            $sliderImage = Image::make($image)->resize(624, 517)->save($imagename);
            Storage::disk('public')->put('slider/' . $imagename, $sliderImage);
        }
        else {
            $imagename = $slider->image;
        }

        
        // Push all data into Sliders Table
        $slider->title = $request->title;
        $slider->image = $imagename;
        $slider->save();
        Toastr::success('Slider Updated Sucessfully', 'Sucess!');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }

    public function delete($id)
    {
        $slider = Slider::findOrFail($id);

        // Delete Slide r Old Image
        if(Storage::disk('public')->exists('slider/' . $slider->image))
        {
            Storage::disk('public')->delete('slider/' . $slider->image);
        }

        $slider->delete();

        Toastr::success('Slider Deleted Sucessfully', 'Sucess!');
        return redirect()->back();
    }
}
