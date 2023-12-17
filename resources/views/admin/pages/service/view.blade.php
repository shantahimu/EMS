@extends('admin.master')

@section('content')

<h1>View Your Service</h1>

<form action="{{ route('service.view', $services->id) }}" method='post'>
    @csrf
    <!-- Display Service Name -->
    <div class="form-group">
        <label for="service_name">Service Name</label>
        <input value="{{ $services->services }}" required name="service_name" type="text" class="form-control" id="service_name" placeholder="Service Name">
        @error('service_name')
            <div class ="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Display Description -->
    <div class="form-group">
        <label for="inputAddress">Description</label>
        <input value="{{ $services->description }}" name="description" type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="form-group">
        <label for="inputAddress">Service Price</label>
        <input value="{{ $services->service_price}}" name="service_price" type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
</form>

@endsection
