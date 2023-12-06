@extends('admin.master')

@section('content')


<div class="container">
  <div class="row">
    <form action ="{{route('event.view', $events->id)}}"method = 'post' enctype="multipart/form-data">>
      @csrf
      <div class="form-group">
        <label for="event_name">Event Name</label>
        <input required name="event_name" type="text" class="form-control" id="event_name" placeholder="Event Name"> 
        @error('event_name')
      <div class ="alert alert-danger">{{$message}}</div>
      @enderror
      </div>
      <div class="form-row">
        <div class="form-group 2">
          <label for="inputContactNumber">Description</label>
          <input name="event_description" type="text" class="form-control" id="event_description" placeholder="Write about event description">
        </div>
        <div class="form-group 2">
          <label for="inputContactNumber">Event Price</label>
          <input name="min_price" type="text" class="form-control" id="event_price" placeholder="event_price" required>
        
        </div>
        <div class="form-group 2">
          <label for="inputContactNumber">Event Price</label>
          <input name="max_price" type="text" class="form-control" id="event_price" placeholder="event_price" required>
          
        </div>
        <div class="custom-file">
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label><br>
            <input required name="event_image" type="file" class="custom-file-input" id="validatedCustomFile" required>
            <img src="{{ asset('uploads/' . $events->event_images) }}" alt="Service Image" style="max-width: 300px;">
            @error('event_image')
              <div class ="alert alert-danger">{{$message}}</div>
              @enderror
          </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection