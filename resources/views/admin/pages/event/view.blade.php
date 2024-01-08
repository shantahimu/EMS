@extends('admin.master')

@section('content')
    
    <button type="button" class="btn-bg-info bg-info btn-primary" data-bs-toggle="modal" data-bs-target="#eventDetailsModal">
        View Event Details
    </button>

   
    <div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventDetailsModalLabel">Event Details</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('event.view', $events->id) }}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input required name="event_image" class="form-control" id="validatedCustomFile">
                            <img src="{{ asset('uploads/' . $events->event_image) }}" alt="Event Image"
                                style="max-width: 300px;">
                            @error('event_image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="event_name">Event Name</label>
                            <input value="{{ $events->event_name }}" required name="event_name" type="text"
                                class="form-control" id="event_name" placeholder="Event Name">
                            @error('event_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group 2">
                                <label for="event_description">Description</label>
                                <input value="{{ $events->event_description }}" name="event_description" type="text"
                                    class="form-control" id="event_description" placeholder="Write about event description">
                            </div>
                            <div class="form-group 2">
                                <label for="min_price">Minimum Event Price</label>
                                <input value="{{ $events->min_price }}" name="min_price" type="text" class="form-control"
                                    id="min_price" placeholder="Minimum event price" required>
                            </div>
                            <div class="form-group 2">
                                <label for="max_price">Maximum Event Price</label>
                                <input value="{{ $events->max_price }}" name="max_price" type="text" class="form-control"
                                    id="max_price" placeholder="Maximum event price" required>
                            </div>
                        </div>
                        
                    </form>
                </div>
             
            </div>
        </div>
    </div>
@endsection
