@extends('admin.master')

@section('content')

<a href="{{route('user.form')}}" type="button" class="btn btn-info bg-info text-dark">Create New User</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">List</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
        </tr>
    </thead>

    @foreach ($users as $key=>$singleUser)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$singleUser->name}}</td>
            <td>
                <img style="border-radius: 60px; display: block; margin: 0 auto;" width="70" height="70" src="{{url('uploads/'.$singleUser->image)}}" alt="image">
            </td>
            <td>{{$singleUser->email}}</td>
            <td>{{$singleUser->role}}</td>
        </tr>
    @endforeach
</table>

@endsection
