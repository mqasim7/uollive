@extends('imagemaster')

@section('body')
    {!!Form::open(['route' => 'category.store','data-parsley-validate','files'=>'true'])!!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Enter Category Name']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class' => 'form-control','placeholder'=>'Enter Description']) !!}
    </div>
    <div class="form-group">
        <label for="image">Image File</label>
        {{Form::file('image')}}
       {{-- <input type="file" name="photos[]" multiple />--}}
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
    {!! Form::close() !!}
@stop