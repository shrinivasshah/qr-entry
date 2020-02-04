@extends('layouts.master')
@section('title')
  Users | {{config('app.name')}}
@endsection
@section('content')
  @if (Auth::check())
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>All Users</h1>
          <a href="{{route('users.add')}}" class="btn btn-primary btn-sm">Add User</a>
        </div>
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach (\App\User::all() as $user)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection
