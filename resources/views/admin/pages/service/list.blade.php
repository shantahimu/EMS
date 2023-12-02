@extends('admin.master')

@section('content')

<h1>Our Services </h1>
<a href= "{{route('service.form')}}"type ="button" class="btn btn-info bg-info text-dark">Add</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Service ID</th>
        <th scope="col">Service Name</th>
        <th scope="col">Description</th>
        <th scope="col">Service Price</th>
        <th scope="col">Image</th>
        <th scope="col">Action </th>

      </tr>
    </thead>
    <tbody>
      @foreach($services as $key=> $service)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <!-- <th scope="row">{{$service->id}}</th> -->
      <td>{{$service->services }}</td>
      <td>{{$service->description}}</td>
      <td>{{$service->service_price}}.BTD</td>
      <td><img style="border-radius: 60px;" width="20%" src="{{url('uploads/',$service->images)}}" alt="image"></td>

      <td class="col-3">
        <a class= "btn btn-success" href="{{route('service.edit', $service->id)}}">Edit</a>
        <a class= "btn btn-primary" href="{{route('service.view', $service->id)}}">View</a>
        <a class= "btn btn-danger" href="{{route('service.delete', $service->id)}}">Delete</a>
      </td>
    </tr>  
    
    @endforeach
      
    </tbody>
  </table>
  {{$services->links()}}
@endsection