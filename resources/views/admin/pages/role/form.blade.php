@extends('admin.master')

@section('content')

<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Name</label>
        <input type="name" class="form-control" id="inputEmail4" placeholder="Write your name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Status</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Status">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Action</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>



@endsection