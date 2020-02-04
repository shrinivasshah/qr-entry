@extends('layouts.master')
@section('title')
  Welcome to {{config('app.name')}}
@endsection
@section('content')
  @if (Auth::check())
    <div class="container" style="margin-top:100px;">
      <div class="row justify-content-md-center">
        <div class="col-sm-5">
          <div class="text-center">

            {!! QrCode::size(500)->generate(route('entry.make',Auth::user()->id)) !!}
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection
