@extends('layouts.master')
@section('title')
  Entries | {{config('app.name')}}
@endsection
@section('content')
  @if (Auth::check())
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>Today's Entries</h1>
        </div>
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                @foreach (\App\UserEntry::all() as $entry)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$entry->user->name}}</td>
                    <td>{{$entry->created_at->format('H:i A')}}</td>
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
