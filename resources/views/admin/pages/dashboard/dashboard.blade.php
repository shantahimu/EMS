@extends('admin.master')

@section('content')
        <!-- to count the number of  student -->

        <div class="row">
            {{-- <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">{{$users->count()}}</h3>
                                <p class="mb-2">Total Number of Customers</p>
                                <div class="mb-0">
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle text-success">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2 font-weight-bold">{{$events->count()}}</h3>
                                <p class="mb-2"><strong>Total Number of Events</strong></p>
                                <div class="mb-0"></div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-middle text-success">
                                        <path d="M12 20V14M19 14v6M5 14v6M12 4l8-8-1.5-1.5L12 1 4.5 4.5 3 3z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2"><b>{{$services->count()}}</b></h3>
                                <p class="mb-2"><b>Total Number of Services</b></p>
                                <div class="mb-0">
                                    <!-- <span class="badge badge-soft-success me-2"> +5.35% </span>
                                    <span class="text-muted">Since last week</span> -->
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <!-- House Icon SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-middle text-success">
                                        <path d="M12 20V10M19 16V20H5V16M12 20L12 10 12 20Z" />
                                    </svg>
                                    <!-- House Icon SVG -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
@endsection