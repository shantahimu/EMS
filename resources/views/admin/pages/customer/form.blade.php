@extends('admin.master')

@section('content')
    <form action="{{ route('customer.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input required name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" >
            @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input required name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name">
            @error('last_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input required name="gmail" type="email" class="form-control" id="email" placeholder="Enter Your E-mail Address">
            @error('gmail')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input required name="address" type="text" class="form-control" id="address" placeholder="Write Down Address">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="">
                <label for="city">City</label>
                <input name="city" type="text" class="form-control" id="city">
            </div>
            <div class="">
                <label for="contact_no">Contact Number</label>
                <input required name="contact_no" type="text" class="form-control" id="contact_no">
                @error('contact_no')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
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
