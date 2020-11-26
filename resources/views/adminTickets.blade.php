@extends('layouts.app')
@section('title', __('NARASI 2020 - Admin'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                @foreach ($events as $event)
                <a href="{{ route('adminView', ['slug' => $event->slug]) }}"
                    class="list-group-item list-group-item-action {{ request()->is('admin/ticket/' . $event->slug) ? 'active' : '' }}">{{ $event->eventName }}</a>
                @endforeach
            </div>

            @if ($eventDetail != null)
            @if ($eventDetail->status)
            <a href="{{ route('adminTicketStatus', ['slug' => $eventDetail->slug]) }}"><button type="button"
                    class="btn btn-success btn-block mt-4">Form Opened</button></a>
            @else
            <a href="{{ route('adminTicketStatus', ['slug' => $eventDetail->slug]) }}"><button type="button"
                    class="btn btn-danger btn-block mt-4">Form Closed</button></a>
            @endif
            @endif
        </div>

        <div class="col-md-8">
            @if ($eventDetail != null)
            <h1 class="serif bold">{{ $eventDetail->eventName }}</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Instansi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($tickets != null)
                    @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $ticket->name }}</td>
                        <td>{{ $ticket->NIM }}</td>
                        <td>{{ $ticket->instansi }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection