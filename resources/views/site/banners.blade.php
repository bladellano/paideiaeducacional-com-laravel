@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Banner</h1>
                        <hr>
                        <!-- Título do Banner -->

                        <img class="img-thumbnail" style="object-fit: cover; height: 256px; width: 100%" src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}">

                        <h2 class="card-title">{{ $banner->title }}</h2>

                        <!-- Descrição do Banner -->
                        <p class="card-text">{!! $banner->description !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
