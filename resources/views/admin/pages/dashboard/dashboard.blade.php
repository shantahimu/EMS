@extends('admin.master')

@section('content')
        <!-- to count the number of  student -->

        <div class="row">
            {{-- <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">{{$booking->count()}}</h3>
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
                <div class="card flex-fill border-success">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2 font-weight-bold">{{$events->count()}}</h3>
                                <p class="mb-2"><strong>Total Number of Events</strong></p>
                                <div class="mb-0"></div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-middle">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
        
            <div class="col-md-4 d-flex">
                <div class="card flex-fill border-success">
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
                                    <!-- Heart Icon SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart align-middle text-success">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21l8.84-8.83a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                    <!-- Heart Icon SVG -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                      
        </div>
@endsection