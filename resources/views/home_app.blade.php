@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="col-md-12">
        <section>
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img
                            alt="First slide"
                            class="img-responsive"
                            src="https://dl.dropboxusercontent.com/s/skfil0rt6e1p7mk/colmena.jpg?dl=0">
                        <div class="carousel-caption">
                            <h3>Lorem</h3>
                            <p>Parrafo</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            alt="Second slide"
                            class="img-responsive"
                            src="https://dl.dropboxusercontent.com/s/no5hswj2xculkou/colmena2.jpg?dl=0">
                        <div class="carousel-caption">
                            <h3>Lorem</h3>
                            <p>Parrafo</p>
                        </div>
                    </div>
                    <div class="item active">
                        <img
                            alt="Third slide"
                            class="img-responsive"
                            src="https://dl.dropboxusercontent.com/s/cjyv9oqygcwambh/colmena3.jpg?dl=0">
                        <div class="carousel-caption">
                            <h3>Lorem</h3>
                            <p>Parrafo</p>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-md-6">
                    <div class="well well-lg">
                        <h4>{{ trans('messages.mission') }}</h4>
                        <p>{{ trans('messages.mission_content') }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well well-lg">
                        <h4>{{ trans('messages.view') }}</h4>
                        <p>{{ trans('messages.mission_content') }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
