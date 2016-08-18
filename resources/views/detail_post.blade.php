@extends('layouts.master')

@section('title', 'Posts')

@section('content')
    <div class="col-md-11">
        <div class="well">
            <a class="btn btn-default btn-back" href="{{ url()->previous() . '#' . $post->slug }}">
                {{ trans('messages.btn_go_back_post') }}
            </a>

            <h4>{{ $post->title }}</h4>
            <p>{{ trans('messages.by') }} {{ $post->user->name }}, {{ $post->created_at->format('Y-m-j') }}</p>
            <p>
                @foreach ($post->tags as $tag)
                    <span class="label label-success">{{ $tag->name }}</span>
                @endforeach
            </p>

            <p>{!! $post->body !!}</p>
        </div>
    </div>

    <div class="col-md-1">
        @include('shared.share_buttons')
    </div>
@endsection