<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Monsterlite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
          content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    {{--<title>Monster Lite Template by WrapPixel</title>--}}
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('assets/plugins/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">

</head>
<body>
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }}--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
    @Auth
    {{--<div class="preloader">--}}
        {{--<div class="lds-ripple">--}}
            {{--<div class="lds-pos"></div>--}}
            {{--<div class="lds-pos"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
         data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand justify-content-center" href="{{route('home')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                       href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                               href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search pl-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                        class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->image == null)
                                    <img src="{{asset('images/userImages/user-default.jpg')}}" class="profile-pic mr-2">
                                @else
                                    <img src="{{asset('images/userImages/'.Auth::user()->image)}}" class="profile-pic mr-2">
                                @endif
                                {{Auth::user()->name}}
                                </a>
                        </li>

                        <li class="nav-item dropdown"><a class="mr-3 nav-link dropdown-toggle waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Log out</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item" style="display: none"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                     href="{{route('logout')}}" aria-expanded="false" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="mr-3 fas fa-sign-out-alt "
                                                   aria-hidden="true"></i><span class="hide-menu">Log Out</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                     href="{{route('home')}}" aria-expanded="false"><i class="mr-3 far fa-clock fa-fw"
                                                                        aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                     href="{{route('user.show', auth::user()->id)}}" aria-expanded="false">
                                <i class="mr-3 fa fa-user" aria-hidden="true"></i><span
                                        class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                     href="{{route('user.index')}}" aria-expanded="false"><i class="mr-3 fa fa-table"
                                                                                                      aria-hidden="true"></i><span class="hide-menu">Users</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                     href="{{route('user.create')}}" aria-expanded="false"><i class="mr-3 fas fa-user-plus " aria-hidden="true"></i><span class="hide-menu">Add User</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                     href="{{route('idea.create')}}" aria-expanded="false"><i class="mr-3 fas fa-lightbulb" aria-hidden="true"></i><span class="hide-menu">Add Idea</span></a></li>
                        {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"--}}
                                                     {{--href="blank.html" aria-expanded="false"><i class="mr-3 fa fa-columns"--}}
                                                                                                {{--aria-hidden="true"></i><span class="hide-menu">Blank</span></a></li>--}}

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @endauth
        <div class="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        {{--<footer class="footer text-center">--}}
            {{--© 2020 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>--}}
        {{--</footer>--}}
        <!-- ============================================================== -->
        <!-- End footer -->
    </div>


    @auth
    <script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    {{--<script src="{{asset('assets/plugins/popper.js/dist/umd/popper.min.js')}}"></script>--}}
    <script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    {{--<script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>--}}
    {{--<script src="{{asset('assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>--}}
    {{--<script src="{{asset('js/pages/dashboards/dashboard1.jss')}}"></script>--}}
    @endauth
</body>
</html>
