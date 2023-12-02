@extends('admin.master')

@section('content')


<div class="container">
  <div class="row">
    <form action ="{{route('event.update', $events->id)}}"method = 'post' enctype="multipart/form-data">>
      @csrf
      @method('put')
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
          <input name="event_description" type="text" class="form-control" id="">
        </div>
        <div class="custom-file">
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label><br>
            <input required name="event_image" type="file" class="custom-file-input" id="validatedCustomFile" required>
            @error('event_image')
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
  </div>
</div>
@endsection