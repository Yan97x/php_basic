<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf8>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/wp.css')}}">
    <!-- Font Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Phone Market</title>
  </head>
  <body>
    <!-- Content -->
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" style="text-decoration: none;">
            <span class="fa fa-user"></span>&nbsp;Phone Market
          </a>
          <a class="navbar-brand ms-3" href="{{url("/")}}">Home</a>
          <a class="navbar-brand" href="{{url("follow")}}">Follow</a>
          <a class="navbar-brand" href="{{url("documentation")}}">Documentation</a>
          <div class="login">
            @auth     <!--- user is logged in --->
            <span class="white me-2">{{Auth::user()->type}}:{{Auth::user()->name}}</span>
            <form method="POST" action= "{{url('/logout')}}" class="d-inline-block">
                {{csrf_field()}}
                <input type="submit" value="Logout">
            </form>
            @else <!--- user is not logged in --->
            <a href="{{route('login')}}" class="blue">Log in</a>&nbsp;&nbsp;
            <a href="{{route('register')}}" class="blue">Register</a>
            @endauth
          </div>
        </nav> 
      </div>
    </div>
    @yield('content')
  </body>
</html>