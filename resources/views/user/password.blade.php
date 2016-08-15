@extends('layouts.dfm')

@section('title', 'Cambiar contraseña')

@section('content')
    @include('user.data')
    @include('user.nav')

    <form action="/user/update_password" method="POST" autocomplete="off" novalidate>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="currentPassword">Contraseña actual</label>
            <input type="password" id="currentPassword" class="form-control" name="currentPassword" required>
        </div>

        <div class="form-group">
            <label for="newPassword">Nueva contraseña</label>
            <input type="password" class="form-control" name="newPassword" required>
        </div>

        <div class="form-group">
            <label for="confirmPassword">Repite la contraseña</label>
            <input type="password" class="form-control" name="confirmPassword" required>
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
