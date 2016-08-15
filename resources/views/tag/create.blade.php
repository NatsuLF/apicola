@extends('layouts.dfm')

@section('title', 'Agregar categoria')

@section('content')
    <a href="{{ url('tags') }}">Regresar</a>

    <form action="{{ '/tags' }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('tag.form')

        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>

    @include('shared.message')

    @include('common.errors')
@endsection