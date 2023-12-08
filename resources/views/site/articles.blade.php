@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Notícias</h1>
                        <hr>
                        <!-- Título do Banner -->

                        @if($article->image)
                            <img class="img-thumbnail" style="object-fit: cover; height: 256px; width: 100%" src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
                        @endif
                        <h2 class="card-title">{{ $article->title }}</h2>

                        <!-- Descrição do Banner -->
                        <p class="card-text">{!! $article->content !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
