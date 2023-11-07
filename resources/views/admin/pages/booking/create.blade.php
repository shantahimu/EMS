@extends('admin.master')

@section('content')
<form action ="{{route('booking.store')}}"method = 'post'>
  @csrf
<form>
    <div class="form-row">
      <div class="form-group">
        <label for="inputEmail4">Booking ID</label>
        <input name="booking_id" type="booking_id" class="form-control" id="inputEmail4" placeholder="">
      </div>
      <div class="form-group">
        <label for="inputPassword4">Event Date</label>
        <input name="event_date" type="date" class="form-control" id="inputPassword4" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Start Time</label>
      <input name="start_time" type="time" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddress2">End Time</label>
      <input name="end_time" type="time" class="form-control" id="inputAddress2" placeholder="">
    </div>
    <div class="form-row">
      <div class="form-group">
        <label for="inputCity">Total Amount</label>
        <input name="total_amount" type="number" class="form-control" id="inputCity">
      </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-info bg-success text-dark">Submit</button>
  </form>

@endsection 