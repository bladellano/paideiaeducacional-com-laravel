@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Menu do Site</h1>
@stop

@section('content')

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-10">

            <div class="card card-primary p-2">

                <div class="card-header">
                    <h3 class="card-title">Edição</h3>
                </div>

                <form action="{{ route('site-menu.store') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="menu" class="form-label">Estrutura do Menu</label>
                        <textarea style="background-color: black; color: #7fff00;" class="form-control" name="menu" id="menu" cols="30" rows="20">{{ $menu }}</textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Atualizar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@stop

