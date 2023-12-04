@extends('admin.master')
@section('content')

<form action="{{ route('package.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="package_name">Package Name</label>
        <label for="eventPackage">Select Event Package:</label>
        <select class="form-control" name="package_name" id="eventPackage" required>
            <option value="" disabled>Select a Package</option>
            <option value="basic">1. Basic Package</option>
            <option value="standard">2. Standard Package</option>
            <option value="premium">3. Premium Package</option>
            <option value="wedding">4. Wedding Package</option>
            <option value="corporate">5. Corporate Package</option>
            <option value="birthday">6. Birthday Party Package</option>
            <option value="holiday">7. Holiday Party Package</option>
            <!-- Add more options for other packages as needed -->
        </select>
        @error('eventPackage')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input required name="description" type="text" class="form-control" id="price" placeholder="Enter Description">
    </div>
    <div class="form-group">
        <label for="price">Package Price</label>
        <input required name="price" type="number" class="form-control" id="price" placeholder="Enter Price">

        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-info bg-info text-dark" type="submit" >Submit</button>
</form>

@endsection