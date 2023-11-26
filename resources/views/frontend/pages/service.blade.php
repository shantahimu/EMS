@extends('frontend.master')

@section('content')

<div class="container pt-3 mt-5">
    <div class="row">
        @foreach ($services as $service)
        <div class="col-md-3">
            <div class="card mt-5">
                <a href="{{route('single.service',$service->id)}}">
                <img class="card-img-top" src="{{ url('/uploads/', $service->images) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $service->services }}</h5>
                </div></a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Service Price: BDT- 5000/-</li>
                </ul>
                
            </div>
        </div>
        @endforeach
    </div>
</div>
