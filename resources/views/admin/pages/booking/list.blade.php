@extends('admin.master')

@section('content')

<h1>Booking</h1>

<a href= "{{route('booking.create')}}"type ="button" class="btn btn-success bg-info text-dark">Select</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">List</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">E-mail</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

@endsection