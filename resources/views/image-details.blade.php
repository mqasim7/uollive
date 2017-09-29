@extends('imagemaster')

@section('body')
        <img src="{{ asset('uploads/'.$category->image) }}" height="150" />
        <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $category->name }}</p>
            </div>
        </div>
        <a href="{{ route('admin.home') }}" class="btn btn-success">Back</a>
        <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
@stop