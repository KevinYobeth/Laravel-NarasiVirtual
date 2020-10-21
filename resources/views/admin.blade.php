@extends('layouts.app')

@section('content')
<div class="container text-center">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Trans ID</th>
                <th scope="col">Name</th>
                <th scope="col">Nama Rekening</th>
                <th scope="col">Verified</th>
                <th scope="col">Verify Payment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <th scope="row">{{$loop->index + 1 }}</th>
                <td>{{ $transaction->transactionID }}</td>
                <td>{{ $transaction->name }}</td>
                <td>{{ $transaction->namaRekening }}</td>
                <td>{{ $transaction->verified ? "True" : "False" }}</td>
                <td><a href="{{ route('verify', ['transID'=> $transaction->transactionID]) }}" type="button"
                        class="btn btn-success">Verify</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection