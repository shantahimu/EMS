@extends('admin.master')

@section('content')

<h1>Our Services </h1>
<a href= "{{route('servicecategory.form')}}"type ="button" class="btn btn-info bg-info text-dark">Add</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Service Category ID</th>
        <th scope="col">Service Category Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action </th>

      </tr>
    </thead>
    <tbody>
      @foreach($service_categories as $key=> $service_category)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$service_category-> service_id }}</td>
      <td>{{$service_category-> services }}</td>
      <td>{{$service_category-> description}}</td>
      <td>{{$service_category-> image}}</td>

      <td>
        <a herf="" class= "btn btn-success">Edit</a>
        <a herf="" class= "btn btn-primary">View</a>
        <a herf="" class= "btn btn-danger">Delete</a>
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>
  {{$service_categories->links()}}
@endsection