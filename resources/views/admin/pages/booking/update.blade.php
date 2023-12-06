@extends('admin.master')
@section('content')


<div class="container">
    <div class="row">
      <form action ="{{route('price.update',$booking->id)}}" method = 'post'>
        @csrf
        @method('put')
          <div class="form-group 2">
            <label for="inputContactNumber">Price</label>
            <input name="price" type="text" class="form-control" id="event_price" placeholder="event_price" value="{{$booking->price}}" required>
            @error('price')
                <div class ="alert alert-danger">{{$message}}</div>
                @enderror
          </div>
        <button type="submit" class="btn btn-info bg-info text-dark">Submit</button>
      </form>
    </div>
  </div>

@endsection