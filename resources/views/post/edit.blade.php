@extends('layouts.dfmf')

@section('title', 'Editar post')

@section('content')
    <a href="{{ url('posts') }}">Regresar</a>

    <form action="{{ '/posts/' . $post->id }}" id="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        <input type="hidden" name="id">
        @include('post.form')

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection

@section('tags')
    @include('post.tags')
@endsection
