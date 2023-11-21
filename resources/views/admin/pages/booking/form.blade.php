@extends('admin.master')

@section('content')
<form action="{{ route('booking.store') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="">
            <label for="event_date">Event Date</label>
            <input required name="event_date" type="date" class="form-control" id="event_date" placeholder="Choose your day">
        </div>
        <div class="">
            <label for="start_time">Start Time</label>
            <input required name="start_time" type="time" class="form-control" id="start_time" placeholder="Event starting time">
        </div>
        <div class="">
            <label for="end_time">End Time</label>
            <input required name="end_time" type="time" class="form-control" id="end_time" placeholder="Event ending time">
        </div>
    </div>
    <div class="form-group">
        <label for="">Total Amount</label>
        <input required name="total_amount" type="number" class="form-control" id="">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-info bg-success text-dark">Submit</button>
</form>
@endsection
