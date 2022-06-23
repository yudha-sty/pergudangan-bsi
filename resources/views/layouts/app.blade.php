<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{url ('templogin/css/main.css') }}">
    <!--===============================================================================================-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!--===============================================================================================-->
<script src="{{url ('templogin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{url ('templogin/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{url ('templogin/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{url ('templogin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{url ('templogin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{url ('templogin/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{url ('templogin/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{url ('templogin/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{url ('templogin/js/main.js') }}"></script>
</html>
