@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Visitas</h1>
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
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Endereço IP</th>
                                <th>Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visits as $visit)
                                <tr>
                                    <td>{{ $visit->id }}</td>
                                    <td>{{ $visit->ip_address }}</td>
                                    <td>{{ $visit->created_at }}</td>
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

@stop

