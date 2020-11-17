@extends('layouts.app')

@section('content')
<div class="container text-center">

    <h1>Hana Madness</h1>
    <table class="table table-striped">
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

    <h1 class="pt-5">Amanda Margareth</h1>

    <table class="table table-striped">
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

</div>
@include('sweetalert::alert')
@endsection