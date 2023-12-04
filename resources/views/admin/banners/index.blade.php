@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Banners</h1>
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
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                                <tr>
                                    <td>{{ $banner->id }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>{{ $banner->slug }}</td>
                                    <td><a href="{{ route('banners.edit', $banner) }}" class="btn btn-sm btn-default"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form id="form_{{ $banner->id }}" method="post"
                                            action="{{ route('banners.destroy', $banner) }}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="#" class="btn btn-default btn-sm" onclick="confirmRemove({{ $banner->id }})">
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
