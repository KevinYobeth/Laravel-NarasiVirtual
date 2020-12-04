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

    <div class="row justify-content-center align-items-center">


        @if(count($attendedSeminars) > 0 && (time() < strtotime($attendedSeminars[0]->time))) <h1
                class="montserrat bold col-md-8 text-center">REGISTERED SEMINAR</h1>
            @endif

            {{-- {{ Log::alert(time()) }} --}}
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
    </div>

    <div class="row d-flex justify-content-center align-items-center pt-5">
        <div class="col-12 offset-md-3 col-md-3">
            <img class="img-fluid" src="{{ asset('img/klasik/Precia.png') }}" alt="">
        </div>
        <div class="col-12 col-md-6">
            <h1 class="serif title-small bold">KLASIK SELF-LOVE</h1>
            <p>
                <b>Benefits:</b> <br>
                SAT <br>
                E-Certificate <br>
                Knowledge
            </p>
            <a href="https://narasi.klifonara.com/live"><button type="button" class="btn btn-primary">Join
                    Seminar</button></a>
        </div>
    </div>

    <div class="row d-flex justify-content-center align-items-center pt-5">
        <div class="col-12 col-md-6 text-right">
            <h1 class="serif title-small bold">KLASIK SELF-LOVE</h1>
            <p>
                <b>Benefits:</b> <br>
                SAT <br>
                E-Certificate <br>
                Knowledge
            </p>

            <a href="https://narasi.klifonara.com/live"><button type="button" class="btn btn-primary">Join
                    Seminar</button></a>
        </div>
        <div class="col-12 col-md-3">
            <img class="img-fluid" src="{{ asset('img/klasik/Albert.png') }}" alt="">
        </div>
        <div class="col-12 col-md-3">
            <img class="img-fluid" src="{{ asset('img/klasik/Gaby.png') }}" alt="">
        </div>
    </div>

    <div class="row pt-5 align-items-center">
        <div class="col-12">
            <h1 class="montserrat bold text-center pt-2">VIRTUAL BACKGROUND</h1>
        </div>
        <div class="col-12 col-md-7">
            <img class="img-fluid" src="{{ asset('img/virtual-bg.jpg') }}" alt="">
        </div>
        <div class="col-12 col-md-5">
            <h5>Download Virtual Background</h5>
            <a href="{{ route('downVirtualBG') }}"><button type="button" class="btn btn-primary">Download</button></a>
        </div>
    </div>

</div>
@include('sweetalert::alert')
@endsection