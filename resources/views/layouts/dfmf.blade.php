<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/dashboard/app.css') }}">

    @yield('stylesheets')
</head>
<body>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        @yield('content')
    </div>
    <div class="col-md-2">
        @yield('tags')
    </div>

    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('components/summernote/dist/summernote.js') }}"></script>
    <script src="{{ asset('components/summernote/lang/summernote-es-ES.js') }}"></script>

    @yield('javascripts')

    <script>
        $('#summernote').summernote({
            height: 400,
            minHeight: null,
            maxHeight: null,
            lang: 'es-ES'
        });

        $("#estado").change(function() {
          var message = $(this).is(':checked') ? 'Publicar' : 'Guardar como borrador'

          $('#borrador').html(message);
        });

        $('#date').datetimepicker({
            format: 'YYYY-MM-DD',
            viewMode: 'days',
            useCurrent: false,
            minDate: moment().add(0, 'days')
        });
    </script>
</body>
</html>
