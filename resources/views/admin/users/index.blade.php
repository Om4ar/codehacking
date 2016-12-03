@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted_user'))

        <p class="alert-danger">{{Session('deleted_user')}}</p>

        @endif


    <h1>Users</h1>

    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
              <th>photo</th>
            <th>name</th>
            <th>Email</th>
              <th>Role</th>
              <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)

          <tr>
            <td>{{$user->id}}
              <td> <img height="50" src="{{$user->photo ? $user->photo->file : '/images/imggg.jpg'}}" alt=""></td>
            <td><a href="{{route('admin.users.edit' , $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
              <td>{{$user->role->name}}</td>
              <td>{{$user->is_active == 1 ? 'Active' : 'Idle' }}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
            @endforeach
        @endif

        </tbody>
      </table>

    @stop