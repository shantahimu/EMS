@extends('admin.master')

@section('content')

<form action ="{{route('eventtype.store')}}"method = 'post'>
    @csrf
    </div>
    <div class="form-group">
        <label for="inputState">Event_Name</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>1. Weddings </option>
          <option>2. Conferences</option>
          <option>3. Seminars and Workshops</option>
          <option>4. Trade Shows and Expos</option>
          <option>5. Parties and Celebrations</option>
          <option>6. Concerts and Music Festivals </option>
          <option>7. Sporting Events</option>
          <option>8. Charity Fundraisers </option>
          <option>9. Corporate Meetings</option>
          <option>10. Cultural and Arts Events</option>  
      <input required name="event_name" type="text" class="form-control" id="inputAddress2" placeholder="">
      @error('event_name')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
    </select>
    </div>
    <div class="form-row">
      <div class="form-group ">
        <label for="inputCity">Event_Date</label>
        <input required name="event_date" type="date" class="form-control" id="inputCity">
        @error('event_date')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
      </div>
      <div class="form-group 2">
        <label for="inputContactNumber">Description</label>
        <input name="event_description" type="text" class="form-control" id="">
      </div>
      <div class="form-group ">
        <label for="inputState">Status</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
            <option>1. Planned</option>
            <option>2. Ongoing </option>
            <option>3. Complete</option>
            <input required name="status" type="text" class="form-control" id="inputAddress2" placeholder="">
            @error('status')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
        </select>
      </div>
      <div class="form-group">
        <label for="inputContactNumber">Action</label>
        <input name="action" type="text" class="form-control" id="inputContactNumber" required>
        @error('action')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
      </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-info bg-info text-dark">Submit</button>
  </form>



@endsection