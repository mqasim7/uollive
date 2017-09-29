<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset("adminassets/img/uol-logo.png")}}"/>
    <link rel="icon" type="image/png" href="{{URL::asset("adminassets/img/uol-logo.png")}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('adminassets/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Bootstrap for dropzone     -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="{{URL::asset('adminassets/css/material-dashboard.css')}}" rel="stylesheet"/>

    <!--  Table CSS    -->
@yield('tablecss')

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{URL::asset('adminassets/css/demo.css')}}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet"
          type="text/css">



</head>

<body>

<div class="wrapper">

    <div class="sidebar" data-color="purple" data-image="{{URL::asset('adminassets/img/sidebar-1.jpg')}}">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
            <a href="#" class="simple-text">
                Uol Live
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="@yield('dashboard-active')">
                    <a href="{{route('admin.home')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="@yield('profile-active')">
                    <a href="@yield('profile')">
                        <i class="material-icons">person</i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="@yield('tablelist-active')">
                    <a href="@yield('tablelist')">
                        <i class="material-icons">content_paste</i>
                        <p>Table List</p>
                    </a>
                </li>
                <li class="">
                    <a href="typography.html">
                        <i class="material-icons">library_books</i>
                        <p>Typography</p>
                    </a>
                </li>
                <li class="">
                    <a href="icons.html">
                        <i class="material-icons">bubble_chart</i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="material-icons">location_on</i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="material-icons text-gray">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">

                    <a class="navbar-brand">Admin's Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        @yield('adminname')
                        {{-- <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 @yield('adminname') <span class="caret"></span>
                             </a>

                             <ul class="dropdown-menu" role="menu">
                                 <li>
                                     <a href="{{url('admin/profile/')}}" class="fa fa-btn fa-user">
                                         Profile
                                     </a>
                                     <a href="{{ url('/admin/logout'.) }}" class="fa fa-btn fa-sign-out"
                                        onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                         Logout
                                     </a>

                                     <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                     </form>
                                 </li>
                             </ul>
                         </li>--}}

                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            @yield("body")
        </div>

        <footer class="footer">

        </footer>
    </div>
</div>
</body>

<!--   Core JS Files   -->
<script src="{{URL::asset("adminassets/js/jquery-3.1.0.min.js")}}" type="text/javascript"></script>
<script src="{{URL::asset("adminassets/js/bootstrap.min.js")}}" type="text/javascript"></script>
<script src="{{URL::asset("adminassets/js/material.min.js")}}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{URL::asset("adminassets/js/chartist.min.js")}}"></script>

<!--  Notifications Plugin    -->
<script src="{{URL::asset("adminassets/js/bootstrap-notify.js")}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{URL::asset("adminassets/js/material-dashboard.js")}}"></script>

<script src="{{URL::asset("adminassets/js/demo.js")}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>

@yield('script')



</html>
