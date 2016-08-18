@extends('layouts.master')

@section('title', 'Analisis finaciero')

@section('content')
    <div class="col-md-11">
        <div class="well well-lg">
            <h4>Lorem ipsum dolor sit amet</h4>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Atque, facilis, ex. Maiores earum, dolorem magni pariatur libero
                similique ullam repellendus possimus tempora ad molestiae assumenda,
                enim quis ex magnam iusto.
            </p>

            <iframe
                width=100%
                height=500
                src="https://docs.google.com/spreadsheets/d/1ZUKAbHyDorih0wD1bKnLpsK_igdEQ3Wy89BhwkgVEIc/pubhtml?gid=375998749&amp;
                single=true
                widget=true
                headers=false">
            </iframe>
        </div>
    </div>

    <div class="col-md-1">
        @include('shared.share_buttons')
    </div>
@endsection
