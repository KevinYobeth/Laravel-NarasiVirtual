<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NARASI 2020</title>

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
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/fullpage.css') }}">
</head>

<body>

    <div id="header">
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
                <a href="#LandingPage">
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
                            <a href="{{route('login')}}">
                                <button type="button" class="btn btn-dark btn-login">LOGIN</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="footer">
        <div class="alert alert-custom alert-dismissible fade show d-none d-md-block" role="alert"
            style="color: white;">
            <div class="container h-100">
                <div class="row h-100 d-flex align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <p style="display: inline-block">
                            {{ $motd[0]->message }}
                        </p>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ $motd[0]->link }}">
                            <button type="button" class="btn text-light"
                                style="margin-right: 30px; width: 100px; display: inline-text; border: 2px solid white; background-color:transparent">Register
                            </button>
                        </a>

                        <a href="" style="padding: 0px; padding-top: 6px" class="close" data-dismiss="alert"
                            aria-label="close">&times;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fullpage">
        <div class="section" id="section-1">
            <div class="container">
                <div class="row justify-content-center align-self-center">
                    <div class="col-md-12" id="main-title">
                        <h1 class="serif title">Expressions</h1>
                        <h5 class="sans-serif seven-bold ls-5">THE LANGUAGE OF THE SOUL</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="section-2">
            <div class="container h-100">
                <div class="row h-100 d-flex justify-content-center align-items-center">

                    <div class="col-md-8 text-center">
                        <img src="{{ asset('img/logo/klifonara.png') }}" alt="" height="110px">
                        <p class="sans-serif semi-bold ls-5 white" style="padding-top: 20px">KLIFONARA PRESENTS</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section" id="section-3">
            <div class="container h-100">
                <div class="row h-100 d-flex justify-content-center align-items-center">

                    <div class="col-md-8 text-center">
                        <img src="{{ asset('img/logo/logo-light.png') }}" alt="" height="110px">
                        <p class="sans-serif semi-bold ls-5 white" style="padding-top: 20px">KLIFONARA EKSHIBISI</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section" id="section-4">
            <div class="container h-100 ">
                <div class="row h-100 d-flex justify-content-center align-items-center">
                    <div class="col-md-1 d-none d-md-block">
                        <div id="rect" style="z-index: 0; margin-top: 150px"></div>
                        <div id="rect" style="z-index: 0; margin-top: 20px"></div>
                        <div id="rect" style="z-index: 0; margin-top: 20px"></div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-none d-md-block">
                        <img id="pikabu" src="{{ asset('img/pikabu.png') }}" height="450px" style="z-index: 1">
                    </div>
                    <div class="offset-md-1 col-md-7 col-sm-12 pl-md-5 mt-3">
                        <div id="main-title">
                            <h1 class="serif title-medium">What is</h4>
                                <h1 class="serif title lh-40">Expression?</h1>
                        </div>
                        <p class="serif caption">A brief story of our concerns</p>
                        <div id="rect-small" style="display: inline-block"></div>
                        <p class="serif caption" style="margin-top: 0px">and passion.</p>
                        <br>
                        <br>
                        <p class="sans-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab necessitatibus
                            tenetur debitis?
                            Velit animi quidem recusandae quod eveniet est quasi.</p>
                        <p class="sans-serif"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia at illo
                            voluptates eos
                            obcaecati
                            ad cupiditate eaque labore esse sed maxime sint ea tenetur.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="section-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="serif title-medium">What's Up!</h1>
                        <h5 class="sans-serif semi-bold">with NARASI 2020</h5>
                        <p class="sans-serif">NARASI 2020 Expression: The Language of the Soul adalah
                            ekshibisi online pertama yang diadakan oleh Klub Seni Fotografi Bina Nusantara dan
                            sebagainya dan sebagainya
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-md-4 col-sm-12 mb-sm-5 text-center d-none d-sm-block">
                                            <img class="speakers" id="speaker" height="300px"
                                                src="{{ asset('img/speakers/Hana.png') }}" alt="">
                                        </div>
                                        <div class="col-md-5 col-sm-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Expressing Yourself</h5>
                                                    <p class="card-text">Seminar ini berbicara tentang bagaimana
                                                        cara-cara mengekspresikan diri melalui karya seni. Seminar ini
                                                        dibawakan oleh Hana Madness.
                                                    </p>
                                                    <a href="{{route('registerSeminar', ['ID' => 2])}}"
                                                        class="btn btn-primary">Register Now!</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-md-5 col-sm-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Capturing Emotions</h5>
                                                    <p class="card-text">Seminar ini mengajarkan tentang cara-cara untuk
                                                        memotret foto secara conceptual untuk memunculkan ekspresi /
                                                        perasaan tertentu. Seminar ini akan dibawakan oleh Amanda
                                                        Margareth.
                                                    </p>
                                                    <a href="{{ route('dash') }}" class="btn btn-primary">Register
                                                        Now!</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mb-sm-5 text-center d-none d-sm-block">
                                            <img class="speakers" id="speaker" height="300px"
                                                src="{{ asset('img/speakers/Amanda.png') }}" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="section-6">
            <div class="container d-flex h-100">
                <div class="row align-self-center">
                    <div class="col-md-9">
                        <h1 id="main-title" class="serif title white">The Story</h1>
                        <p class="sans-serif white">Sometimes the world doesn't accept you, but that
                            doesn't mean you need
                            the
                            world to accept
                            you to be your true beautiful self</p>
                        <a href="">
                            <p class="bold white">Read More >></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="section-7">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col-md-12">
                        <h3 class="sans-serif title-small seven-bold white">Visit Our</h3>
                        <h1 class="serif title bold white lh-70" id="main-title">Virtual Exhibition</h1>
                        <p class="sans-serif semi-bold white" style="margin-top: 20px">The first online interactive
                            exhibition by
                            Klifonara</p>
                        <br>
                        <a href="{{ route('exhibition') }}">
                            <button type="button" class="btn text-light"
                                style=" border: 2px solid white; background-color:transparent">Get me
                                there!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="section-8">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col-md-12">
                        <img src="{{ asset('img/logo/logo-dark.png') }}" height="60px" alt="">
                        <br>
                        <img src="{{ asset('img/logo/klifonara.png') }}" height="60px" alt="">
                        <br>
                        <img src="{{ asset('img/logo/fpsi.png') }}" height="60px" style="padding-top: 20px" alt="">
                        <br><br>
                        <h1 class="sans-serif title-small white">MEDIA PARTNERS</h1>

                        {{-- <img src="{{ asset('img/icon/instagram.svg') }}"
                        style="color: white" height="30px" alt="">
                        <img src="{{ asset('img/icon/web.svg') }}" height="30px" alt=""> --}}
                    </div>


                    <div class="col-md-12">
                        <p style="color: white">Copyright 2020 &copy; <b>Klifonara</b> | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/fullpage.js') }}"></script>

    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            anchors: ['LandingPage', 'KlifonaraPresent', 'KlifonaraEkshibisi', 'Expression', 'WhatsUp',
                'TheStory', 'VirtualExhibition', 'ContactUs'
            ],
            navigation: true,
            navigationPosition: 'right',
            licenseKey: '6ve5hHW@c8',
        });

    </script>

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