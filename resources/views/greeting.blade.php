@extends('layouts.distractionfree')

@section('title', 'Greeting')

@section('content')
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="well well-sm">
            <p>{{ trans('messages.greeting') }}</p>

            <a href="{{ url('contacto') }}" class="btn btn-default">
                {{ trans('messages.go_to_contact') }}
            </a>
        </div>
    </div>
    <div class="col-md-4"></div>
@endsection
