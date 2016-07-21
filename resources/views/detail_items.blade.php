@extends('layouts.master')

@section('title', 'Item')

@section('javascripts')
    <script>
        $(function() {
            $('.carousel').carousel({
                interval: 500,
                pause: 'hover'
            })
        });
    </script>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="">{{ $item->name }}</h4>

                    <small>Descripcion</small>
                    <p>{{ $item->description }}</p>

                    <small>Precio</small>
                    <p>{{ '$ ' . $item->price }}</p>
                </div>

                <div class="col-md-6">
                    <div id="carousel-id" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($item->images as $index => $image)
                                <li data-target="#carousel-id" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            @foreach ($item->images as $index => $image)
                                <div class="item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ $image->url }}" alt="">
                                    <div class="carousel-caption">lorem</div>
                                </div>
                            @endforeach
                        </div>

                        <a class="left carousel-control" href="#carousel-id" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-id" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection