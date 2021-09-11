<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf8>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <title>Fleet Management</title>
	</head>
	<body>
        <!-- Content -->
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{url("/")}}" >Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a class="nav-link" href="{{url("http://s5191915.elf.ict.griffith.edu.au/webAppDev/week6/items/public/client")}}">Client</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{url("https://s5191915.elf.ict.griffith.edu.au/webAppDev/week6/items/public/booking")}}">Booking</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{url("https://s5191915.elf.ict.griffith.edu.au/webAppDev/week6/items/public/return")}}">Return</a>
                            </li>
                          </ul>
                    </div>
                  </nav>
                  <head>
                    <title>@yield('title')</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" type="text/css" href="{{asset('css/wp.css')}}">
                  </head>
                  <body>
                      @yield('content')
                  </body>
            </div>
        </div>
	</body>
</html>
