@extends('layouts.dfm')

@section('title', 'Editar producto')

@section('javascripts')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/administrate-item-images.js') }}"></script>
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
