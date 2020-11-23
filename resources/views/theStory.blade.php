<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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

<body style="background-color: black">

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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="sans-serif bold white text-center py-3" id="klifonaraPresents">
                        KLIFONARA EKSHIBISI 2020 PRESENTS
                    </h5>

                    <h1 class="serif bold title white text-center">
                        The Language
                    </h1>
                    <h1 class="serif bold title white text-center">
                        of the Soul
                    </h1>
                </div>
                <div class="offset-md-3 col-md-6">
                    <p class="sans-serif white text-center py-3">
                        Simple yet really powerful. One word but holds a deep meaning. It lets us speak without words,
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
    </div>

    <div class="section-2" id="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset('img/story/feelings/cry.jpg') }}" alt="">
                            <img class="img-fluid pt-5" src="{{ asset('img/story/feelings/soul.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset('img/story/feelings/depres.jpg') }}" alt="">
                            <h5 class="serif title-small white bold pt-4">Embrace Your Feelings</h5>
                            <p class="sans-serif white pt-3">Men aren't always strong.
                                <br> Same as other human beings, they have feelings too.
                                <br>Feelings of disappointment, rejection, and failure.
                                <br>It's okay to show your emotions.
                                <br>That is being human,
                                <br>that is who you are.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-20">
                    <img class="img-fluid" src="{{ asset('img/story/facialCare/tribe.jpg') }}" alt="">
                    <div class="row pt-10">
                        <div class="col-md-5">
                            <img class="img-fluid" src="{{ asset('img/story/facialCare/smile.jpg') }}" alt="">
                            <h5 class="serif title-small text-right bold white pt-4">But First, Skin Care!</h5>
                            <p class="sans-serif white text-right pt-3"> Treating your body is essential. So is facial
                                care!
                                <br> Not just for woman, but it's as important for men.
                                <br> Be proud for what others fail to start!</p>
                        </div>
                        <div class="col-md-7">
                            <img class="img-fluid" src="{{ asset('img/story/facialCare/fun.jpg') }}" alt="">
                        </div>
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