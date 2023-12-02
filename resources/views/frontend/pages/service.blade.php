@extends('frontend.master')

@section('content')

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
        @foreach ($services as $service)
        <div class="col-md-3">
            <div class="card mt-5">
                <a href="{{route('single.service',$service->id)}}">
                    <img class="card-img-top" src="{{ url('/uploads/', $service->images) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->services }}</h5>
                        <h5 class="card-title">{{ $service->service_price }}</h5>
                    </div>
                </a>
               
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
