@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Notícias</h1>
@stop

@section('content')

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar</h3>
                </div>

                <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">

                    @include('admin.articles.form')

                </form>
            </div>
        </div>
    </div>

@stop
