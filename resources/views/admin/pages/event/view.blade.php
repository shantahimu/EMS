@extends('admin.master')

@section('content')


<div class="container">
  <div class="row">
    <form action ="{{route('event.view', $events->id)}}"method = 'post' enctype="multipart/form-data">
      @csrf
        <div>
          <input  required name="event_image" type="" class="" id="validatedCustomFile" required>
          <img src="{{ asset('uploads/' . $events->event_image) }}" alt="" style="max-width: 300px;">
          @error('event_image')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
      </div>
      
      <div class="form-group">
        <label for="event_name">Event Name</label>
        <input value="{{$events->event_name}}" required name="event_name" type="text" class="form-control" id="event_name" placeholder="Event Name"> 
        @error('event_name')
      <div class ="alert alert-danger">{{$message}}</div>
      @enderror
      </div>
      <div class="form-row">
        <div class="form-group 2">
          <label for="inputContactNumber">Description</label>
          <input value="{{$events->event_description}}" name="event_description" type="text" class="form-control" id="event_description" placeholder="Write about event description">
        </div>
        <div class="form-group 2">
          <label for="inputContactNumber">Event Price</label>
          <input value="{{$events->min_price}}"  name="min_price" type="text" class="form-control" id="event_price" placeholder="event_price" required>
        
        </div>
        <div class="form-group 2">
          <label for="inputContactNumber">Event Price</label>
          <input value="{{$events->max_price}}"  name="max_price" type="text" class="form-control" id="event_price" placeholder="event_price" required> 
        </div>
      <div class="form-group">
      </div>
    </form>
  </div>
</div>
@endsection