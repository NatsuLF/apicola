<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/dashboard/app.css') }}">

    @yield('stylesheets')
</head>
<body>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        @yield('content')
    </div>
    <div class="col-md-3">
        @yield('complement')
    </div>

    @yield('javascripts')
</body>
</html>
