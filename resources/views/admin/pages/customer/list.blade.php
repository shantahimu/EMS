@extends('admin.master')

@section('content')

<h1>Customer</h1>
<a href= "{{route('customer.form')}}"type ="button" class="btn btn-info bg-info text-dark">Add</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">List</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Contact No</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $key=>$cutomer)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <!-- <th scope="row">{{$cutomer->id}}</th> -->
      <td>{{$cutomer->first_name}}</td>
      <td>{{$cutomer->last_name}}</td>
      <td>{{$cutomer->gmail}}</td>
      <td>{{$cutomer->contact_no}}</td>
      <td>{{$cutomer->address}}</td>
      <td>{{$cutomer->city }}</td>
      <td>
        <a herf="" class= "btn btn-success">Edit</a>
        <a herf="" class= "btn btn-primary">View</a>
        <a herf="" class= "btn btn-danger">Delete</a>
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>
  {{$customers->links()}}
@endsection