@extends('layouts.dfm')

@section('title', 'Perfil de usuario')

@section('content')
    @include('user.data')
    @include('user.nav')

    <form action="{{ '/user/profile' }}" method="post" autocomplete="off" novalidate>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" name="name" value="{{ $current_user->name }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" id="email" class="form-control" name="email" value="{{ $current_user->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    @include('shared.message')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

