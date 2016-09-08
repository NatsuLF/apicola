@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <div class="col-md-12">
        <div class="well jumbotron">
            <h1>{{ trans('messages.banner') }}</h1>
            <p>{{ trans('messages.banner_content') }}</p>
        </div>
    </div>

    <div class="col-md-9">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="panel panel-primary">
                    <div class="panel-heading" id="{{ $post->slug }}">
                        <div class="panel-title">
                        <div class="clearfix">
                            {{ $post->title }}

                            <div class="pull-right">
                                @foreach ($post->tags as $tag)
                                    <span class="label label-success">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>{!! $post->summary !!}</p>
                    </div>
                    <div class="panel-footer" style="background: #FFF; border-top: 0;">
                        <div class="clearfix">
                            <a href="{{ '/blog/' . $post->slug }}" class="pull-right">
                                {{ trans('messages.btn_blog') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nada que mostrar</p>
        @endif
    </div>

    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                {{ count($activities) }} {{ trans('messages.activities') }}
            </div>

            <div class="panel-body">
                @foreach ($activities as $index => $activity)
                    <label>Nombre</label>
                    <p>{{ $activity->name }}</p>

                    <label>Lugar</label>
                    <p>{{ $activity->location }}</p>

                    <label>Fecha</label>
                    <p>{{ $activity->date }}</p>

                    @if ($index < count($activities) - 1)
                        <hr>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
