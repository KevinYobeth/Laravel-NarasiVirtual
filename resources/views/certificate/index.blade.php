@extends('layouts.app')

@section('title', __('NARASI 2020 - Claim E-Certificate'))
@section('content')
<div class="container">
    <h1 class="text-center">Claim your E-Certificate!</h1>

    <div class="row d-flex justify-content-center">
        <div class="col-md-6 text-center">
            <form action="{{ route('claimCertificate') }}" method="POST">
                @csrf
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
                <button type="submit" class="btn btn-dark mt-3">Claim</button>
            </form>
        </div>
    </div>
</div>

@include('sweetalert::alert')
@endsection