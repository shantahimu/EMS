@extends('frontend.master')
@section('content')
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('profile.update.view', auth()->user()->id) }}" value="image" method='post'
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="card-title mb-4">
                                <div class="d-flex justify-content-start">
                                    <div class="image-container">
                                        <input type="file" value="{{ $users->image }}" class="from-control"
                                            alt="upload Image" class="rounded-circle" width="150" name="image">
                                        <div class="middle">


                                        </div>
                                    </div>
                                    <div class="userData ml-3">
                                        <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a
                                                href="javascript:void(0);">{{ auth()->user()->name }}</a></h2>
                                        
                                    </div>
                                    <div class="ml-auto">
                                        <input type="button" class="btn btn-primary d-none" id="btnDiscard"
                                            value="" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="basicInfo-tab" data-toggle="tab"
                                                href="#basicInfo" role="tab" aria-controls="basicInfo"
                                                aria-selected="true">Basic Info</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content ml-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                            aria-labelledby="basicInfo-tab">


                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Full Name</label>
                                                </div>
                                                <input name="name" class="col-md-8 col-6"
                                                    value="{{ auth()->user()->name }}">
                                                    @if ($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                            </div>
                                            <hr />

                                            <hr />


                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Email</label>
                                                </div>
                                                <input name="email" class="col-md-8 col-6"
                                                    value="{{ auth()->user()->email }}">
                                                    @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif

                                            </div>
                                        </div>
                                        <hr />


                                        {{-- <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Role</label>
                                            </div>
                                            <input class="col-md-8 col-6" value="{{ auth()->user()->role }}">

                                        </div> --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="connectedServices" role="tabpanel"
                                    aria-labelledby="ConnectedServices-tab">
                                    Facebook, Google, Twitter Account that are connected to this account
                                </div>
                                <button type="update" class="btn btn-info bg-info text-dark">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
