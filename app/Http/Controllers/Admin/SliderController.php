<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderFormRequest;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{
    public function index() {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }
    public function create() {
        return view('admin.slider.create');
    }
    public function store(SliderFormRequest $request)
    {
        $validatedData = $request->validated();     
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'. $ext;
            $file->move('uploads/sliders/',$filename);
            $validatedData['image'] = "uploads/sliders/$filename";
        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        Slider::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            'status' => $validatedData['status'],
        ]);

        return redirect('admin/sliders')->with('message','Slider added successfully');
    }
    public function edit(Slider $sliders) {
        return view('admin.slider.edit',compact('sliders'));
    }

    public function update(SliderFormRequest $request, Slider $sliders) {
        $validatedData = $request->validated();     
        
        if ($request->hasFile('image')) {

            $description = $sliders->image;
            if (File::exists($description)) {
                File::delete($description);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'. $ext;
            $file->move('uploads/sliders/',$filename);
            $validatedData['image'] = "uploads/sliders/$filename";
        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        Slider::where('id',$sliders->id)->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'] ?? $sliders->image,
            'status' => $validatedData['status'],
        ]);

        return redirect('admin/sliders')->with('message','Slider update successfully');
    }
    public function destroy(Slider $sliders)
    {   
        if ($sliders->count() > 0) {
            $description = $sliders->image;
            if (File::exists($description)) {
                File::delete($description);
            }
            $sliders->delete();
            return redirect('admin/sliders')->with('message','Slider Delete successfully');
        }
        return redirect('admin/sliders')->with('message','Something went Wrong');


    }
}
