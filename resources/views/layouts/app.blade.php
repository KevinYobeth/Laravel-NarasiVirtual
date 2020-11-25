<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VZLFCCXTSX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VZLFCCXTSX');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="styleoweet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('landingPage') }}">
                    <img src="{{ asset('img/logo/logo-dark.png') }}" height="40px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dash') }}">
                                    Dashboard
                                </a>

                                <a class="dropdown-item" href="{{route('profile')}}">
                                    Profile
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <div class="footers" id="footers">
            <div class="container h-100">
                <div class="row h-100 align-items-center pt-2">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('img/logo/logo-dark.png') }}" height="60px" alt="">
                        <img src="{{ asset('img/logo/klifonara.png') }}" height="60px" alt="">
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="white mb-0">Copyright 2020 &copy; KLIFONARA | All Rights Reserved</p>
                        <p class="white"><a class="white underline" href="">Terms and Condition</a> | <a
                                class="white underline" href="">Privacy
                                Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkBinusian(){
            var nimDiv = document.getElementById("nimInp");
            var jurusanDiv = document.getElementById("jurusanInp");
            var eventBinusian = document.getElementsByName("radBinusian");

            var nim = document.getElementById("nim");
            var jurusan = document.getElementById("jurusan");
            
            // document.getElementById("mytext").value = "My value";

            if (eventBinusian[0].checked) {
                nim.value = "";
                jurusan.value = "";
                nimDiv.style.display = "";
                jurusanDiv.style.display = "";
                
            } else {
                nim.value = "0000000000";
                jurusan.value = "-";
                nimDiv.style.display = "none";
                jurusanDiv.style.display = "none";
            }
        }
    </script>
</body>

</html>