@extends('layouts.app_backend')

@section('title', 'Carousel')

@section('content')
    @if (count($images) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ count($images) }} imagenes</th>
                    <th width="1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $image }}</td>
                        <td>
                            <?php $path = explode('/', $image); ?>
                            <?php $file = end($path); ?>

                            <a href="{{ url('carousel/delete/' . $file) }}">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nada que mostrar</p>
    @endif
@endsection