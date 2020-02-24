@extends('layouts.master')
@section('title')
  Add User | {{config('app.name')}}
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="card" style="margin-top:50px;">
          <div class="card-body">
            <h4 class="card-title">Add User</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <form action="{{route('users.add')}}" method="POST">
              @csrf
              <div class="form-group @error('name') has-danger @enderror">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{old('name')}}">
              </div>
              @error('name')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              <div class="form-group @error('email') has-danger @enderror">
                <label for="email">Email address</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
              </div>
              @error('email')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              <div class="form-group @error('password') has-danger @enderror">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
