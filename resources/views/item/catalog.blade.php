@extends('layouts.master')

@section('title', 'Catalogo')

@section('content')
    @foreach ($items as $item)
        <div class="well" id="{{ $item->slug }}">
            <div class="row">
                <div class="col-md-6">
                    @include('shared.item_description')

                    <a class="btn btn-info" href="{{ url('catalog' . '/' . $item->slug) }}">
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
