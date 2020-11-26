@extends('errors::illustrated-layout')

@section('title', __('Under Maintenance'))
@section('code', '503')

@section('image')
<div style="background-image: url('../img/error-bg.jpg');"
    class="absolute pin bg-no-repeat sm:bg-center md:bg-center lg:bg-center">
</div>
@endsection

@section('message', __($exception->getMessage() ?: 'Service Unavailable'))