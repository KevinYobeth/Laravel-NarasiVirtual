@extends('layouts.app')

@section('title', __('NARASI 2020 - Claim E-Certificate'))
@section('content')
<div class="container">
    <h1 class="text-center mt-2">Your E-Certificate</h1>

    <div class="row d-flex justify-content-center">
        <div class="col-md-12 mb-5 text-center">
            <a href="{{ route('downZip', ['folderName' => $folderName]) }}">
                <button class="btn btn-dark" type="button">Download as ZIP</button>
            </a>
            <a href="{{ route('emailMe', ['folderName' => $folderName]) }}">
                <button class="btn btn-dark" type="button">Email Me</button>
            </a>
        </div>

        @foreach ($certifs as $certif)
        @if (!str_ends_with($certif, '.zip'))
        <div class="col-md-8 mb-5 text-center">
            <img class="img-fluid mb-3" src="{{ asset(str_replace('public', 'storage', $certif)) }}" alt="">
            <a href="{{ route('downCertificate', ['filepath' => $certif]) }}"><button class="btn btn-primary"
                    type="button">Download
                    Certificate</button></a>
        </div>
        @endif
        @endforeach
    </div>


</div>

@include('sweetalert::alert')
@endsection