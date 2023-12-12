@extends('frontend.master')
@section('content') 

<h2> Search result for:{{request()->search}} found {{$singleevent->count()}} event.</h2>

<style>
    .card {
        height: 100%;
    }
    .card-img-top {
        height: 200px; 
        object-fit: cover;
    }
</style>
<div class="container pt-3 mt-5">
    <div class="row">
        @if($singleevent->count()>0)
        @foreach ($singleevent as $event)
        <div class="col-md-3">
            <div class="card mt-5">
                <a href="{{route('single.view',$event->id)}}">
                    <img class="card-img-top" src="{{url('uploads/', $event->event_image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->event_name}}</h5>
                        <p class="card-text">{{$event->event_description}}</p>
                        <h5 class="card-number">{{$event->event_price}}</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        @else 
        <h5>No such event has found.</h5>
        @endif

    </div>
</div>


@endsection