@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(session('status'))
        <div class="col-md-8">
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


    <div class="row justify-content-center">

        @if(count($attendedSeminars) > 0)
        <h1 class="col-md-8 text-center">Registered Seminar</h1>
        @endif

        @foreach($attendedSeminars as $attendedSeminar)
        <div class="col-md-5 py-3">
            <div class="card">
                <h5 class="card-header">Seminar NARASI 2020</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $attendedSeminar->name }}</h5>
                    <p class="card-text">{{ $attendedSeminar->description }} <br> </p>
                    {{-- <span class="badge badge-pill badge-success">Berbayar</span> </p> --}}

                    <a href="{{ $attendedSeminar->link.$uniqueName }}" class="btn btn-primary">Join</a>

                </div>
            </div>
        </div>
        @endforeach

        @if(count($seminars) > 0)
        <h1 class="col-md-8 text-center">Available Seminar</h1>
        @endif

        @foreach($seminars as $seminar)
        <div class="col-md-5 py-3">
            <div class="card">
                <h5 class="card-header">Seminar NARASI 2020</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $seminar->name }}</h5>
                    <p class="card-text">{{ $seminar->description }} <br> </p>

                    <a href="{{ route('registerSeminar', ['ID' => $seminar->id]) }}" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection