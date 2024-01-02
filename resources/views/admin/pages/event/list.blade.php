@extends('admin.master')

@section('content')

<a href= "{{route('event.form')}}"type ="button" class="btn btn-info bg-info text-dark">Add Event</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">Event ID</th>
        <th scope="col">Event Name</th>
        <th scope="col">Description</th>
        <th scope="col"> Price Range</th>
        <th scope="col">Event Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($events as $key=> $event)
    <tr>
      <th scope="row">{{$key+1}}</th>
     
      <td>{{$event->event_name}}</td>
      <td>{{$event->event_description}}</td>
      <td>{{$event->min_price}}-{{$event->max_price}}.BDT</td>
      <td><img style="border-radius: 60px;" width="20%" src="{{url('uploads/',$event->event_image)}}" alt="image"></td>
      <td class="col-3">
        <a class= "btn btn-success" href="{{route('event.edit', $event->id)}}">Edit</a>
         <a class= "btn btn-primary" href="{{route('event.view', $event->id)}}">View</a> 
        {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#eventDetailsModal{{ $event->id }}">
                            View
                        </button> --}}
                        
                        <a class= "btn btn-danger" href="{{route('event.delete', $event->id)}}">Delete</a> 
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>
  {{$events->links()}}
@endsection