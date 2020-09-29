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

                        <a href="{{ $attendedSeminar->link }}" class="btn btn-primary">Join</a>

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

                        <a href="{{ route('registerSeminar', ['ID' => $seminar->id]) }}"
                            class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="row text-center justify-content-center py-3">
        <h1>Submitted Photo</h1>
        <div class="col-md-12">
            @foreach($photos as $photo)
                <img src="{{ url($photo->filePath) }}" alt="" width="200px">
                {{-- <p>User ID: {{ $photo->userID }}</p>
                <p>Photo ID: {{ $photo->id }}</p>
                <p>File Name: {{ $photo->fileName }}</p>
                <p>Title: {{ $photo->title }}</p>
                <p>Story: {{ $photo->story }}</p>
                <p>Aperture: {{ $photo->exifF }}</p>
                <p>Shutter Speed: {{ $photo->exifSS }}</p>
                <p>ISO: {{ $photo->exifISO }}</p>
                <a href="{{ route('getfile', $photo->fileName) }}">
                    <button>Download</button></a>
                <br> --}}
            @endforeach
        </div>
    </div>

</div>
@endsection
