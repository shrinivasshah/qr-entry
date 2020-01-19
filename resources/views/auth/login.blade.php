@extends('layouts.master')
@section('title')
  Welcome to {{config('app.name')}}
@endsection
@section('content')
  <div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Login</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <form>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
