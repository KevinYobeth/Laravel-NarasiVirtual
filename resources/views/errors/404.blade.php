@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')

@section('image')
<div style="background-image: url('../img/error-bg.jpg');"
    class="absolute pin bg-no-repeat sm:bg-center md:bg-center lg:bg-center">
</div>
@endsection

@section('message', __('Sorry, the page you are looking for could not be found'))