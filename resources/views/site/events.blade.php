@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Evento</h1>
                        <hr>
                        <!-- Título do Evento -->
                        <h2 class="card-title">{{ $event->title }}</h2>

                        <!-- Descrição do Evento -->
                        <p class="card-text">{!! $event->description !!}</p>

                        <!-- Data do Evento -->
                        <p class="card-text"><strong>Data do Evento:</strong> {{ $event->event_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
