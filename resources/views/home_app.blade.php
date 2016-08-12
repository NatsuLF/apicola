@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="col-md-12">
        @include('shared.slide')
        @include('shared.objetives')
    </div>
@endsection
