@extends('admin.master')

@section('content')

<h1>Event </h1>

<a href= "{{route('event.form')}}"type ="button" class="btn btn-info bg-info text-dark">Select</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">Event ID</th>
        <th scope="col">Event Name</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($events as $key=> $event)
    <tr>
      <th scope="row">{{$key+1}}</th>
     
      <td>{{$event->event_name}}</td>
      <td>{{$event->event_description}}</td>
      <td>{{$event->status}}</td>
      <td>
        <a herf="" class= "btn btn-success">Edit</a>
        <a herf="" class= "btn btn-primary">View</a>
        <a herf="" class= "btn btn-danger">Delete</a>
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>
  {{-- {{$events->links()}} --}}
@endsection