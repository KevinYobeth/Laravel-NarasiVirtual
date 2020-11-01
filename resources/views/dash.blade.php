@extends('layouts.app')

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

    {{-- <span class="badge badge-pill badge-success">Berbayar</span> </p> --}}

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
        @endforeach

        @if(count($seminars) > 0)
        <h1 class="montserrat bold col-md-8 text-center">AVAILABLE SEMINARS</h1>
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
        <div class="d-md-none">
            <h1>Hello</h1>
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
                    {{-- <a href="{{ route('registerSeminar', ['ID' => $seminar->id]) }}">
                    <button type="button " class="btn btn-dark">Verifying</button>
                    </a> --}}
                </div>

            </div>

        </div>
        <div class="d-md-none">
            <h1>Hello</h1>
        </div>
        @endforeach

        <p>Tips: Don't share your zoom link because it is unique to your user ID!</p>
    </div>

</div>
@endsection