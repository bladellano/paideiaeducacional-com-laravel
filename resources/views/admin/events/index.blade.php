@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Eventos</h1>
@stop

@section('content')

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Todos os registros</h3>
                </div>
                <div class="card-body">
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
                                    <td><a href="{{ route('events.edit', $event) }}" class="btn btn-sm btn-default"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form id="form_{{ $event->id }}" method="post"
                                            action="{{ route('events.destroy', $event) }}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="#" class="btn btn-default btn-sm" onclick="confirmRemove({{ $event->id }})">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css') @stop

@section('js')
    <script>
        function confirmRemove(eventId) {
            if (confirm('Tem certeza que deseja excluir o registro?'))
                document.getElementById('form_' + eventId).submit();
        }
    </script>
@stop
