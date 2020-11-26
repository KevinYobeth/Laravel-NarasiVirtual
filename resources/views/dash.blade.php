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

        @if(count($attendedSeminars) > 0)
        <h1 class="montserrat bold col-md-8 text-center">REGISTERED SEMINAR</h1>
        @endif

        @foreach($attendedSeminars as $attendedSeminar)
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
            <p>Tip: Don't share your zoom link because it's unique to your user ID! Only 1 user per account will be
                allowed to join.</p>
        </div>
    </div>

</div>
@include('sweetalert::alert')
@endsection