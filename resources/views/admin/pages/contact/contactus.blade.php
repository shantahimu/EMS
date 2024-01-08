@extends('admin.master')

@section('content')

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">List</th>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $key=>$contact)

    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$contact->user_id}}</td>
      <td>{{$contact->name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->subject}}</td>
      <td>{{$contact->message}}</td>
      

    </tr>
    @endforeach
  </tbody>
</table>

@endsection