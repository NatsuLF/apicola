@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="col-md-12">
        <section>
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($images as $index => $image)
                        <li data-target="#carousel-id" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($images as $index => $image)
                        <div class="item {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ $image }}" alt="" class="img-responsive">
                        </div>
                    @endforeach
                </div>

                <a class="left carousel-control" href="#carousel-id" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
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
                        <h4>{{ trans('messages.vission') }}</h4>
                        <p style="padding-bottom: 40px;">
                            {{ trans('messages.vission_content') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
