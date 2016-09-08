@extends('layouts.master')

@section('title', 'Starting')

@section('content')
    <div class="col-md-11">
        <div class="well well-lg">
            <img src="{{ $infographic }}" alt="Infographic" class="img-responsive" style="margin: 0 auto;">
        </div>
    </div>

    <div class="col-md-1">
        @include('shared.share_buttons')
    </div>
@endsection
