@extends('admin.master')

@section('content')

<h1>Edit Your Service</h1>

<form action="{{route('service.update', $services->id)}}" method='post'>
    @csrf
    @method('put')
    <div class="form-group">
      <label for="service_name">Service Name</label>
      <input value="{{$services->services}}" required name="service_name" type="text" class="form-control" id="service_name" placeholder="Service Name">
          @error('service_name')
          <div class ="alert alert-danger">{{$message}}</div>
          @enderror
      </div>
    <div class="form-group">
      <label for="inputAddress">Description</label>
      <input value="{{$services->description}}" name="description" type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddress">Service Price</label>
      <input value="{{$services->service_price}}" name="service_price" type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="custom-file">
        <input value="{{$services->images}}" required name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
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