@extends('frontend.master')
@section('content')

<div class="row justify-content-center mt-5 pt-6">
  <div class="card col-md-6 mt-5">
    <img class="card-img-bottom" style="object-fit: cover; width: 100%; height: 300px;" src="{{url('uploads/', $singleevent->event_image)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$singleevent->event_name}}</h5>
      <p class="card-text">{{$singleevent->event_description}}</p>
      <h5 class="card-number">{{$singleevent->event_price}}</h5>
    </div>
  </div>
</div>


@endsection