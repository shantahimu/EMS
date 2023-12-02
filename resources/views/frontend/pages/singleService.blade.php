@extends('frontend.master')

@section('content')

<div class="container pt-3 mt-5">
    <div class="row">
       
        <div class="col-md-12">
            <div class="mt-5">
                <div class="row">
                    <div class="col-6">
                <img class="card-img-top" height="400" src="{{ url('/uploads/', $services->images) }}" alt="Card image cap">

                    </div>
                </div>
                <div class="">
                    <h5 class="card-title">Service Details</h5>
                    <p class="card-text">{{ $services->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $services->service }}</li> 
                    <li class="list-group-item">{{ $services->service_price }}</li>
                </ul>
                <div class="">
                    <a class="btn btn-primary" href="{{route('booking', $services->id)}}">Book Now</a>
                </div>
            </div>
        </div>
       
    </div>
</div>

