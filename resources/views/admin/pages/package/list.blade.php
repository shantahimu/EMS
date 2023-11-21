@extends('admin.master')
@section('content')

<h1>Packages </h1>

<a href= "{{route('package.form')}}"type ="button" class="btn btn-info bg-info text-dark">Add</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Package ID</th>
        <th scope="col">Package Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach($packages as $key=> $package)
  <tr>
    <th scope="row">{{$key+1}}</th>
     <!-- <th scope="row">{{$package->id}}</th> -->
    <td>{{$package->name}}</td>
    <td>{{$package->description}}</td>
    <td>{{$package->price}} .BTD</td>
    <td>
      <a herf="" class= "btn btn-success">Edit</a>
      <a herf="" class= "btn btn-primary">View</a>
      <a herf="" class= "btn btn-danger">Delete</a>
    </td>
  </tr>  
  
  @endforeach
    
  </tbody>
</table>
{{$packages->links()}}
    </tbody>
  </table>
  @endsection 