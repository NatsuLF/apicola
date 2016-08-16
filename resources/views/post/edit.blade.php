@extends('layouts.dfm')

@section('title', 'Editar post')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/summernote/dist/summernote.css') }}">
@endsection

@section('javascripts')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('components/summernote/dist/summernote.js') }}"></script>
    <script src="{{ asset('components/summernote/lang/summernote-es-ES.js') }}"></script>
    <script src="{{ asset('js/posts.js') }}"></script>
@endsection

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

@section('complement')
    @include('post.tags')
@endsection
