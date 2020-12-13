@extends('layouts.app')

@section('title', __('NARASI 2020 - Claim E-Certificate'))
@section('content')
<div class="container">
    <h1 class="text-center">Claim your E-Certificate!</h1>

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('claimCertificate') }}" method="POST">
                @csrf
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </form>
        </div>
    </div>
</div>

@include('sweetalert::alert')
@endsection