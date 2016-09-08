@extends('layouts.master')

@section('title', 'Patent')

@section('content')
    <div class="col-md-4">
        <div class="well well-lg">
            <h4>{{ trans('messages.patent') }}</h4>
            <p>{{ trans('messages.patent_content') }}</p>

            <div class="row">
                <div class="col-md-6">
                    <a href="https://s3-us-west-2.amazonaws.com/apicolabucket/patent/document/US8801493+patents+Richar+Scoth+Vincent.pdf" class="btn btn-default btn-block">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> {{ trans('messages.patent') }}
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="http://www.lagaceta.gob.ni/gaceta-164-miercoles-31-de-agosto-2016/" class="btn btn-default btn-block">
                        <i class="fa fa-external-link" aria-hidden="true"></i> La gaceta
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="well well-lg">
            @foreach ($images as $image)
                <img src="{{ $image }}" alt="" class="img-responsive">
            @endforeach
        </div>
    </div>
@endsection
