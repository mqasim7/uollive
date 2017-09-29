@extends('layouts.loginmaster')

@section('form')
    {{--<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">--}}
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url({{ URL::asset('loginassets/img/uol.jpg')}})"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="{{URL::asset("adminassets/img/uol-logo.png")}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}"
                                           placeholder="Email..." required
                                           autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="Password..."
                                       required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                                Login
                            </button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="#pablo" class="link">Create Account</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Need Help?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
         {{ csrf_field() }}

         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
             <label for="email" class="col-md-4 control-label">E-Mail Address</label>

             <div class="col-md-6">
                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                        autofocus>

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
                 <input id="password" type="password" class="form-control" name="password" required>

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
                         <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                     </label>
                 </div>
             </div>
         </div>

         <div class="form-group">
             <div class="col-md-8 col-md-offset-4">
                 <button type="submit" class="btn btn-primary">
                     Login
                 </button>

                 <a class="btn btn-link" href="{{ route('password.request') }}">
                     Forgot Your Password?
                 </a>
             </div>
         </div>
     </form>--}}
    {{--          </div>
          </div>
      </div>
  </div>
</div>--}}
@endsection
