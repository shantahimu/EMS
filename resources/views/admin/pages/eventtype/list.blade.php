@extends('admin.master')

@section('content')

<h1>Event </h1>

<a href= "{{route('eventtype.create')}}"type ="button" class="btn btn-info bg-info text-dark">Select</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">Event_ID</th>
        <th scope="col">Event_Name</th>
        <th scope="col">Event_Date</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($event_types as $key=> $eventtype)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$eventtype->event_name}}</td>
      <td>{{$eventtype->event_date}}</td>
      <td>{{$eventtype->event_description}}</td>
      <td>{{$eventtype->status}}</td>
      <td>{{$eventtype->action}}</td>
      <td>
        <a herf="" class= "btn btn-success">Edit</a>
        <a herf="" class= "btn btn-primary">View</a>
        <a herf="" class= "btn btn-danger">Delete</a>
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>
  {{$event_types->links()}}
@endsection