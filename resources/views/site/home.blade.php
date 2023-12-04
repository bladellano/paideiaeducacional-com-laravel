@extends('layouts.site')

@section('content')
    <!-- CAROUSEL -->
    <div class="slideshow js-slideshow" data-swipe="on">

        <ul class="slideshow__content">

            @foreach ($banners as $b)
                <li class="slideshow__item sq7-bg-light js-slideshow__item" style="background-image: url('{{ asset('storage/' . $b->image) }}');">
                    <div class='sq7-container sq7-max-width-sm'>
                        <div class='sq7-text-component sq7-text-center'>
                            <h1><a href="{{ route('site.banners', ['slug' => $b->slug]) }}">{{ $b->title }}</a></h1>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>

        <ul>
            <li class="slideshow__control js-slideshow__control">
                <button class="slideshow__btn js-tab-focus">
                    <svg class="sq7-icon" viewBox="0 0 32 32">
                        <title>Mostrar slide anterior</title>
                        <path
                            d="M20.768,31.395L10.186,16.581c-0.248-0.348-0.248-0.814,0-1.162L20.768,0.605l1.627,1.162L12.229,16 l10.166,14.232L20.768,31.395z">
                        </path>
                    </svg>
                </button>
            </li>

            <li class="slideshow__control js-slideshow__control">
                <button class="slideshow__btn js-tab-focus">
                    <svg class="sq7-icon" viewBox="0 0 32 32">
                        <title>Mostrar próximo slide</title>
                        <path
                            d="M11.232,31.395l-1.627-1.162L19.771,16L9.605,1.768l1.627-1.162l10.582,14.813 c0.248,0.348,0.248,0.814,0,1.162L11.232,31.395z">
                        </path>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    {{-- ABOUT  --}}
    <section id="about" class="bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>SOBRE NÓS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="text-end" style="line-height: 30px;">
                        <strong>ASSESSORIA E CONSULTORIA EM PROJETOS EDUCACIONAIS E EMPRESARIAIS</strong><br />
                        A Paideia Educacional é uma empresa de assessoria e consultoria na área de educação e
                        empresarial formada por profissionais renomados na área, que atuaram no ensino superior,
                        escolas na educação básica, profissionalizantes, técnicas, realizações de eventos
                        educacionais e empresarias há mais de 15 anos, tendo exercido neste período diversas
                        atividades e ocupando postos nas Instituições de Ensino, colhendo resultados positivos nos
                        trabalhos realizados.
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
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>MÍDIAS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa fa-hashtag"></i> Notícias</h3>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-hashtag"></i> Fotos</h3>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-hashtag"></i> Facebook</h3>
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
                                <span>{{ $event->event_date }}</span>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat harum quod laborum blanditiis
                        maiores architecto cupiditate veniam fuga distinctio. Dolores nemo et cupiditate, iste laborum
                        necessitatibus suscipit nobis odit rerum, dicta quis, placeat architecto animi voluptatum ullam non
                        tempora qui.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat harum quod laborum blanditiis
                        maiores architecto cupiditate veniam fuga distinctio. Dolores nemo et cupiditate, iste laborum
                        necessitatibus suscipit nobis odit rerum, dicta quis, placeat architecto animi voluptatum ullam non
                        tempora qui.</p>
                </div>

                <div class="col-md-6 d-flex justify-content-center">

                    <swiper-container class="mySwiper" pagination="true" effect="cube" grab-cursor="true"
                        cube-effect-shadow="true" cube-effect-slide-shadows="true" cube-effect-shadow-offset="20"
                        cube-effect-shadow-scale="0.94">

                        @foreach ($videos as $video)
                            <swiper-slide>
                                <iframe width="430" height="370" src="{{ $video->url }}" title="{{ $video->title }}"
                                    frameborder="0"
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
    <section id="contact" class="bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>FALE CONOSCO</h2>
                </div>
            </div>
            <p>Conteúdo seção.</p>
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


            <section class="testimonial">
                <div class="tf8-container tf8-max-width-adaptive-sm">
                    <figure class="tf8-flex tf8-justify-center tf8-margin-bottom-md reveal-fx reveal-fx--scale">
                        <img class="tf8-block tf8-width-2xl tf8-height-2xl tf8-radius-50% tf8-border tf8-border-bg tf8-border-2 tf8-shadow-sm"
                            src="https://codyhouse.co/app/assets/img/testimonial-img-1.jpg" alt="Testimonial picture">
                    </figure>

                    <div class="testimonial__block-wrapper tf8-margin-bottom-lg">
                        <blockquote class="tf8-text-lg tf8-text-center tf8-line-height-md ">Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Eligendi atque doloremque beatae! Doloremque
                            perspiciatis aliquid repellat quasi praesentium, minima nobis assumenda ex?</blockquote>

                        <svg class="tf8-icon tf8-icon--2xl tf8-color-contrast-higher tf8-opacity-10%" aria-hidden="true"
                            viewBox="0 0 64 64">
                            <polygon fill="currentColor" points="2 36 17 2 26 2 15 36 26 36 26 62 2 62 2 36" />
                            <polygon fill="currentColor" points="38 36 53 2 62 2 51 36 62 36 62 62 38 62 38 36" />
                        </svg>
                    </div>


                    <div class="tf8-text-center">
                        <p class="tf8-text-uppercase tf8-letter-spacing-md"><strong>Emily Ewing</strong></p>
                        <p class="tf8-color-contrast-medium tf8-margin-top-4xs">Designer at CompanyX</p>
                    </div>
                </div>
            </section>

        </div>
    </section>
@endsection
