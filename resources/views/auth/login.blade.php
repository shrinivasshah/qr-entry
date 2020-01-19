@extends('layouts.master')
@section('title')
  Welcome to {{config('app.name')}}
@endsection
@section('content')
  <div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-5">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Login</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <form action="{{route('auth.login')}}" method="POST">
              @csrf
              <div class="form-group @error('email') has-danger @enderror">
                <label for="email">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
              </div>
              <div class="form-group @error('password') has-danger @enderror">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
