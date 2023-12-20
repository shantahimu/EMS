@extends('frontend.master')
@section('content')
    <style>
        .button-container {
            text-align: center;
            margin-top: 50px;
        }
    </style>

    <form action="{{ route('booking.submit') }}" method="post">
        @csrf
        <div class="row justify-content-center mt-5 pt-6">
            <div class="card col-md-6 mt-5">
                <img class="card-img-bottom" style="object-fit: cover; width: 100%; height: 300px;"
                    src="{{ url('uploads/', $singleevent->event_image) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $singleevent->event_name }}</h5>
                    <p class="card-text">{{ $singleevent->event_description }}</p>
                    <h5 class="card-number"> Price Range:</h5>
                    <p class="card-text">{{ $singleevent->min_price }}-{{ $singleevent->max_price }} .BDT</p>
                </div>


                <h5>Select Services:</h5>
                @foreach ($services as $service)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" value="{{ $service->id }}">
                        <label class="form-check-label" for="service">
                            {{ $service->services }} - <input type="hidden" id="service_price"
                                value="{{ $service->service_price }}">{{ $service->service_price }}/-
                        </label>
                    </div>
                @endforeach
                <input step="visibility:none';" type="hidden" class="card-title" name="event_name"
                    value="{{ $singleevent->id }}" />
                <hr>
                <h5>Calculated Price: <span id="calculated_price">Please input guest number.</span></h5>
                <hr>
                <div class="form-outline md-6" style="width: 22rem;">
                    <label class="form-label" for="form2">Enter number of guest</label>
                    <input required name="guest" id="guest" type="number" class="form-control" onkeyup="amount()"/>

                </div>
                <div class="form-group 2">
                    <label for="inputContactNumber">Appointment Date</label>
                    <input name="apponitment_date" type="date" class="form-control" id="event_price" placeholder=""
                        required>

                </div>
                <div class="form-group 2">
                    <label for="inputContactNumber">Event Starting Date</label>
                    <input name="start_date" type="date" class="form-control" id="event_price" placeholder="" required>

                </div>
                <div class="form-group 2">
                    <label for="inputContactNumber">Event Ending Date</label>
                    <input name="end_date" type="date" class="form-control" id="event_price" placeholder="" required>
                </div>

                <div class="form-outline md-6" style="width: 22rem;">
                    <label class="form-label" for="form2">Location</label>
                    <input required name="location" value="" type="text" id="form2" class="form-control" />

                </div>
                <div class="form-outline md-6" style="width: 22rem;">
                    <label class="form-label" for="form2">Remarks </label>
                    <input required name="remarks" value="" type="text" id="form2" class="form-control" />

                </div>
                <div class="mt-4 text-align-center">
                    <button type="submit" class="col-12 mb-4 btn btn-primary">Get Quote</button>
                </div>

            </div>
        </div>
    </form>

    <script>
        function amount(){
            var service_price = document.getElementById('service_price').value;
            var guest = document.getElementById('guest').value;
            var total = guest * service_price
            var calculated_price = document.getElementById('calculated_price').innerHTML=total;
        }
    </script>
@endsection
