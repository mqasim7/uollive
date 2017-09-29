@extends('admin.layout.adminmaster')

@section('title')
    Admin Profile
@endsection
@section('adminname')
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="{{asset('uploads/profileimages/'.$admin->profileimage)}}"
                 style="  margin-top: -5px;margin-right: 5px;  float: left;width: 30px;  height: 30px; border-radius: 50%">
            {{$admin->name}} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{url('admin/profile/'. $admin->id)}}" class="fa fa-btn fa-user">
                    Profile
                </a>
                <a href="{{ url('/admin/logout') }}" class="fa fa-btn fa-sign-out"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endsection

@section('profile-active')
    active
@endsection

@section('profile')
    {{url('admin/profile/'. $admin->id)}}
@endsection

@section('tablelist')
    {{route('tablelist', $admin->id )}}
@endsection





@section('body')
    {{-- <div class="container">
         <div class="row">
             <div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{-- <div class="panel-heading">
         <b>{{$admin->name}}'s Profile</b></div>
         <div class="panel-body">
             <img src="{{asset('uploads/profileimages/'.$admin->profileimage)}}" style="width:150px; height: 150px; float: left;  margin-right: 25px; ">
             {!!Form::open(['route' => ['profile',$admin->id],'data-parsley-validate','files'=>'true'])!!}
             <div class="form-group">
                 <label for="filename" class="btn btn-sm btn-success">Choose Image</label>
                 {{Form::file('filename')}}
             </div>
             <button type="submit" class="pull-right btn btn-sm btn-primary">Upload</button>
             {!! Form::close() !!}
         </div>
          </div>
                 </div>
</div>
</div>--}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Profile</h4>
                            <p class="category">Complete your profile</p>
                        </div>
                        <div class="card-content">
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Company (disabled)</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fist Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Adress</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Postal Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <div class="form-group label-floating">
                                                <label class="control-label"> Lamborghini Mercy, Your chick she so
                                                    thirsty, I'm in that two seat Lambo.</label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <img class="img" src="{{asset('uploads/profileimages/'.$admin->profileimage)}}"/>
                        </div>

                        <div class="content">
                            <h6 class="category text-gray">Admin</h6>
                            <h4 class="card-title">{{ $admin->name }}</h4>
                            {!!Form::open(['route' => ['profile',$admin->id],'data-parsley-validate','files'=>'true'])!!}
                            <div class="form-group">
                                <label for="filename" class="btn btn-sm btn-success">Choose Image</label>
                                {{Form::file('filename')}}
                            </div>
                            <button type="submit" class="btn btn-primary btn-round">Upload</button>
                            {!! Form::close() !!}
                            {{--<p class="card-content">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>--}}
                            {{-- <a href="#" class="btn btn-primary btn-round">Upload</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
