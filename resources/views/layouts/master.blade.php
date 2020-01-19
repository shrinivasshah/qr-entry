<!doctype html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/paper-kit.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200">
  @yield('css')
</head>
<body>
  @yield('content')
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/paper-kit.min.js"></script>
</body>
</html>
