@extends('admin.master')

@section('content')

<h1>Booking</h1>

<a href= "{{route('booking.form')}}"type ="button" class="btn btn-success bg-info text-dark">Select</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Booking ID</th>
        <th scope="col"> Event Date </th>
        <th scope="col">Start Time</th>
        <th scope="col">End Time</th>
        <th scope="col">Total Amount</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bookings as $key=> $booking)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <!-- <th scope="row">{{$booking->id}}</th> -->
      <td>{{$booking->event_day}}</td>
      <td>{{$booking->event_starts}}</td>
      <td>{{$booking->event_ends}}</td>
      <td>{{$booking->amount}} .BTD</td>
      <td>
        <a herf="" class= "btn btn-success">Edit</a>
        <a herf="" class= "btn btn-primary">View</a>
        <a herf="" class= "btn btn-danger">Delete</a>
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>
  {{$bookings->links()}}

@endsection