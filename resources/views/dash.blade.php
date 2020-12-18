@extends('layouts.app')

@section('title', __('NARASI 2020 - Dashboard'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(session('status'))
        <div class="col-md-8 pb-3">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <div class="row d-flex justify-content-center align-items-center pt-3">
        <div class="col-8 offset-lg-3 col-md-5 col-lg-3 offset-md-1">
            <img class="img-fluid" src="{{ asset('img/klasik/Tubagus.png') }}" alt="">
        </div>
        <div class="col-12 col-md-6 text-center text-md-left pt-3 pt-md-0">
            <h1 class="serif title-small bold">The Art of<br>Black and White</h1>
            <p>
                <b>Time:</b> <br>Sabtu, 19 Desember 2020. 15:00 <br>
                <b>Benefits:</b> <br>
                SAT <br>
                E-Certificate <br>
                Knowledge <br>
                <b>Speaker:</b><br>Tubagus Rizky
            </p>
            <a href="https://narasi.klifonara.com/live"><button type="button" class="btn btn-primary">Join
                    Seminar</button></a>
        </div>
    </div>

    <div class="row align-items-center pt-5">
        <div class="order-2 order-md-1 col-12 col-md-6 text-center text-md-right pt-3 pt-m3-0">
            <h1 class="serif title-small bold">Film Photography</h1>
            <p>
                <b>Time:</b> <br>Minggu, 20 Desember 2020. 14:15 <br>
                <b>Benefits:</b> <br>
                SAT <br>
                E-Certificate <br>
                Knowledge <br>
                <b>Speakers:</b><br>Benaya Oktavianus
            </p>
            <a href="https://narasi.klifonara.com/live"><button type="button" class="btn btn-primary">Join
                    Seminar</button></a>
        </div>
        <div class="order-1 order-md-2 col-8 col-md-5 col-lg-3 offset-2 offset-md-0">
            <img class="img-fluid" src="{{ asset('img/klasik/Benaya.png') }}" alt="">
        </div>
    </div>

    <div class="row d-flex justify-content-center align-items-center pt-5">
        <div class="col-8 offset-lg-3 col-md-5 col-lg-3 offset-md-1">
            <img class="img-fluid" src="{{ asset('img/klasik/gan-vin.gif') }}" alt="">
        </div>
        <div class="col-12 col-md-6 text-center text-md-left pt-3 pt-md-0">
            <h1 class="serif title-small bold">InSight Pameran Besar NARASI</h1>
            <p>
                <b>Time:</b> <br>Minggu, 20 Desember 2020. 15:45 <br>
                <b>Benefits:</b> <br>
                SAT <br>
                E-Certificate <br>
                Knowledge <br>
                <b>Speaker:</b><br>Ganal Asmara & Kevin Yobeth
            </p>
            <a href="https://narasi.klifonara.com/live"><button type="button" class="btn btn-primary">Join
                    Seminar</button></a>
        </div>
    </div>

    <div class="row justify-content-center align-items-center mt-5">
        <h1 class="montserrat bold col-md-10 text-center">OUR OFFICIAL MERCHANDISE</h1>
        <div class="col-md-8 text-center">
            <img class="img-fluid" src="{{ asset('img/merch/A.png') }}" alt="">
            <h5 class="raleway title-small">Kaos A</h5>

            <a href="https://instagram.com/klifo.narasi" target="_">
                <button class="btn btn-dark">DM @klifo.narasi for more info</button>
            </a>
        </div>

        <div class="col-md-8 text-center">
            <img class="img-fluid" src="{{ asset('img/merch/B.png') }}" alt="">
            <h5 class="raleway title-small">Kaos B</h5>

            <a href="https://instagram.com/klifo.narasi" target="_">
                <button class="btn btn-dark">DM @klifo.narasi for more info</button>
            </a>
        </div>
    </div>

    {{-- <div class="row justify-content-center align-items-center">

        @if(count($attendedSeminars) > 0 && (time() < strtotime($attendedSeminars[0]->time))) <h1
                class="montserrat bold col-md-8 text-center">REGISTERED SEMINAR</h1>
            @endif

            @foreach($attendedSeminars as $attendedSeminar)
            @if (time() < strtotime($attendedSeminar->time))
                <div class="d-none d-md-block col-md-12 col-lg-10 py-3">
                    <div class="container">
                        <img class="img-fluid" src="{{ $attendedSeminar->thumbnail }}">
    <div class="bottom-left-join">
        <a href="{{ $attendedSeminar->link.$uniqueName }}">
            <button type="button" class="btn btn-join">Join Seminar</button>
        </a>
    </div>

</div>
</div>

<div class="d-md-none col-md-12 col-lg-10 py-3">
    <div class="container">
        <img class="img-fluid" src="{{ $attendedSeminar->thumbnailM }}">
        <div class="bottom-center-join">
            <a href="{{ $attendedSeminar->link.$uniqueName }}">
                <button type="button" class="btn btn-join">Join Seminar</button>
            </a>
        </div>

    </div>
</div>
@endif
@endforeach

@if(count($seminars) > 0)
<h1 class="montserrat bold col-md-8 text-center pt-2">AVAILABLE SEMINARS</h1>
@endif

@foreach($seminars as $seminar)
<div class="d-none d-md-block col-md-12 col-lg-10 py-3">
    <div class="container">
        <img class="img-fluid" src="{{ $seminar->thumbnail }}">
        <div class="bottom-left">
            <a href="{{ route('registerSeminar', ['ID' => $seminar->id]) }}">
                <button type="button " class="btn btn-dark">Register</button>
            </a>
        </div>
    </div>
</div>

<div class="d-md-none col-md-12 col-lg-10 py-3">
    <div class="container">
        <img class="img-fluid" src="{{ $seminar->thumbnailM }}">
        <div class="bottom-center">
            @if($seminar->id === 2)
            <a href="{{ route('registerSeminar', ['ID' => $seminar->id]) }}">
                <button type="button " class="btn btn-dark">Buy your ticket</button>
            </a>
            @else
            <a href="{{ route('registerSeminar', ['ID' => $seminar->id]) }}">
                <button type="button " class="btn btn-dark">Free Registration</button>
            </a>
            @endif
        </div>
    </div>
</div>
@endforeach

@foreach($unverifiedSeminars as $seminar)
<div class="d-none d-md-block col-md-12 col-lg-10 py-3">
    <div class="container">
        <img class="img-fluid" src="{{ $seminar->thumbnail }}">
        <div class="bottom-left">
            <button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                title="Verification on Process" onclick="alert('Verification on Process')">
                Verifying
            </button>
        </div>
    </div>
</div>

<div class="d-md-none col-md-12 col-lg-10 py-3">
    <div class="container">
        <img class="img-fluid" src="{{ $seminar->thumbnailM }}">
        <div class="bottom-center">
            <button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                title="Verification on Process" onclick="alert('Verification on Process')">
                Verifying
            </button>
        </div>
    </div>
</div>
@endforeach

<div class="col-12 text-center">
    <p>Tip: Don't share your zoom link because it's unique to your user ID! Only 1 user per account will
        be
        allowed to join.</p>
</div>
</div> --}}

<div class="row pt-5 d-flex justify-content-center align-items-center ">
    <div class="col-12">
        <h1 class="montserrat bold text-center pt-2">VIRTUAL BACKGROUND</h1>
    </div>
    <div class="col-8 col-sm-6 text-center">
        <img class="img-fluid" src="{{ asset('img/virtual-bg.jpg') }}" alt="">
    </div>
    <div class="col-12 text-center pt-3">
        <h5>Download Virtual Background</h5>
        <a href="{{ route('downVirtualBG') }}"><button type="button" class="btn btn-primary">Download</button></a>
    </div>
</div>

</div>
@include('sweetalert::alert')
@endsection