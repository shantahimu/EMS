@extends('frontend.master')

@section('content')

<div class="container pt-3 mt-5">
<div class="row">
    @foreach ($events as $event)
    <div class="col-sm-6">
      <div class="card mt-5">
        <div class="card-body">
          <h5 class="card-title">{{$event->event_name}}</h5>
          <a href="{{route('single.event', $event->id)}}" class="btn btn-primary">Click for more</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
</div>

@endsection