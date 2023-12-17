@extends('admin.master')

@section('content')
    <form action="{{ route('service.store') }}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="service_name">Service Name</label>
            <input required name="service_name" type="text" class="form-control" id="service_name" placeholder="Service Name">
            @error('service_name')
                <div class ="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress">Description</label>
            <input name="description" type="text" class="form-control" id="inputAddress" placeholder="">
        </div>
        <div class="form-group">
            <label for="inputAddress">Service Price</label>
            <input name="service_price" type="number" class="form-control" id="inputAddress" placeholder="">
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
