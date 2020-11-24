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

    <title>NARASI 2020 - Submissions</title>

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
    <link rel="stylesheet" href="{{ asset('css/submissions.css') }}">
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
                        <a href="/login">
                            <button type="button" class="btn btn-dark btn-login">LOGIN</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="section-1" id="section-1">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-7 col-12">
                    <div class="text" style="padding-bottom: 170px">
                        <h5 class="sans-serif bold white pb-3">NARASI 2020: SUBMISSIONS</h5>
                        <br>
                        <i>
                            <div class="d-none d-sm-block" id="rect" style="z-index: -1"></div>
                            <h1 class="title serif white" id="emotions">Emotions</h1>
                        </i>
                        <h1 class="title-medium serif white lh-15" style="padding-bottom: 80px">in Frame</h1>
                        <p class="sans-serif white">40 curated photographs submitted by members and associates of
                            KLIFONARA in theme with our exhibition. NARASI 2020 Expressions: The Language of the Soul
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="section-2" id="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-medium serif bold white">Meet Our Curators</h1>
                </div>

                <div class="col-md-12 col-lg-4 py-5 text-center">
                    <img class="profile" src="{{asset('img/subm/1.jpg')}}" alt="">
                    <p class="sans-serif title-very-small white bold pt-4">EDWIN DJUANDA</p>
                    <p class="sans-serif white">Dr. Edwin Djuanda, memotret sejak 50tahun lalu. Menjadi pemenang dan
                        juri
                        pelbagai lomba foto nasional / internasional. Sekarang, beliau menjabat sebagai dewan penasehat
                        di Lembaga
                        Fotografi Candra Naya.</p>
                </div>
                <div class="col-md-12 col-lg-4 py-5 text-center">
                    <img class="profile" src="{{asset('img/subm/2.jpg')}}" alt="">
                    <p class="sans-serif title-very-small white bold pt-4">LEONTIUS JESSE PUTRA</p>
                    <p class="sans-serif white">Seorang overclocker profesional yang telah memulai Digital Agency
                        Businnes pada tahun 2016-an. Ia mulai bergabung dengan Caffeine
                        Community di tahun 2017-an. Sekarang ia juga
                        menjadi kepala sekolah di Caffeine Academy.</p>
                </div>
                <div class="col-md-12 col-lg-4 py-5 text-center">
                    <img class="profile" src="{{asset('img/subm/3.jpg')}}" alt="">
                    <p class="sans-serif title-very-small white bold pt-4">RICKY YEP</p>
                    <p class="sans-serif white">Berawal dari hobby, fotografi kini menjadi salah satu bagian terpenting
                        dalam hidup saya. Kenikmatan pada saat menciptakan sebuah foto yang berkualitas tinggi membuat
                        saya semakin menikmati karir sebagai fotografer</p>
                </div>

                <div class="col-md-12">
                    <h1 class="serif white text-center pb-3">
                        Color
                    </h1>
                    <div class="gal">
                        @foreach ($narasiColor as $photo)
                        <a href="{{ route('photoDetail', ['photoID' => $photo->id]) }}">
                            <img src="{{ $photo->directory }}" alt="">
                        </a>
                        @endforeach
                    </div>

                    <h1 class="serif white text-center pt-5 pb-3">
                        Black & White
                    </h1>
                    <div class="gal">
                        @foreach ($narasiBW as $photo)
                        <a href="{{ route('photoDetail', ['photoID' => $photo->id]) }}">
                            <img src="{{ $photo->directory }}" alt="">
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-3" id="section-3">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="offset-lg-6 col-lg-6 offset-md-4 col-md-8 mt-5">
                    <h1 id="right" class="sans-serif bold white">PAMERAN DIKLAT</h1>
                    <h1 id="right" class="sans-serif bold white lh-15 pb-3">KLIFONARA 2020</h1>
                    <p id="right" class="sans-serif white">50 curated photographs submitted by members of KLIFONARA who
                        had participated in DIKLAT Basic
                        Photography Class as a student.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-4" id="section-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gal-pamdik">
                        @foreach ($photos as $photo)
                        <a href="{{ route('photoDetail', ['photoID' => $photo->id]) }}">
                            <img src="{{ $photo->directory }}" alt="">
                        </a>
                        @endforeach
                    </div>
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

</body>

</html>