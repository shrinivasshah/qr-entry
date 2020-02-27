@if (Auth::check())
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">{{config('app.name')}}</a>
      <button class="navbar-toggler navbar-toggler-right burger-menu" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-primary">
        <ul class="navbar-nav ml-auto">
          @if (Auth::user()->isAdmin())
            <li class="nav-item"><a class="nav-link" href="{{route('users')}}">Users</a> </li>
            <li class="nav-item"><a class="nav-link" href="{{route('entry')}}">Entries</a> </li>
          @endif
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" href="#pk" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
            <ul class="dropdown-menu dropdown-info" aria-labelledby="dropdownMenuButton">
              <li class="dropdown-header">User Actions</li>
              <a class="dropdown-item" href="{{route('auth.logout')}}">Logout</a>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endif
