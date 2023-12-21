@extends('admin.master')

@section('content')


{{-- <a href= "{{route('customer.form')}}"type ="button" class="btn btn-info bg-info text-dark">Add</a> --}}

<table class="table">
    <thead>
      <tr>
        <th scope="col">List</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">E-mail</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customer as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <!-- <th scope="row">{{$item->id}}</th> -->
      <td>{{$item->name}}</td>
      <td><img src="{{ url('uploads/', $item->image) }}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" /></td>
      <td>{{$item->email}}</td>
      <td>
        <a herf="" class= "btn btn-success">Edit</a>
        <a herf="" class= "btn btn-primary">View</a>
        <a herf="" class= "btn btn-danger">Delete</a>
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>

@endsection