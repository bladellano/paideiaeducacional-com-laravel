@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Páginas</h1>
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
                    <h3 class="card-title">{{ __('Edição') }}</h3>
                </div>

                <form action="{{ route('pages.update', $page) }}" method="post" enctype="multipart/form-data">

                    @method('PUT')

                    @include('admin.pages.form')

                </form>

            </div>
        </div>
    </div>

@stop
