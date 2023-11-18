@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Eventos</h1>
@stop

@section('content')

    <h4>Lista</h4>

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <table class="table active-datatable">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
                    <td><a href="#" class="btn btn-sm btn-warning">Editar</a></td>
                    <td>

                        <form id="form_{{ $event->id }}" method="post" action="{{ route('events.destroy', $event) }}">
                            @method('DELETE')
                            @csrf
                            <a href="#" class="btn btn-danger btn-sm"
                                onclick="document.getElementById('form_{{ $event->id }}').submit()">
                                Excluir
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css') @stop

@section('js') @stop
