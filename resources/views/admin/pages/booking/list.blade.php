@extends('admin.master')

@section('content')

<div class="mb-3">
    <button type="button" class="btn btn-sm btn-success" id="printButton">
        Download Booking Details
    </button>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Booking ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Event</th>
            <th scope="col">Guest</th>
            <th scope="col">Appointment Date</th>
            <th scope="col">Event Starting Date</th>
            <th scope="col">Event Ending Date</th>
            <th scope="col">Location</th>
            <th scope="col">Remarks</th>
            <th scope="col">Status</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $key => $booking)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $booking->user_id }}</td>
                <td>{{ $booking->event->event_name }}</td>
                <td>{{ $booking->guest }}</td>
                <td>{{ $booking->appointment_date }}</td>
                <td>{{ $booking->start_date }}</td>
                <td>{{ $booking->end_date }}</td>
                <td>{{ $booking->location }}</td>
                <td>{{ $booking->remarks }}</td>
                <td>{{ $booking->status }}</td>
                <td>{{ $booking->price }}.BDT</td>
                <td class="col-3">
                    <a class="btn btn-success" href="{{ route('update', $booking->id) }}">Update</a>
                    <a class="btn btn-primary" href="#">View</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

<!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Your existing Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript for Print and Download Functionality -->
<script>
    $(document).ready(function(){
        $('#printButton').click(function(){
            var printableContent = $('.table').clone().wrap('<div></div>').parent().html();
            var blob = new Blob([printableContent], { type: 'text/html' });
            var url = URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.href = url;
            a.download = 'booking_details.html';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    });
</script>
