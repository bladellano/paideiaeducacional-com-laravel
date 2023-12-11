@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Depoimentos</h1>
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
                                <th>Criado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->id }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{!! $testimonial->description !!}</td>
                                    <td>{{ $testimonial->created_at }}</td>
                                    <td><a href="{{ route('testimonials.edit', $testimonial) }}"
                                            class="btn btn-sm btn-default"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form id="form_{{ $testimonial->id }}" method="post"
                                            action="{{ route('testimonials.destroy', $testimonial) }}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="#" class="btn btn-default btn-sm"
                                                onclick="confirmRemove({{ $testimonial->id }})">
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
        function confirmRemove(id) {
            if (confirm('Tem certeza que deseja excluir o registro?'))
                document.getElementById('form_' + id).submit();
        }
    </script>
@stop
