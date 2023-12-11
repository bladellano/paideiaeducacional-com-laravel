@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                    <div class="card mb-3" style="">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title fw-bold ">{{ $event->title }}</h3>
                              <p class="card-text">{!! $event->description !!}</p>
                              <p class="card-text"><small class="text-muted">Data do Evento: {{ $event->event_date }} </small></p>
                            </div>
                          </div>
                        </div>
                    </div>

              
            </div>
        </div>
    </div>
@endsection
