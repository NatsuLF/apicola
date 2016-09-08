<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://shema.org/Blog">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta itemprop="name" content="Blog de Proyecto Apicoal - UCC">
        <meta itemprop="description" content="Blog informativo del Proyecto apicola - UCC">
        <meta itemprop="image" content="https://dl.dropboxusercontent.com/s/qodhyrzlqiimghi/Logo.png?dl=0">

        <meta property="og:url"           content="{{ Request::url() }}" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Proyecto Apicola - UCC" />
        <meta property="og:description"   content="Diseño de colmenas hexagonales modelo Vincent" />
        <meta property="og:image"         content="https://dl.dropboxusercontent.com/s/qodhyrzlqiimghi/Logo.png?dl=0" />

        <title>Proyecto Apicola - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/styles.css') }}">
    </head>
    <body>
        @include('shared.navbar')

        <div class="container body-container">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/textarea.js') }}"></script>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2016 - UCC Leon</p>
                        <p>Proyecto colmenas hexagonales Vincent</p>
                    </div>
                    <div id="footer-resources" class="col-md-6">
                        <p>
                            <a href="https://es-la.facebook.com/people/Colmena-Vincent/100013415431119">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        @yield('javascripts')
    </body>
</html>
