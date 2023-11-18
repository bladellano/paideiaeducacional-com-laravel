<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SWIPER --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-slides-per-view.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-effect-cube.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('assets/css/testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">

    <title>Paideia Educacional</title>
</head>

<body>

    <header>
        <div class="bar-social-icons">

            <div class="container">
                <div class="row py-2">
                    <div class="col-md-6 text-start">
                        <ul class="list-socials">
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-instagram"></i> </li>
                            <li><i class="fa fa-youtube"></i> </li>
                        </ul>
                    </div>

                    <div class="col-md-6 text-end">
                        <a href="#" class="btn btn-sm btn-secondary">Webmail</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bar-logo-contact-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="LOGO"
                            style="max-width: 180px;">
                    </div>
                    <div class="col-md-6 text-end my-auto mt-2">
                        <ul class="contact-list">
                            <li><i class="fa fa-whatsapp"></i> (91) 3722-9891</li>
                            <li><i class="fa fa-whatsapp"></i> (91) 9 8176-9979</li>
                            <li>(91) 9 8208-4651</li>
                            <li><i class="fa fa-envelope-o"></i> contato@paideiaeducacional.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-default p-0" id="nav">

        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nBarContent"
                aria-controls="nBarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nBarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between w-100">
                    <li class="nav-item"> <a class="nav-link active" href="#about">INSTITUCIONAL</a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CURSOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">PROFISSIONALIZANTES</a></li>
                            <li><a class="dropdown-item" href="#">EJA FUNDAMENTAL</a></li>
                            <li><a class="dropdown-item" href="#">EJA MÉDIO</a></li>
                            <li><a class="dropdown-item" href="#">TÉCNICO</a></li>
                            <li><a class="dropdown-item" href="#">GRADUAÇÃO</a></li>
                            <li><a class="dropdown-item" href="#">PÓS-GRADUAÇÃO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICOS ON-LINE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">AUTENTICIDADE DE SEU DOCUMENTO</a></li>
                            <li><a class="dropdown-item" href="#">EMISSÃO 2ª VIA DO BOLETO</a></li>
                            <li><a class="dropdown-item" href="#">PORTAL DO ALUNO</a></li>
                            <li><a class="dropdown-item" href="#">BIBLIOTECA ON-LINE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#">RADIO WEB</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#events">EVENTOS</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">SEJA NOSSO PARCEIRO</a> </li>
                    <li class="nav-item"> <a class="nav-link btn-high" href="#contact">FALE CONOSCO</a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CAROUSEL -->
    <div class="slideshow js-slideshow " data-swipe="on">
        <p class="sq7-sr-only">Slideshow Items</p>

        <ul class="slideshow__content">

            <li class="slideshow__item sq7-bg-light js-slideshow__item"
                style="background-image: url('{{ asset('assets/images/banner1.jpg') }}');">
                {{-- <div class='sq7-container sq7-max-width-sm'> <div class='sq7-text-component sq7-text-center'> <h1>Slide Three</h1> </div> </div> --}}
            </li>

            <li class="slideshow__item sq7-bg-light js-slideshow__item"
                style="background-image: url('{{ asset('assets/images/banner2.jpg') }}');">
            </li>

            <li class="slideshow__item sq7-bg-light js-slideshow__item"
                style="background-image: url('{{ asset('assets/images/banner3.jpg') }}');">
            </li>

            <li class="slideshow__item sq7-bg-light js-slideshow__item"
                style="background-image: url('{{ asset('assets/images/banner4.jpg') }}');">
            </li>

        </ul>

        <ul>
            <li class="slideshow__control js-slideshow__control">
                <button class="slideshow__btn js-tab-focus">
                    <svg class="sq7-icon" viewBox="0 0 32 32">
                        <title>Show previous slide</title>
                        <path
                            d="M20.768,31.395L10.186,16.581c-0.248-0.348-0.248-0.814,0-1.162L20.768,0.605l1.627,1.162L12.229,16 l10.166,14.232L20.768,31.395z">
                        </path>
                    </svg>
                </button>
            </li>

            <li class="slideshow__control js-slideshow__control">
                <button class="slideshow__btn js-tab-focus">
                    <svg class="sq7-icon" viewBox="0 0 32 32">
                        <title>Show next slide</title>
                        <path
                            d="M11.232,31.395l-1.627-1.162L19.771,16L9.605,1.768l1.627-1.162l10.582,14.813 c0.248,0.348,0.248,0.814,0,1.162L11.232,31.395z">
                        </path>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <!-- MAIN -->
    <main>

        @yield('content')

    </main>

    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet quo eos ad
                    nostrum eaque nisi molestias enim sunt explicabo?</div>
                <div class="col-md-3">orem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet quo eos ad
                    nostrum eaque nisi molestias enim sunt explicabo?</div>
                <div class="col-md-3">orem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet quo eos ad
                    nostrum eaque nisi molestias enim sunt explicabo?</div>
                <div class="col-md-3">orem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet quo eos ad
                    nostrum eaque nisi molestias enim sunt explicabo?</div>
            </div>
            <div class="row pb-4">
                <div class="col-md-12 text-center">
                    <small class="text-muted">© Copyright Paideia Educacional. Todos os direitos reservados.
                        <br />Desenvolvido por <span class="developer">CDNS Systems Ltda</span></small>
                </div>
            </div>
        </div>
    </footer>

    <div class="move-up">
        <i class="fa fa-arrow-up"></i>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->

    {{-- SWIPER --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="{{ asset('assets/js/swipe-content.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
