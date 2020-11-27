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

    <title>NARASI 2020 - The Story</title>

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
    <link rel="stylesheet" href="{{ asset('css/theStory.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-color: black" oncontextmenu="return false">

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
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <h5 class="sans-serif bold white text-center pt-3" id="klifonaraPresents">
                        KLIFONARA EKSHIBISI 2020 PRESENTS
                    </h5>

                    <h1 class="serif bold title-big white text-center">
                        Expressions
                    </h1>

                    <h5 class="sans-serif bold white text-center pt-2 ls-15" id="theLanguage">
                        THE LANGUAGE OF THE SOUL
                    </h5>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <p class="sans-serif white text-center py-3" id="expressionsCaption">
                        Expressions: Simple yet really powerful. One word but holds a deep meaning. It lets us speak
                        without words,
                        portray feelings without speaking. It is a way to express yourself and your emotions. It is
                        essential because without expressions, people wouldn't know what other people feel because not
                        everyone can express themselves with words. It conveys various things with just one part of the
                        body; the face. It allows others to view and understand a person through not only their physical
                        appearance, but also deep beneath, their soul. So, here we are, showing you that there are so
                        many ways you can express yourself just the way you are. <br><br> The real you. <br><br> The
                        Language of
                        the Soul.
                    </p>
                </div>
            </div>
        </div>
        <img height="250px" style="position: absolute; top: -20px; left: -100px; z-index: -1;"
            src="{{ asset('img/story/circle.svg') }}" alt="">
        <img height="150px" style="position: absolute; top: 280px; left: 30px; z-index: -1;"
            src="{{ asset('img/story/circle.svg') }}" alt="">
        <img class="d-none d-lg-block" height="80px" style="position: absolute; top: 450px; left: 200px; z-index: -1;"
            src="{{ asset('img/story/circle.svg') }}" alt="">
        <img class="d-lg-none" height="80px" style="position: absolute; top: 500px; left: 200px; z-index: -1;"
            src="{{ asset('img/story/circle.svg') }}" alt="">
        <img height="60px" style="position: absolute; top: 100px; right: 50px; z-index: -1;"
            src="{{ asset('img/story/circle.svg') }}" alt="">
        <img height="120px" style="position: absolute; top: 200px; right: 100px; z-index: -1;"
            src="{{ asset('img/story/circle.svg') }}" alt="">
        <img class="d-none d-sm-block" height="220px" style="position: absolute; top: 400px; right: 50px; z-index: -1;"
            src="{{ asset('img/story/circle.svg') }}" alt="">
    </div>

    <div class="section-2" id="section-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="{{ asset('img/story/feelings/cry.jpg') }}" alt="">
                            <img class="img-fluid pt-5" src="{{ asset('img/story/feelings/soul.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid" src="{{ asset('img/story/feelings/depres.jpg') }}" alt="">
                            <h5 class="serif title-small white bold pt-4 text-center text-sm-left">Embrace Your Feelings
                            </h5>
                            <p class="sans-serif white pt-3 caption text-center text-sm-left">Men aren't always strong.
                                <br> Same as other human beings, they have feelings too.
                                <br>Feelings of disappointment, rejection, and failure.
                                <br>It's okay to show your emotions.
                                <br>That is being human,
                                <br>that is who you are.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 pt-20">
                    <img class="img-fluid" src="{{ asset('img/story/facialCare/tribe.jpg') }}" alt="">
                    <div class="row pt-10">
                        <div class="col-sm-5 d-none d-lg-block">
                            <img class="img-fluid" src="{{ asset('img/story/facialCare/smile.jpg') }}" alt="">
                            <h5 class="serif title-small text-right bold white pt-4">But First, Skin Care!</h5>
                            <p class="sans-serif white text-right pt-3 caption"> Treating your body is essential. So is
                                facial care! Not just for woman, but it's as important for men. Be proud for what others
                                fail to start!</p>
                        </div>
                        <div class="col-sm-7 d-none d-lg-block">
                            <img class="img-fluid" src="{{ asset('img/story/facialCare/fun.jpg') }}" alt="">
                        </div>

                        <div class="col-sm-6 d-lg-none">
                            <img class="img-fluid" src="{{ asset('img/story/facialCare/smile.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6 d-lg-none pt-5 pt-sm-0">
                            <img class="img-fluid" src="{{ asset('img/story/facialCare/fun.jpg') }}" alt="">
                            <h5
                                class="serif title-small text-right bold white pt-3 d-none d-md-block text-sm-left text-center">
                                But
                                First, Skin
                                Care!</h5>
                        </div>
                        <div class="col-sm-12 d-lg-none">
                            <h5
                                class="serif title-small text-md-right  bold white pt-3 d-md-none text-sm-left text-center">
                                But
                                First, Skin Care!
                            </h5>
                            <p class="sans-serif white text-md-right pt-3 pt-sm-1 caption text-sm-left text-center">
                                Treating your
                                body is
                                essential. So
                                is
                                facial care! Not just for woman, but it's as important for men. Be proud for what others
                                fail to start!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row pt-20">
                        <div class="col-md-8">
                            <img class="img-fluid" src="{{ asset('img/story/appearance/goth.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 pt-sm-4 pt-4">
                            <img class="img-fluid" src="{{ asset('img/story/appearance/gothic.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6 col-md-4 pt-10">
                            <img class="img-fluid" src="{{ asset('img/story/appearance/wine.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6 col-md-4 pt-10">
                            <img class="img-fluid" src="{{ asset('img/story/appearance/business.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4">
                            <h1 class="serif title-small bold white pt-10 text-sm-left text-center">Dress for Yourself!
                            </h1>
                            <p class="sans-serif white caption pt-3 text-sm-left text-center">
                                Dress the way you feel like.
                                <br>
                                Style yourself the way you want to see yourself, not the way others want to see you.
                                <br>
                                You decide who you are and how you want to express yourself!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pt-20">
                    <div class="row align-items-center">
                        <div class="order-2 order-sm-1 col-sm-6">
                            <h1 class="serif title-small white bold text-right d-none d-sm-block">
                                Beauty is Weightless
                            </h1>
                            <p class="sans-serif white text-right pt-3 caption d-none d-sm-block">
                                Beauty doesn't have a weight limit, as long as you're happy with yourself. The only
                                limit is
                                your confidence. Strive for your own happiness, not for standards.
                            </p>
                            <img class="img-fluid pt-4 pt-sm-0" src="{{ asset('img/story/bodyweight/stare.jpg') }}"
                                alt="">

                            <h1 class="serif title-small white bold text-center d-block d-sm-none pt-10">
                                Beauty is Weightless
                            </h1>
                            <p class="sans-serif white text-center pt-3 caption d-block d-sm-none">
                                Beauty doesn't have a weight limit, as long as you're happy with yourself. The only
                                limit is
                                your confidence. Strive for your own happiness, not for standards.
                            </p>
                        </div>
                        <div class="order-1 order-sm-2 col-sm-6">
                            <img class="img-fluid" src="{{ asset('img/story/bodyweight/fabulous.jpg') }}" alt="">
                            <img class="img-fluid pt-10" src="{{ asset('img/story/bodyweight/elegant.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-10 col-sm-12 col-lg-10 pt-20">
                        <p class="sans-serif white text-center end">
                            Social standards exist to shape our society. To mold a better life and to be the best
                            version of
                            ourselves. It holds an essential position in our daily life. As good as it can be, sometimes
                            social standards don't evolve as fast as our society. It lingers in the past and judge
                            itself as
                            the most righteous rule.
                        </p>

                        <p class="sans-serif white text-center end">
                            Social standards were created for us, not the other way around. It is fine for a man to shed
                            a tear. It is fine for a man to nurture his own beauty. It is fine for a woman to be a queen
                            of her own. It is fine to be curvy and slay even the most glamorous dresses. Social
                            standards might limit you, but don't let them take away.
                        </p>

                        <h5 class="serif title-very-small white text-center">
                            your expressions. <br>
                            the language of your soul.
                        </h5>
                    </div>
                </div>

                <br><br><br><br><br>
            </div>
        </div>

        <div class="footers" id="footers">
            <div class="container h-100">
                <div class="row h-100 align-items-center pt-2">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('img/logo/logo-dark.png') }}" height="60px" alt="">
                        <img src="{{ asset('img/logo/klifonara.png') }}" height="60px" alt="">
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="white mb-0">Copyright 2020 &copy; KLIFONARA | All Rights Reserved</p>
                        <p class="white"><a class="white underline" target="_blank"
                                href="https://instagram.com/klifonara">@klifonara</a> | <a class="white underline"
                                target="_blank" href="https://instagram.com/klifo.narasi">@klifo.narasi</a></p>
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