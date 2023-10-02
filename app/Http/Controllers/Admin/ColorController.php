<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ColorFormRequest;
class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.colors.index',compact('colors'));
    }
    public function create()
    {
        return view('admin.colors.create');
    }
    public function store(ColorFormRequest $request)
    {
        $validatedData = $request->validated();

        $colors = new Color;

        $colors->name = $validatedData['name'];
        $colors->code = $validatedData['code'];
        $colors->status = $request->status == true ? '1':'0';
        $colors->save();
        return redirect('admin/colors')->with('message','Color add successfully');
    }
    public function edit(Color $colors)
    {
        return view('admin.colors.edit',compact('colors'));
    }
    public function update(ColorFormRequest $request,$colors)
    {
        $validatedData = $request->validated();
        $colors = Color::findOrFail($colors);

        $colors->name = $validatedData['name'];
        $colors->code = $validatedData['code'];
        $colors->status = $request->status == true ? '1':'0';
        $colors->update();
        return redirect('admin/colors')->with('message','Color Update successfully');
    }
    public function destroy($color_id)
    {
        $color = Color::findOrFail($color_id);
        $color->delete();
        return redirect('admin/colors')->with('message','Color Deleted Successfully');
    }
}
