@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-2 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $totalVisits }}</h3>
                                    <p>Visitantes</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ route('home') }}/visits" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $totalEvents }}</h3>
                                    <p>Eventos</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('home') }}/events" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $totalPages }}</h3>
                                    <p>Páginas</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ route('home') }}/pages" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>

                            </div>
                        </div>

                        <div class="col-lg-2 col-6">

                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $totalTestemonials }}</h3>
                                    <p>Depoimentos</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>

                                <a href="{{ route('home') }}/testimonials" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>

                            </div>
                        </div>

                        <div class="col-lg-2 col-6">

                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>{{ $totalPhotos }}</h3>
                                    <p>Fotos</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>

                                <a href="{{ route('home') }}/image-gallery/create" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
