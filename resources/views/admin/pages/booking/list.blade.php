@extends('admin.master')

@section('content')
    <div class="mb-3">


        <button class="btn btn-success" onclick="printContent('printDiv')">Print</button>
    </div>

    <div id="printDiv">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">List</th>
                    <th scope="col">Booking ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Event</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Event Dates</th>
                    <th scope="col">Location</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Status</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $key => $booking)
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
                        <td>{{ $booking->payment_status }}</td>
                        <td>{{ $booking->transaction_id }}</td>
                        <td class="col-3">
                            <a class="btn btn-success" href="{{ route('update', $booking->id) }}">Update</a>
                            <a class="btn btn-primary" href="{{ route('booking.details') }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('yourJsCode')
    <script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
@endpush
