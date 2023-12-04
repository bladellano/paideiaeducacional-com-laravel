@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Videos</h1>
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
                                <th>Título</th>
                                <th>Slug</th>
                                <th>URL</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td>{{ $video->id }}</td>
                                    <td>{{ $video->title }}</td>
                                    <td>{{ $video->slug }}</td>
                                    <td>{{ $video->url }}</td>
                                    <td><a href="{{ route('videos.edit', $video) }}" class="btn btn-sm btn-default"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form id="form_{{ $video->id }}" method="post"
                                            action="{{ route('videos.destroy', $video) }}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="#" class="btn btn-default btn-sm" onclick="confirmRemove({{ $video->id }})">
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
