@extends('subcategories.masterform')

@section('body')
    {{-- {!!Form::open(['route' => 'category.store','data-parsley-validate','files'=>'true'])!!}
     <div class="form-group">
         {!! Form::label('name', 'Name:') !!}
         {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Enter Category Name']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('description', 'Description:') !!}
         {!! Form::text('description',null,['class' => 'form-control','placeholder'=>'Enter Description']) !!}
     </div>
     <div class="form-group">

     </div>
     <button type="submit" class="btn btn-primary">Upload</button>
     {!! Form::close() !!}--}}

    <div class="wizard-container">
        <div class="card wizard-card" data-color="red" id="wizard">
            <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

            <div class="wizard-header">
                <h3 class="wizard-title">
                    Create SubCategory
                </h3>
                <h5>SubCategory</h5>
            </div>
            <div class="wizard-navigation">
                <ul>
                    <li><a href="#details" data-toggle="tab">Info</a></li>
                    <li><a href="#captain" data-toggle="tab">Images</a></li>
                    {{--<li><a href="#description" data-toggle="tab">Extra Details</a></li>--}}
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="details">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="info-text"> Let's start with the basic details.</h4>
                        </div>
                        <div class="col-sm-6">
                            {!!Form::open(['route' => 'subcategory.store'])!!}
                            <div class="input-group">
													<span class="input-group-addon">
														{{--<i class="material-icons">email</i>--}}
													</span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Name</label>
                                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="input-group">
													<span class="input-group-addon">
														{{--<i class="material-icons">lock_outline</i>--}}
													</span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Description</label>
                                    {!! Form::textarea('description',null,['class'=>'form-control', 'rows' => 5]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Category</label>
                                <select name="category_id" class="form-control">
                                    <option disabled selected></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--<div class="form-group label-floating">
                                <label class="control-label">Daily Budget</label>
                                <select class="form-control">
                                    <option disabled="" selected=""></option>
                                    <option value="Afghanistan"> < $100 </option>
                                    <option value="Albania"> $100 - $499 </option>
                                    <option value="Algeria"> $499 - $999 </option>
                                    <option value="American Samoa"> $999+ </option>
                                </select>
                            </div>--}}
                        </div>
                    </div>
                    <div class="wizard-footer">
                        <div class="pull-right">
                            {{--<input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next'
                                   value='Next'/>--}}
                            {!! Form::submit('Next', ['class' => 'btn btn-next btn-fill btn-danger btn-wd']) !!}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="captain">
                    <h4 class="info-text">What type of room would you want? </h4>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-radio" rel="tooltip"
                                     title="This is good if you travel alone.">
                                    <input type="radio" name="job" value="Design">
                                    <div class="icon">
                                        <i class="material-icons">weekend</i>
                                    </div>
                                    <h6>Single</h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-radio" rel="tooltip"
                                     title="Select this room if you're traveling with your family.">
                                    <input type="radio" name="job" value="Code">
                                    <div class="icon">
                                        <i class="material-icons">home</i>
                                    </div>
                                    <h6>Family</h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-radio" rel="tooltip"
                                     title="Select this option if you are coming with your team.">
                                    <input type="radio" name="job" value="Code">
                                    <div class="icon">
                                        <i class="material-icons">business</i>
                                    </div>
                                    <h6>Business</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="tab-pane" id="description">
                    <div class="row">
                        <h4 class="info-text"> Drop us a small description.</h4>
                        <div class="col-sm-6 col-sm-offset-1">
                            <div class="form-group">
                                <label>Room description</label>
                                <textarea class="form-control" placeholder="" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Example</label>
                                <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
            <div class="wizard-footer">
                <div class="pull-right">
                    {{-- <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next'/>--}}
                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish'
                           value='Finish'/>
                </div>
                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous'
                           value='Previous'/>

                    {{--<div class="footer-checkbox">
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                </label>
                                Subscribe to our newsletter
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@stop