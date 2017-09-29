@extends('imagemaster')

@section('body')
    {!!Form::model($category,['method'=>'patch','data-parsley-validate', 'files'=>true,'route' => ['category.update',$category->id]])!!}
    <img src="{{ asset('uploads/'.$category->image) }}" height="150" />
    <div class="form-group">
        {!! Form::label('image', 'Image file:') !!}
        {{Form::file('image')}}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',$category->name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',$category->description,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <a href="{{ route('admin.home') }}" class="btn btn-success">Back</a>
        {!!Form::submit('Update',['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}


@stop