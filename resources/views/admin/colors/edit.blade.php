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
                <h3>Edit Colors
                    <a href="{{ url('admin/colors/create') }}" class="btn btn-danger btn-sm float-end">
                        BACK
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/colors/'.$colors->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label >Color Name</label>
                        <input type="text" name="name" value="{{ $colors->name}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label >Color Code</label>
                        <input type="text" name="code" value="{{ $colors->code}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label >Status</label> <br> 
                        <input type="checkbox" name="status" {{ $colors->status ? 'checked':''}} > checked = hidden,unchecked = visible
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
