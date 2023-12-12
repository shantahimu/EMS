@extends('admin.master')

@section('content')

<h1>Event</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Booking ID</th>
        <th scope="col">User ID</th>
        <th scope="col">Event</th>
        <th scope="col">Guest</th>
        <th scope="col">Location</th>
        <th scope="col">Remarks</th>
        <th scope="col">Status</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bookings as $key=> $booking)
    <tr>
      <th scope="row">{{$key+1}}</th>
     
      <td>{{$booking->user_id}}</td>
      <td>{{$booking->event->event_name}}</td>
      <td>{{$booking->guest}}</td>
      <td>{{$booking->location}}</td>
      <td>{{$booking->remarks}}</td>
      <td>{{$booking->status}}</td>
      <td>{{$booking->price}}.BDT</td>
      <td class="col-3">
        <a class= "btn btn-success" href="{{route('update',$booking->id)}}">Update</a>
        <a class= "btn btn-primary" href="">View</a>  
      </td>
    </tr>  

    
    @endforeach
      
    </tbody>
  </table>
  
@endsection