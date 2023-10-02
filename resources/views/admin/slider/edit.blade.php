@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif


        <div class="card">
            <div class="card-header">
                <h3>Edit Slider
                    <a href="{{ url('admin/sliders/') }}" class="btn btn-danger btn-sm float-end">
                        BACK
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/sliders/'.$sliders->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label >Title</label>
                        <input type="text" name="title" value="{{ $sliders->title }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label >Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ $sliders->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label >Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset("$sliders->image") }}" style="width:70px; height:70px;" alt="Slider">
                    </div>
                    <div class="mb-3">
                        <label >Status</label> <br> 
                        <input type="checkbox" name="status" {{ $sliders->status == '1' ? 'checked':'' }} > checked = hidden,unchecked = visible
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
