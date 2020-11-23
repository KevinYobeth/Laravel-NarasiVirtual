@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="text-center">Hana Madness</h1>
    <table class="table table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Trans ID</th>
                <th scope="col">Name</th>
                <th scope="col">Verified</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hanas as $hana)
            <tr>
                <th scope="row">{{$loop->index + 1 }}</th>
                <td>{{ $hana->transactionID }}</td>
                <td>{{ $hana->name }}</td>
                <td>{{ $hana->verified ? "True" : "False" }}</td>
                <td> <a href="{{ route('transDetail', ["transID" => $hana->transactionID]) }}"><button type="button"
                            class="btn btn-info">Info</button></a> </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <h1 class="pt-5 text-center">Amanda Margareth</h1>

    <table class="table table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Trans ID</th>
                <th scope="col">Name</th>
                <th scope="col">Nama Rekening</th>
                <th scope="col">Verified</th>
                <th scope="col">Verify Payment</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($amandas as $amanda)
            <tr>
                <th scope="row">{{$loop->index + 1 }}</th>
                <td>{{ $amanda->transactionID }}</td>
                <td>{{ $amanda->name }}</td>
                <td>{{ $amanda->namaRekening }}</td>
                <td>{{ $amanda->verified ? "True" : "False" }}</td>
                <td><a href="{{ route('verify', ['transID'=> $amanda->transactionID]) }}" type="button"
                        class="btn btn-success">Verify</a></td>
                <td> <a href="{{ route('transDetail', ["transID" => $amanda->transactionID]) }}"><button type="button"
                            class="btn btn-info">Info</button></a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <form class="pt-5" action="{{ route('adminMotd') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="bold" for="landMessage">Landing Page Message</label>
            <input class="form-control" type="text" name="landMessage" id="landMessage"
                value="{{ $motds[0]->message }}">
        </div>

        <div class="form-group">
            <label class="bold" for="landLink">Landing Page Link</label>
            <input class="form-control" type="text" name="landLink" id="landLink" value="{{ $motds[0]->link }}">
        </div>

        <br>

        <div class="form-group">
            <label class="bold" for="liveMessage">Live Message</label>
            <input class="form-control" type="text" name="liveMessage" id="liveMessage"
                value="{{ $motds[1]->message }}">
        </div>

        <div class="form-group">
            <label class="bold" for="liveLink">Live Link</label>
            <input class="form-control" type="text" name="liveLink" id="liveLink" value="{{ $motds[1]->link }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@include('sweetalert::alert')
@endsection