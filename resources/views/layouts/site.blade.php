<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SWIPER --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-slides-per-view.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('assets/css/testimonial.css') }}">
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
    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('assets/images/banner1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('assets/images/banner2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/banner4.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
