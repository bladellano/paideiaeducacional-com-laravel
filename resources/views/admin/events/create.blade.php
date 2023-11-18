@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Eventos</h1>
@stop

@section('content')

    <h4>Criar</h4>

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data" class="mt-3">

        @csrf

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" class="form-control" required>
            
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" class="form-control" required></textarea>

            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="event_date">Data:</label>
            <input type="date" name="event_date" class="form-control" required>

            @error('event_date') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" name="image" class="form-control-file">

            @error('image') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

@stop
