@extends('layouts.dfm')

@section('title', 'Agregar producto')

@section('javascripts')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/administrate-item-images.js') }}"></script>
@endsection

@section('content')
    <a href="{{ url('items') }}">Regresar</a>
    <form action="{{ '/items' }}" id="form" method="post">
        {{ csrf_field() }}
        @include('item.form')

        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection
