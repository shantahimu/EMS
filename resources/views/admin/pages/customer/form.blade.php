@extends('admin.master')

@section('content')
<form action ="{{route('customer.store')}}"method = 'post'>
  @csrf
  <div class="form-group">
    <div class="form-group">
      <label for="inputPassword4">First_Name</label>
      <input name="first_name" type="string" class="form-control" id="inputPassword4" placeholder=" " required>
    
      @error('first_name')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror

    </div>
    <div class="form-group">
      <label for="inputPassword4">Last_Name</label>
      <input name="last_name" type="string" class="form-control" id="inputPassword4" placeholder=" " required>
      @error('last_name')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="inputPassword4">G-mail</label>
      <input name="gmail" type="email" class="form-control" id="inputPassword4" placeholder=" " required>
      @error('gmail')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
      <div class="form-group">
        <label for="inputPassword4">Password</label>
        <input name="password" type="string" class="form-control" id="inputPassword4" placeholder=" " required>
        @error('password')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
      @error('address')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="form-row">
      <div class="form-group">
        <label for="inputCity">City</label>
        <input name="city" type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group">
        <label for="inputContactNumber">Contact Number</label>
        <input name="contact_no" type="text" class="form-control" id="inputContactNumber" required>
        @error('contact_no')
    <div class ="alert alert-danger">{{$message}}</div>
    @enderror
      </div>
      <div class="form-group">
        <label for="inputContactNumber">Action</label>
        <input name="action" type="text" class="form-control" id="inputContactNumber" required>
        @error('action')
    <div class ="alert alert-danger">{{$message}}</div>
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