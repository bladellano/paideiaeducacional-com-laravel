@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-body">
                        <!-- Título do Banner -->

                        <h3 class="card-title">{{ $banner->title }}</h3>
                        <hr>

                        <img class="img-thumbnail" style="object-fit: cover; height: 256px; width: 100%" src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}">

                        <!-- Descrição do Banner -->
                        <p class="card-text">{!! $banner->description !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
