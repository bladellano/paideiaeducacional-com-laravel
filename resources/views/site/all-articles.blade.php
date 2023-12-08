@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Todas as notícias</h1>
                        <hr>

                        @forelse($articles as $n)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ route('site.articles', ['slug' => $n->slug]) }}" class="text-decoration-none text-dark">{{ $n->title }}</a>
                                    </h4>
                                    <h6 class="card-text">{{ $n->resume }}</h6>
                                </div>
                            </div>
                        @empty
                            <p>Nenhuma notícia disponível no momento.</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
