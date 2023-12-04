@extends('frontend.master')
@section('content')

  <div class="card col-md-12">
    <div class="card-body mt-5">
      <h5 class="card-title">{{$singleevent->event_name}}</h5>
      <p class="card-text">{{$singleevent->event_description}}</p>
    </div>
    <img class="card-img-bottom" src="{{ url('/uploads/', $singleevent->images) }}" alt="Card image cap">
  </div>

@endsection