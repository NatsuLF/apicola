@extends('layouts.dfmf')

@section('title', 'Agregar post')

@section('content')
  <a href="{{ url('posts') }}">Regresar</a>

    <form action="{{ '/posts' }}" id="form" method="post" autocomplete="off" novalidate>
        {{ csrf_field() }}
        @include('post.form')

        <div class="form-group">
            <button type="submit" id="borrador" class="btn btn-primary">Guardar como borrador</button>
        </div>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection

@section('tags')
    @include('post.tags')
@endsection
