@extends('admin.layout.loginmaster')


{{--@section('content')
{{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">--}}
@section('form')
    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ url('/admin/password/reset') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
    </form>--}}
    <div class="card card-signup">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}
            <div class="header header-primary text-center">
                <h4>Admin Sign In</h4>
                <div class="social-line">
                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
            <div class="content">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                        <input type="email" class="form-control" placeholder="Email..." name="email"
                               value="{{ old('email') }}" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                        <input type="password" placeholder="Password..." class="form-control" name="password"/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <!-- If you want to add a checkbox to this form, uncomment this code

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="optionsCheckboxes" checked>
                        Subscribe to newsletter
                    </label>
                </div> -->
            </div>
            <div class="footer text-center">
                <button type="submit" class="btn btn-simple btn-primary btn-lg">
                    Login
                </button>
                {{-- <a href="#pablo" class="btn btn-simple btn-primary btn-lg">Get Started</a>--}}
            </div>
        </form>
    </div>
@endsection
