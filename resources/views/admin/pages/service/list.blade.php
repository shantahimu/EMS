@extends('admin.master')

@section('content')


<a href= "{{route('service.form')}}"type ="button" class="btn btn-info bg-info text-dark">Add Service</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Service ID</th>
        <th scope="col">Service Name</th>
        <th scope="col">Service Price</th>
        <th scope="col">Action </th>

      </tr>
    </thead>
    <tbody>
      @foreach($services as $key=> $service)
    <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{$service->services }}</td>
      <td>{{$service->service_price}}.BTD</td>
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