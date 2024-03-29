@extends('layouts.site')

@section('content')
    <!-- CAROUSEL -->
    <x-header-banner :banners="$banners" />

    {{-- ABOUT  --}}
    <section id="sobre" class="bg-default">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>SOBRE NÓS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="text-end" style="line-height: 30px;">

                        @if ($sobre)
                            <h3>{{ $sobre->title }}</h3><br />
                            {!! $sobre->description !!}
                        @endif

                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/banner3.jpg') }}" class="img-fluid img-thumbnail" alt="ABOUT">
                </div>
            </div>
        </div>
    </section>

    {{-- MIDIAS --}}
    <section id="midias">
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="gcse-search"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>MÍDIAS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa fa-hashtag"></i> Últimas Notícias</h3>

                    <ul class="p-0">
                        <li>
                            @foreach ($rssItems as $r)
                                <div>
                                    <p> <span class="badge" style="background:#7f9c97">{{ $r->get_date('j/m/Y') }}</span> {{ Str::limit($r->get_title(), $limit = 90, $end = '...') }} 
                                        <a href="{{ $r->get_permalink() }}" class="btn btn-sm btn-light" target="_blank">&raquo; Leia mais</a>
                                    </p>
                                </div>
                            @endforeach
                        </li>
                    </ul>

                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-hashtag"></i> Fotos</h3>

                    <x-images-gallery :gallery="$gallery"/>
                    
                    <div class="text-center">
                        <a href="{{ route('site.all-images-gallery') }}" class="btn btn-sm btn-light">» Mais fotos</a>
                    </div>

                </div>

                <div class="col-md-4 text-center">
                    <h3><i class="fa fa-hashtag"></i> Facebook</h3>
                    <div class="fb-page" data-href="https://www.facebook.com/paideiaeducacionalpa" data-tabs="timeline" data-width="" data-height="418px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/paideiaeducacionalpa" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/paideiaeducacionalpa">Paideia Educacional</a></blockquote></div>

                </div>
            </div>
        </div>
    </section>

    {{-- EVENTS --}}
    <section id="events" class="bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>EVENTOS</h2>

                    <swiper-container class="anyClass" pagination="true" pagination-clickable="true" space-between="30"
                        slides-per-view="3">

                        @foreach ($events as $event)
                            <swiper-slide>
                                <p><a href="{{ route('site.events', ['slug' => $event->slug]) }}">{{ $event->title }}</a>
                                </p>
                                <span>{{ \Carbon\Carbon::parse($event->event_date)->format('d/m/Y') }}</span>
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}">
                            </swiper-slide>
                        @endforeach

                    </swiper-container>

                </div>
            </div>
        </div>
    </section>

    {{-- VIDEOS --}}
    <section id="videos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>VIDEOS</h2>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">

                    @if ($canal)
                        <h3>{{ $canal->title }}</h3><br />
                        {!! $canal->description !!}
                    @endif

                </div>

                <div class="col-md-6 d-flex justify-content-center">

                    <swiper-container class="mySwiper" pagination="true" effect="cube" grab-cursor="true"
                        cube-effect-shadow="true" cube-effect-slide-shadows="true" cube-effect-shadow-offset="20"
                        cube-effect-shadow-scale="0.94">

                        @foreach ($videos as $video)
                            <swiper-slide>
                                <iframe width="430" height="370" src="{{ $video->url }}"
                                    title="{{ $video->title }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </swiper-slide>
                        @endforeach

                    </swiper-container>

                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="fale-conosco" class="bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>FALE CONOSCO</h2>
                </div>
            </div>

            <div class="mt-5">
                <div class="row">
                    <!-- Informações de Contato -->
                    <div class="col-md-6">
                        <p class="fw-bold">Estamos aqui para ajudar. Entre em contato conosco!</p>
                        
                        <ul class="list-unstyled">
                            <li class="text-white"><i class="fa fa-map-marker"></i> WE 17, N° 111, Cidade Nova 2 67130450 Ananindeua, PA.</li>
                            <li class="text-white"><i class="fa fa-envelope"></i> contato@paideiaeducacional.com</li>
                            <li class="text-white"><i class="fa fa-phone"></i> +55 91 3722-9891</li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.68015789797!2d-48.409596924353416!3d-1.3685904986184594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a46002e36706d5%3A0x4c36bf75461dcb48!2sTv.%20We%20Quinze%20A%20Cj%20Cidade%20Nova%20III%2C%20112%20-%20Cidade%20Nova%2C%20Ananindeua%20-%20PA%2C%2067130-665%2C%20Brasil!5e0!3m2!1spt-PT!2spt!4v1702322090788!5m2!1spt-PT!2spt" width="100%" height="312" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            
                    <!-- Formulário de Contato -->
                    <div class="col-md-6 text-white ">

                        <x-contact-form key="{{ env('RECAPTCHA_CLIENT') }}"/>

                    </div>
                </div>
            </div>
            
        </div>

    </section>

    {{-- TESTIMONIAL --}}
    <section id="testimonials">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>DEPOIMENTOS</h2>
                </div>
            </div>

            <div class="mt-5">

                <div class="row row-cols-1 row-cols-md-3 g-4">
            
                    @foreach ($testimonials as $t)

                        <div class="col">
                            <div class="card text-center">
                                <img src="{{ $t->image ? asset('storage/' . $t->image) : asset('assets/images/avatar.png') }}" style="width: 150px; height:150px; margin: 0 auto;" class="card-img-top rounded-circle img-thumbnail mt-2" alt="{{ $t->name }}">
                                <div class="card-body">
                                    <h3 class="card-title" style="text-transform: capitalize;">{{ $t->name }}</h3>
                                    <small class="fst-italic fw-lighter"> Em {{ $t->created_at }}</small>
                                    <p class="card-text fst-italic text-secondary ">"{{ $t->description }}"</p>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    
@endsection

@if(session('fragment'))
    <script>
        window.location.hash = '{{ session('fragment') }}';
    </script>
@endif
