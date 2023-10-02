<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Support\Str;
use App\Models\Category;


class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
    }
    public function create()
    {
        $categories = Category::where('status','0')->get();
        return view('admin.brand.create',compact('categories'));
    }
    public function store(BrandFormRequest $request)
    {
        $validatedData = $request->validated();
        
        $brand = new Brand;
        $brand->name = $validatedData['name'];
        $brand->slug = Str::slug($validatedData['slug']);
        $brand->status = $request->status == true ? '1':'0';
        $brand->category_id = $validatedData['category_id'];
        $brand->save();

        return redirect('admin/brand')->with('message','Thêm Brand Thành Công');
    }
    public function edit(Brand $brand)
    {
        $categories = Category::where('status','0')->get();
        return view('admin.brand.edit', compact('brand','categories'));
    }
    public function update(BrandFormRequest $request, $brand)
    {
        $validatedData = $request->validated();

        $brand = Brand::findOrFail($brand);

        $brand->name = $validatedData['name'];
        $brand->slug = Str::slug($validatedData['slug']);

        $brand->status = $request->status == true ? '1':'0';
        $brand->category_id = $validatedData['category_id'];
        $brand->update();

        return redirect('admin/brand')->with('message','Cập Nhật Brand Thành Công');
    }
}
