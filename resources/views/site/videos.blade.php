@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Video</h1>
                        <hr>
                        <!-- Título do Video -->
                        <h2 class="card-title">{{ $video->title }}</h2>

                        <!-- Descrição do Video -->
                        <p class="card-text">{!! $video->description !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
