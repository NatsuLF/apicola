@extends('layouts.dfm')

@section('title', 'Editar producto')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/summernote/dist/summernote.css') }}">
@endsection

@section('javascripts')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('components/summernote/dist/summernote.js') }}"></script>
    <script src="{{ asset('components/summernote/lang/summernote-es-ES.js') }}"></script>
    <script src="{{ asset('js/items.js') }}"></script>
@endsection

@section('content')
    <a href="{{ url('items') }}">Regresar</a>
    <form action="{{ '/items/' . $item->id }}" id="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        <input type="hidden" name="slug">
        @include('item.form')

        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection
