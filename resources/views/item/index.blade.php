@extends('layouts.app_backend')

@section('title', 'Productos')

@section('content')
    @if (count($items) > 0)
        <table class="table table-striped table-hover table-bordered">
            <colgroup>
                <col span="1" style="width: 90%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <thead>
                <th colspan="3">Productos</th>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ url('items/' . $item->id) }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('items/'.$item->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @include('shared.message')
    @else
        <p>Nada que mostrar</p>
    @endif
@endsection