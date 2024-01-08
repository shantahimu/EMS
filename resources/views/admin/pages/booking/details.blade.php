@extends('admin.master')

@section('content')

<div class="mb-3">
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Booking ID</th>
            <th scope="col">Service </th>
            <th scope="col">Event</th>
        </tr>
    </thead>
    <tbody>
        @foreach($booking_details as $key => $item)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $item->booking_id }}</td>
                <td>{{ $item->service->services}}</td>
                <td>{{ $item->event_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection



