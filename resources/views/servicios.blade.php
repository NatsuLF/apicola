@extends('layouts.master')

@section('title', 'Proyectos y servicios')

@section('content')
    <div class="col-md-12">
        <div class="well">
            <img src="{{ asset('images/projects/working.jpg') }}" class="img-responsive" alt="" style="width: 100%;" />
        </div>
    </div>

    <div class="col-md-6">
        <div class="well">
            <h4>{{ trans('messages.courses') }}</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
            </p>

            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <div class="well">
            <h4>{{ trans('messages.consultation') }}</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
            </p>

            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="well">
        <h4>{{ trans('messages.development_projects') }}</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
            </p>

            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
      </div>

        <div class="well">
            <h4>{{ trans('messages.manual') }}</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
            </p>

            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
                <a class="btn btn-default" href="https://drive.google.com/file/d/0B0qJycjoKzWpR0d4QWlLVnZLSW8/view?usp=sharing" target="_blank">
                    Colmena Hexagonal Modelo Vincent <i class="fa fa-download" aria-hidden="true"></i>
                </a>
            </p>

            <p>
                <a class="btn btn-default" href="https://drive.google.com/file/d/0B0qJycjoKzWpck1kQXB3aW1tbVl6ZW5BY1laaHRfOHY5YWZR/view?usp=sharing" target="_blank">
                    Analisis beneficio costo inversion 20 colmenas <i class="fa fa-download" aria-hidden="true"></i>
                </a>
            </p>
        </div>
    </div>
@endsection
