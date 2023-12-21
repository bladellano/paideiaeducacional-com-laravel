@extends('layouts.site')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <h1>Todas as fotos</h1>
                        <hr>

                        <x-images-gallery :gallery="$gallery"/>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
