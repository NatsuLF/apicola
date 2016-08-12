@extends('layouts.master')

@section('title', 'Catalogo')

@section('javascripts')
    <script>
        $(function() {
            $('.carousel').carousel({
                interval: 5000,
                pause: 'hover'
            })
        });
    </script>
@endsection

@section('content')
    <div class="well">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-default" href="{{ url()->previous() . '#' . $item->slug }}">
                    {{ trans('messages.btn_go_back_item') }}
                </a>
                <h4>{{ $item->name }}</h4>

                <label>{{ trans('messages.description') }}</label>
                <p>{{ $item->description }}</p>

                <label>{{ trans('messages.price') }}</label>
                <p>{{ '$ ' . $item->price }}</p>

                <div class="btn-buy">
                    <button type="button" class="btn btn-success">
                        <i class="fa fa-paypal fa-lg" aria-hidden="true"></i> {{ trans('messages.btn_buy_now') }}
                    </button>

                    <button type="button" class="btn btn-info">
                        <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> {{ trans('messages.btn_add_to_car') }}
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                @if (count($item->images) > 1)
                    <div id="carousel-id" class="carousel slide" data-ride="carousel" style="height: 400px; margin: 0 auto">
                        <ol class="carousel-indicators">
                            @foreach ($item->images as $index => $image)
                                <li data-target="#carousel-id" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            @foreach ($item->images as $index => $image)
                                <div class="item {{ $index === 0 ? 'active' : '' }}">
                                    <img style="width: 100%; height: 400px;" src="{{ $image->url }}" alt="{{ $item->name }}">
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
                @else
                    <img src="{{ $item->images[0]->url }}" alt="{{ $item->name }}" class="img-responsive" style="width: 100%; height: 400px;">
                @endif
            </div>
        </div>
    </div>
@endsection