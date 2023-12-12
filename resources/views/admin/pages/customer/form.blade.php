@extends('admin.master')

@section('content')
    <form action="{{ route('customer.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="first_name"> Name</label>
            <input required name="name" type="text" class="form-control" id="name" placeholder="Name" >
            @error('name')
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
        </div>
        <button type="submit" class="btn btn-info bg-info text-dark">Submit</button>
    </form>
@endsection
