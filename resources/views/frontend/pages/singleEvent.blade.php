@extends('frontend.master')

@section('content')

<div class="container pt-3 mt-5">
    <div class="row">
       
        <div class="col-md-12">
            <div class="mt-5">
                <div class="row">
                    <div class="col-6">
                        <img class="card-img-top" height="400" src="{{ url('uploads/',$events->event_image) }}" alt="Card image cap">
                    </div>
                </div>
                <div class="">
                    <h5 class="card-title">Event</h5>
                    <p class="card-text">{{ $events->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $events->event_name }}</li> 
                    <li class="list-group-item">{{ $events->event_description }}</li>
                </ul>
                <div class="">
                    <a class="btn btn-primary" href="{{route('book.now', $events->id)}}">Book Now</a>
                </div>
            </div>
        </div>
       
    </div> @endsection