@extends('imagemaster')

@section('body')
    <div class="row">
            <div class="col-md-12 text-center" >
                <a href="{{ url('/category/create') }}" class="btn btn-primary" role="button">
                    Add New Image
                </a>
            </div>
        @foreach($categories as $category)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="{{asset('uploads/'.$category->filename)}}" />
                </div>
            </div>
        @endforeach
    </div>
@stop