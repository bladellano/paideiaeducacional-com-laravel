@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Título do Pagina -->
                        <h3 class="card-title">{{ $page->title }}</h3>
                        <hr>
                        <!-- Descrição do Pagina -->
                        <p class="card-text">{!! $page->description !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
