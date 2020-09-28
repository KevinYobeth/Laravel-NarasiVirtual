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

            <br>
            <br>
        @endif
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header">Seminar Mental Health</h5>
                <div class="card-body">
                    <h5 class="card-title">How to Express Yourself</h5>
                    <p class="card-text">Seminar ini berbicara tentang bagaimana cara-cara mengekspresikan diri melalui
                        karya seni. Seminar ini dibawakan oleh <b>Hana Madness</b>.
                        <span class="badge badge-pill badge-success">Berbayar</span> </p>

                    <a href="#" class="btn btn-primary">Daftar</a>
                    <a href="#" class="btn btn-primary">Join</a>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header">Seminar Photography</h5>
                <div class="card-body">
                    <h5 class="card-title">How to take Expressive Photos</h5>
                    <p class="card-text">Seminar ini mengajarkan tentang cara-cara untuk memotret foto secara conceptual
                        untuk mendapatkan ekspresi / perasaan yang ingin didapatkan dari subjek. Seminar dibawakan oleh
                        <b>Amanda Margareth</b>.</p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center justify-content-center py-5">
        <h1>Submited Photo(s)</h1>
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
