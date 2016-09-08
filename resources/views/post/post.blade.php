@extends('layouts.master')

@section('title', 'Posts')

@section('content')
    <div class="col-md-11">
        <div class="well">
            <a href="{{ url()->previous() . '#' . $post->slug }}">{{ trans('messages.btn_go_back_post') }}</a>

            <h1 class="post-title">{{ $post->title }}</h1>
            <h2 class="post-meta">{{ trans('messages.by') }} {{ $post->user->name }}, {{ $post->created_at->format('Y-m-j') }}</h2>
            <p>
                @foreach ($post->tags as $tag)
                    <a>{{ $tag->name }}</a>
                @endforeach
            </p>

            <p>{!! $post->body !!}</p>
        </div>
    </div>

    <div class="col-md-1">
        @include('shared.share_buttons')
    </div>
@endsection