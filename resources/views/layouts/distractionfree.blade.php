<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Apicola - @yield('title')</title>

        <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 75px;
                background-image: url({{ asset('images/patterns/tileable_wood_texture.png')  }});
            }

            .well {
                background: #FFF;
                box-shadow: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </body>
</html>
