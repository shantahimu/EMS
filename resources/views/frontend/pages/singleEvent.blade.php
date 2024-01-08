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
        <div class="container mt-5 pt-6">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <img class="img-fluid" style="object-fit: cover; width: 100%; height: 300px;"
                        src="{{ url('uploads/', $singleevent->event_image) }}" alt="Event Image">
                    <div class="mt-4">
                        <h3>{{ $singleevent->event_name }}</h3>
                        <p>{{ $singleevent->event_description }}</p>
                        <p><strong>Price Range:</strong> {{ $singleevent->min_price }} - {{ $singleevent->max_price }} .BDT</p>
                    </div>

                    <h5>Select Services:</h5>
                    @foreach ($services as $service)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="{{ $service->id }}">
                            <label class="form-check-label" for="service">
                                {{ $service->services }} - <input type="hidden" class="service_price" value="{{ $service->service_price }}">{{ $service->service_price }}/-
                            </label>
                        </div>
                    @endforeach
                <input step="visibility:none';" type="hidden" class="card-title" name="event_name"
                    value="{{ $singleevent->id }}" />
                <hr>
                <h5>Calculated Price: <span id="calculated_price"></span></h5>
                <hr>
                <div class="form-outline md-6" style="width: 22rem;">
                    <label class="form-label" for="form2">Enter number of guest</label>
                    <input  name="guest" id="guest" type="number" class="form-control" onkeyup="amount()"/>

                </div>
                <div class="form-group 2">
                    <label for="inputContactNumber">Appointment Date</label>
                    <input name="apponitment_date" type="date" class="form-control" id="event_price" placeholder=""
                        required>
                        @error('appointment_date')
                        <div class ="alert alert-danger">{{$message}}</div>
                        @enderror

                </div>
                <div class="form-group 2">
                    <label for="inputContactNumber">Event Starting Date</label>
                    <input name="start_date" type="date" class="form-control" id="event_price" placeholder="" required>
                    @error('start_date')
                        <div class ="alert alert-danger">{{$message}}</div>
                        @enderror

                </div>
                <div class="form-group 2">
                    <label for="inputContactNumber">Event Ending Date</label>
                    <input name="end_date" type="date" class="form-control" id="event_price" placeholder="" required>
                    @error('end_date')
                        <div class ="alert alert-danger">{{$message}}</div>
                        @enderror
                </div>

                <div class="form-outline md-6" style="width: 22rem;">
                    <label class="form-label" for="form2">Location</label>
                    <input required name="location" value="" type="text" id="form2" class="form-control" />
                    @error('location')
                        <div class ="alert alert-danger">{{$message}}</div>
                        @enderror

                </div>
                <div class="form-outline md-6" style="width: 22rem;">
                    <label class="form-label" for="form2">Remarks </label>
                    <input required name="remarks" value="" type="text" id="form2" class="form-control" />
                    @error('remarks')
                        <div class ="alert alert-danger">{{$message}}</div>
                        @enderror

                </div>
                <div class="mt-4 text-align-center">
                    <button type="submit" class="col-12 mb-4 btn btn-primary">Get Quote</button>
                </div>

            </div>
        </div>
    </form>
    <script>
        function amount() {
            var totalServicePrice = 0;
            var cateringServicePrice = 0;
    
            // Calculate total price for selected services (excluding catering)
            var serviceCheckboxes = document.querySelectorAll('input[name="services[]"]:checked');
            serviceCheckboxes.forEach(function (checkbox) {
                var service_price = parseFloat(checkbox.nextElementSibling.querySelector('.service_price').value);
                
                if (service_price !== 500) {
                    totalServicePrice += service_price;
                } else {
                    cateringServicePrice = 500; 
                }
            });
    
            var guest = document.getElementById('guest').value;
    
         
            if (guest !== '') {
                guest = parseInt(guest);
    
                
                var calculated_price = totalServicePrice + (cateringServicePrice * guest);
                
             
                document.getElementById('calculated_price').innerHTML = calculated_price;
            } else {
                
                document.getElementById('calculated_price').innerHTML = "Please input guest number.";
            }
        }
    
        var checkboxes = document.querySelectorAll('input[name="services[]"]');
        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', amount);
        });
    
     
        document.getElementById('guest').addEventListener('input', amount);
    </script>
       
    
    
@endsection
