<!DOCTYPE html>
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

    <title>NARASI 2020 - Exit Ticket</title>

    <meta property="og:title" content="NARASI: The Language of the Soul" />
    <meta property="og:description"
        content="NARASI 2020 merupakan ekshibisi online pertama dari KLIFONARA atau Klub Seni Fotografi Bina Nusantara" />
    <meta property="og:image" content="{{ asset('img/logo/logo-light.png') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class=" container">
            <a href="/">
                <img class="navbar-brand" src="{{ asset('img/logo/logo-dark.png') }}" height="60px" alt />
            </a>

            <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="nav-link" href="{{route('theStory')}}">THE STORY</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('submissions')}}">SUBMISSIONS</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('exhibition')}}">EXHIBITION</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('aboutUs')}}">ABOUT US</a>
                    </li>
                    <li>
                        <a class="nav-link" href="">CONTACT</a>
                    </li>
                    <li>
                        <a href="/login">
                            <button type="button" class="btn btn-dark btn-login">LOGIN</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="section-1" id="section-1">
        <div class="container pt-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-12">
                    <h1 class="sans-serif title-small bold text-center">Exit Ticket</h1>
                    <form action="{{ route('storeTicket', ['seminarCode' => $seminarCode]) }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Binusian / Non-Binusian') }}</label>

                            <div class="col-md-8 align-items-center">
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="radBinusian" id="binusianRadio"
                                        value="binus" onclick="checkBinusian()" checked>
                                    <label class="form-check-label" for="binusianRadio">Binusian</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radBinusian"
                                        id="nonBinusianRadio" value="nonBinus" onclick="checkBinusian()">
                                    <label class="form-check-label" for="nonBinusianRadio">Non-Binusian</label>
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div id="nimInp" class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="number" class="form-control @error('nim') is-invalid @enderror"
                                    name="nim" value="{{ old('nim') }}" required>

                                @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div id="jurusanInp" class="form-group row">
                            <label for="jurusan"
                                class="col-md-4 col-form-label text-md-right">{{ __('Jurusan') }}</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text"
                                    class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                                    value="{{ old('jurusan') }}" required>

                                @error('jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div id="instansiInp" class="form-group row">
                            <label for="instansi"
                                class="col-md-4 col-form-label text-md-right">{{ __('Instansi') }}</label>

                            <div class="col-md-6">
                                <input id="instansi" type="text"
                                    class="form-control @error('instansi') is-invalid @enderror" name="instansi"
                                    value="{{ old('instansi') }}" required>

                                @error('instansi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-md-4 col-md-2">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            var nimDiv = document.getElementById("nimInp");
            var jurusanDiv = document.getElementById("jurusanInp");
            var instansiDiv = document.getElementById("instansiInp");
            var eventBinusian = document.getElementsByName("radBinusian");

            var nim = document.getElementById("nim");
            var jurusan = document.getElementById("jurusan");
            var instansi = document.getElementById('instansi');

            nim.value = "";
            jurusan.value = "";
            
            nimDiv.style.display = "";
            jurusanDiv.style.display = "";
            instansi.value = "-";
            instansiDiv.style.display = "none";
        });

        function checkBinusian(){
            var nimDiv = document.getElementById("nimInp");
            var jurusanDiv = document.getElementById("jurusanInp");
            var instansiDiv = document.getElementById("instansiInp");
            var eventBinusian = document.getElementsByName("radBinusian");

            var nim = document.getElementById("nim");
            var jurusan = document.getElementById("jurusan");
            var instansi = document.getElementById('instansi');

            if (eventBinusian[0].checked) {
                nim.value = "";
                jurusan.value = "";
                
                nimDiv.style.display = "";
                jurusanDiv.style.display = "";

                instansi.value = "-";
                instansiDiv.style.display = "none";
            } else {
                nim.value = "0000000000";
                jurusan.value = "-";

                nimDiv.style.display = "none";
                jurusanDiv.style.display = "none";

                instansi.value = "";
                instansiDiv.style.display = "";
            }
            
        }
    </script>

    @include('sweetalert::alert')
</body>

</html>