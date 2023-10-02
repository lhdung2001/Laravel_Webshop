@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Brand 
                    <a href="{{ url('admin/brand ') }}" class="btn btn-primary btn-sm float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/brand/'.$brand->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $brand->name }}" class="form-control" />
                            @error('name') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" value="{{ $brand->slug }}"  class="form-control" />
                            @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Select Category</label>
                            <select name="category_id" required class="form-control">
                                    @foreach ($categories as $cateItem)
                                    <option value="{{ $cateItem->id }}" {{ $cateItem->id == $brand->category_id ? 'selected':'' }} >
                                        {{ $cateItem->name }}</option>
                                        
                                    @endforeach
                            </select>
                            @error('category_id') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label> <br>
                            <input type="checkbox" name="status" {{ $brand->status == '1' ? 'checked':'' }} />
                            @error('status') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                           <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection
