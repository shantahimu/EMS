@extends('admin.master')

@section('content')

<h1>Insert Service </h1>

<form action="{{route('service.store')}}" method='post'>
    @csrf
    <div class="form-group">
      <label for="service_name">Service Name</label>
      <input required name="service_name" type="text" class="form-control" id="service_name" placeholder="Service Name">
          @error('service_name')
          <div class ="alert alert-danger">{{$message}}</div>
          @enderror
      </div>
    <div class="form-group">
      <label for="inputAddress">Description</label>
      <input name="description" type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="custom-file">
        <input required name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        @error('image')
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