@extends('frontend.master')


@section('content')
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="{{ url('uploads/', auth()->user()->image) }}" id="imgProfile"
                                        style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <form action="{{ route('profile.edit', auth()->user()->id) }}"method='get'
                                            enctype="multipart/form-data">
                                            @csrf
                                        <button type="edit" class="btn btn-info bg-info text-dark">Edit</button>
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a
                                            href="javascript:void(0);">{{ auth()->user()->name }}</a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard"
                                        value="Discard Changes"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo"
                                            role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>

                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                        aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ auth()->user()->name }}
                                            </div>

                                        </div>
                                        <hr />

                                        <hr />


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ auth()->user()->email }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Role</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ auth()->user()->role }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel"
                                        aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">List</th>
                    <th scope="col">Date</th>
                    <th scope="col">Event</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($booking as $key => $singleBooking)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $singleBooking->created_at }}</td>
                        <td>{{ $singleBooking->event->event_name }}</td>
                        <td>{{ $singleBooking->price }}</td>
                        <td>{{ $singleBooking->status }}</td>
                        <td>
                            @if ($singleBooking->status == 'processing')
                                <a href="{{ route('Booking_Confirm', $singleBooking->id) }}" type="button" class="btn btn-success">Confirm</a>
                                <a href="{{ route('Booking_Cancel', $singleBooking->id) }}" type="button" class="btn btn-danger">Cancel</a>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
