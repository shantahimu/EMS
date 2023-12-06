@extends('admin.master')
@section('content')


<div class="container">
    <div class="row">
      <form action ="{{route('booking.store')}}" method = 'post'>
        @csrf
        <div class="form-group">
          <label for="event_name">User ID</label>
          <input required name="user_id" type="number" class="form-control" id="event_name" placeholder="Event Name"> 
          @error('user_id')
        <div class ="alert alert-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="form-row">
          <div class="form-group 2">
            <label for="inputContactNumber">Event</label>
            <input name="singleevent_id" type="text" class="form-control" id="event_description" placeholder="Write about event description">
          </div>
          <div class="form-group 2">
            <label for="inputContactNumber">Guest</label>
            <input name="guest" type="text" class="form-control" id="event_price" placeholder="event_price" required>
            @error('guest')
                <div class ="alert alert-danger">{{$message}}</div>
                @enderror
          </div>
          <div class="form-group 2">
            <label for="inputContactNumber">Location</label>
            <input name="location" type="text" class="form-control" id="event_price" placeholder="event_price" required>
            @error('location')
                <div class ="alert alert-danger">{{$message}}</div>
                @enderror
          </div>
          <div class="form-group 2">
            <label for="inputContactNumber">Remarks</label>
            <input name="remarks" type="text" class="form-control" id="event_price" placeholder="event_price" required>
            @error('remarks')
                <div class ="alert alert-danger">{{$message}}</div>
                @enderror
          </div>
          <div class="form-group 2">
            <label for="inputContactNumber">Status</label>
            <input name="status" type="text" class="form-control" id="event_price" placeholder="event_price" required>
            @error('status')
                <div class ="alert alert-danger">{{$message}}</div>
                @enderror
          </div>
          <div class="form-group 2">
            <label for="inputContactNumber">Price</label>
            <input name="price" type="text" class="form-control" id="event_price" placeholder="event_price" required>
            @error('price')
                <div class ="alert alert-danger">{{$message}}</div>
                @enderror
          </div>
        <button type="submit" class="btn btn-info bg-info text-dark">Submit</button>
      </form>
    </div>
  </div>

@endsection