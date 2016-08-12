@extends('layouts.master')

@section('title', 'Catalogo')

@section('content')
    @foreach ($items as $item)
        <div class="well" id="{{ $item->slug }}">
            <div class="row">
                <div class="col-md-6">
                    <h4>{{ $item->name }}</h4>
                    <label>{{ trans('messages.description') }}</label>
                    <p>{{ $item->description }}</p>

                    <label>{{ trans('messages.price') }}</label>
                    <p>{{ '$ ' . $item->price }}</p>

                    <a class="btn btn-info" href="{{ url('catalogo' . '/' . $item->slug) }}">
                        {{ trans('messages.btn_catalog') }}
                    </a>
                </div>

                <div class="col-md-6">
                    <img src="{{ $item->images[0]->url }}" alt="{{ $item->name }}" class="img-responsive" style="width: 100%; height: 400px;">
                </div>
            </div>
        </div>
    @endforeach
@endsection
