<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/dashboard/app.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/posts') }}">Panel de administración</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation">
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ url('/user/profile') }}">
                                  <i class="fa fa-btn fa-user"></i> Profile
                              </a>
                          </li>
                          <li class="divider"></li>
                          <li>
                              <a href="{{ url('/logout') }}">
                                  <i class="fa fa-btn fa-sign-out"></i> Logout
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
                        <a href="{{ url('/posts') }}">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Posts
                        </a>
                    </li>
                    <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
                        <a href="{{ url('/tags') }}">
                          <i class="fa fa-tags" aria-hidden="true"></i> Categorias
                        </a>
                    </li>
                    <li role="presentation" class="{{ $controller == 'ItemController' ? 'active' : 'no-active' }}">
                        <a href="{{ url('/items') }}">
                          <i class="fa fa-folder-o" aria-hidden="true"></i> Productos
                        </a>
                    </li>
                    <li role="presentation" class="{{ $controller == 'ActivityController' ? 'active' : 'no-active' }}">
                        <a href="{{ url('activities') }}">
                          <i class="fa fa-bell-o" aria-hidden="true"></i> Actividades
                        </a>
                    </li>
                    <li role="presentation" class="{{ $controller == 'CarouselController' ? 'active' : 'no-active' }}">
                        <a href="{{ url('carousel') }}">
                          <i class="fa fa-picture-o" aria-hidden="true"></i> Carrusel
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-2">
                @if ($controller == 'CarouselController')
                    <form action="{{ url('carousel/upload') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }}

                        <label class="btn btn-default btn-block">
                            Buscar imagen <input type="file" name="image" id="image" style="display: none;">
                        </label>

                        <button type="submit" class="btn btn-primary btn-block">Confirmar</button>
                    </form>

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                @else
                    <a href="{{ $_SERVER['REQUEST_URI'] .'/create' }}" class="btn btn-primary btn-block">Agregar</a>
                @endif
            </div>
        </div>
    </div>

    <script src="components/jquery/dist/jquery.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
