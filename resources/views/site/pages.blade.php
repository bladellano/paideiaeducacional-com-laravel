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

                        <div class="container ">

                            <div class="row justify-content-md-center">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-8 bg-light text-dark p-3 card">
                                        <h4>Entre em Contato</h4>
                                        <x-contact-form key="{{ env('RECAPTCHA_CLIENT') }}" />
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
