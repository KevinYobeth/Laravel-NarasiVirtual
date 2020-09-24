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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="alert alert-custom alert-dismissible fade show" role="alert" style="color: white">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col-md-12">
                        <p style="margin-top: 10px; display: inline-block">
                            <strong>Photography Seminar</strong>: How to Take Expressive Photos by Amanda Margareth is
                            nearing,
                            get
                            your seat now!
                        </p>
                        <button type="button" class="btn text-light"
                            style="margin-left: 30px; border: 2px solid white; background-color:transparent">Register
                            Here</button>
                        <button style="margin-top: -5px" type="button" class="close" data-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md sticky-top">
            <div class=" container">
                <a href="#">
                    <img class="navbar-brand" src="{{ asset('img/logo/logo-dark.png') }}"
                        height="60px" alt />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <a class="nav-link" href="#section-1">THE STORY</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#section-2">SUBMISSIONS</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#section-3">EXHIBITION</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#section-4">ABOUT US</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#section-5">CONTACT</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#section-6">CONTACT</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#section-7">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="section-1" id="section-1">
            <div class="container d-flex h-100">
                <div class="row justify-content-center align-self-center">
                    <div class="col-md-12">
                        <h1 id="header-expressions">Expressions</h1>
                        <h5 id="header-tagline">THE LANGUAGE OF THE SOUL</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-2" id="section-2">
            <div class="container h-100">
                <div class="row align-self-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center" style="margin-top: 45vh">
                        <img src="{{ asset('img/logo/klifonara.png') }}" alt="" height="110px">
                        <p id="klifonara-presents">KLIFONARA PRESENTS</p>
                    </div>
                    <div class="col-md-4"></div>
                </div>

            </div>
        </div>

        <div class="section-3" id="section-3">
            <div class="container h-100">
                <div class="row align-self-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center" style="margin-top: 45vh">
                        <img src="{{ asset('img/logo/logo-light.png') }}" alt="" height="110px">
                        <p id="klifonara-presents">KLIFONARA EKSHIBISI</p>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>

        <div class="section-4" id="section-4">
            <div class="container h-100 ">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-1">
                        <div id="rect" style="z-index: 0; margin-top: 150px"></div>
                        <div id="rect" style="z-index: 0; margin-top: 20px"></div>
                        <div id="rect" style="z-index: 0; margin-top: 20px"></div>
                    </div>
                    <div class="col-md-3">
                        <img id="pikabu" src="{{ asset('img/pikabu.png') }}" height="450px"
                            style="z-index: 1">
                    </div>
                    <div class="offset-md-1 col-md-7" style="padding-left: 50px">
                        <h4 id="what-is">What is</h4>
                        <h1 id="expression">Expression?</h1>
                        <p id="brief-story">A brief story of our concerns</p>
                        <div id="rect-small" style="display: inline-block"></div>
                        <p id="brief-story" style="margin-top: 0px">and passion.</p>

                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab necessitatibus tenetur debitis?
                            Velit animi quidem recusandae quod eveniet est quasi, dolores, quam corporis perferendis
                            alias cum perspiciatis eum maxime odit. Impedit quis explicabo sapiente at omnis assumenda
                            voluptate qui, possimus harum dolores eveniet nemo? Possimus repellat dolores labore illum
                            eos.</p>
                        <br>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia at illo voluptates eos
                            obcaecati
                            ad cupiditate eaque labore esse sed maxime sint ea tenetur sit dignissimos fugiat
                            distinctio,
                            sunt possimus!</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="section-5" id="section-5">
            <div class="container h-100 ">
                <div class="row h-40 justify-content-center" style="padding-top: 20vh">
                    <div class="col-md-6 text-center">
                        <h1 id="whats-up">What's Up!</h1>
                        <h5 id="with-narasi">with NARASI 2020</h5>
                        <p class="justify">NARASI 2020 Expression: The Language of the Soul adalah ekshibisi
                            online
                            pertama yang
                            diadakan oleh Klub Seni Fotografi Bina Nusantara dan sebagainya dan sebagainya</p>
                    </div>
                </div>
                <div class="row h-60">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('img/logo/logo-light.png') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Register Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('img/logo/logo-dark.png') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Register Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('img/logo/logo-light.png') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="section-6" id="section-6">
            <div class="container d-flex h-100">
                <div class="row align-self-center">
                    <div class="col-md-8">
                        <h1 id="the-story">The Story</h1>
                        <p id="thestory-caption">Sometimes the world doesn't accept you, but that doesn't mean you need
                            the
                            world to accept
                            you to be your true beautiful self</p>
                        <p id="read-more">Read More >></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="section-7" id="section-7">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col-md-12">
                        <h3 id="visit-our">Visit Our</h3>
                        <h1 id="virtual-exhibition">Virtual Exhibition</h1>
                        <p id="the-first">The first online interactive exhibition by Klifonara</p>
                        <br>
                        <button type="button" class="btn text-light"
                            style=" border: 2px solid white; background-color:transparent">Get me
                            there!</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-8" id="section-8">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col-md-12">
                        <img src="{{ asset('img/logo/logo-dark.png') }}" height="60px" alt="">
                        <img src="{{ asset('img/logo/klifonara.png') }}" height="60px" alt="">
                        <br><br>
                        <img src="{{ asset('img/icon/instagram.svg') }}" style="color: white"
                            height="30px" alt="">
                        <img src="{{ asset('img/icon/web.svg') }}" height="30px" alt="">
                    </div>

                    <div class="col-md-12">
                        <p style="color: white">Copyright 2020 &copy; <b>Klifonara</b> | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- <div class="flex-center position-ref full-height">
@if(Route::has('login'))
                <div class="top-right nav-link">
@auth
                        <a href="{{ url('/home') }}">Home</a>
@else
    <a href="{{ route('login') }}">Login</a>

    @if(Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth
    </div>
    @endif
    </div> --}}


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
