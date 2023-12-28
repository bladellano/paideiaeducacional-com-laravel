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
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/multilevel-menu.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v18.0&appId=374800873744481" nonce="kWpBy904">
    </script>

    <title>Paideia Educacional - Sua Jornada para o Conhecimento</title>
</head>

<body>

    <header>
        <div class="bar-social-icons">

            <div class="container">
                <div class="row py-2">
                    <div class="col-md-6 text-start">
                        <ul class="list-socials">
                            <a href="https://www.facebook.com/paideiaeducacionalpa/" target="_blank">
                                <li><i class="fa fa-facebook"></i></li>
                            </a>
                            <a href="https://www.instagram.com/paideiaeducacional/" target="_blank">
                                <li><i class="fa fa-instagram"></i></li>
                            </a>
                            <a href="https://www.youtube.com/@paideiaeducacional6957" target="_blank">
                                <li><i class="fa fa-youtube"></i></li>
                            </a>
                        </ul>
                    </div>

                    <div class="col-md-6 text-end">
                        <a href="https://mail.umbler.com/" class="btn btn-sm btn-secondary" target="_blank">Webmail</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bar-logo-contact-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('site.home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                class="img-fluid" alt="LOGO" style="max-width: 180px;"></a>
                    </div>
                    <div class="col-md-6 text-end my-auto mt-2">
                        <ul class="contact-list">
                            <li>(91) 3722-9891</li>
                            <li><i class="fa fa-whatsapp"></i> (91) 9 8176-9979</li>
                            <li><i class="fa fa-whatsapp"></i> (91) 9 8208-4651</li>
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
                    <li class="nav-item"> <a class="nav-link active"
                            href="{{ route('site.home') }}#sobre">INSTITUCIONAL</a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CURSOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" target="_blank" href="https://paideiaeducacional.com.br/loja_virtual/index.php">PROFISSIONALIZANTES</a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://paideiaeducacional.ead.guru/cursos/eja-ensino-fundamental/bundle/">EJA FUNDAMENTAL</a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://paideiaeducacional.ead.guru/cursos/eja-ensino-medio/bundle/">EJA MÉDIO</a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://unibtadigital.com.br/graduacoes">GRADUAÇÃO</a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://unibtadigital.com.br/pos-graduacoes">PÓS-GRADUAÇÃO</a></li>
                            <li><a class="dropdown-item" href="#">TÉCNICO &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" target="_blank" href="https://paideiaeducacional.ead.guru/ead/enroll/secretaria-escolar">SECRETARIA ESCOLAR</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="https://paideiaeducacional.ead.guru/ead/enroll/tecnico-em-transacoes-imobiliaria/">TRANSAÇÕES IMOBILIÁRIAS</a></li>
                              </ul>
                           </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICOS ON-LINE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://validar-certificado.paideiaeducacional.com"
                                    target="_blank">AUTENTICIDADE DE SEU DOCUMENTO</a></li>
                            <li><a class="dropdown-item" href="https://banco.bradesco/html/classic/produtos-servicos/mais-produtos-servicos/segunda-via-boleto.shtm"
                                    target="_blank">EMISSÃO 2ª VIA DO BOLETO</a></li>
                            <li><a class="dropdown-item" href="https://paideiaeducacional.com.br/metodo/login.php"
                                    target="_blank">PORTAL DO ALUNO</a></li>
                            <li><a class="dropdown-item" href="https://bndigital.bn.gov.br/"
                                    target="_blank">BIBLIOTECA ON-LINE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="https://www.paideiaeducacional.net/"
                            target="_blank">RADIO WEB</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#events">EVENTOS</a> </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('site.home') }}/seja-nosso-parceiro">SEJA NOSSO PARCEIRO</a> </li>
                    <li class="nav-item"> <a class="nav-link btn-high" href="{{ route('site.home') }}#fale-conosco">FALE CONOSCO</a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN -->
    <main>

        @yield('content')

    </main>

    <footer class="position-relative overflow-hidden p-md-5 text-center bg-dark text-white">

        <div class="container">

            <div class="row">
                <div class="col-md-3 my-auto">
                    <h4 class="text-md-start text-white">Consulte nossa instituição:</h4>
                </div>
                <div class="col-md-3 col-12">
                    <a href="https://sistec.mec.gov.br/consultapublicaunidadeensino/" target="_blank">
                        <img src="{{ asset('assets/images/logo-sistec.png') }}" alt="CONSULTA-PUBLICA-UNIDADE-ENSINO" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3 col-12">
                    <a href="https://www.gov.br/inep/pt-br/acesso-a-informacao/dados-abertos/inep-data/catalogo-de-escolas"
                        target="_blank">
                        <img src="{{ asset('assets/images/logo-catalogo-de-escolas.png') }}" alt="CATALOGO-DE-ESCOLAS" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3 col-12">
                    <a href="https://www.abed.org.br/site/pt/associados/consulta_associados_abed/" target="_blank">
                        <img src="{{ asset('assets/images/logo-abed.png') }}" alt="CONSULTA_ASSOCIADOS_ABED" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-md-start text-white">Contato:</h4>
                    <ul class="text-md-start">
                        <li>(91) 3722-9891</li>
                        <li>(91) 9 8176-9979 <i class="fa fa-whatsapp"></i></li>
                        <li>(91) 9 8208-4651 <i class="fa fa-whatsapp"></i></li>
                        <li><i class="fa fa-envelope"></i> contato@paideiaeducacional.com</li>
                    </ul>
                </div>
                <div class="col-md-4 my-auto">

                    <a href="{{ route('site.home') }}/login" class="text-danger text-decoration-none developer" target="_blank"> <small> Login Administrativo</small></a>

                    <p class="text-secondary small"> © Copyright Paideia Educacional. Todos os direitos reservados. </p>

                    <p class="text-secondary small"> Desenvolvido por <a class="text-decoration-none developer" href="https://cdnssystems.com.br/" target="_blank">CDNS Systems Ltda</a> </p>

                </div>
                <div class="col-md-4 my-auto d-flex justify-content-end">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo-paideia" alt="LOGO">
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

    {{-- SWIPER --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="{{ asset('assets/js/swipe-content.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/multilevel-menu.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <a 
        href="https://web.whatsapp.com/send?phone=5591981769979&text=Olá! Espero que esteja bem. Estou interessado em esclarecer algumas dúvidas sobre os serviços oferecidos por vocês. Seria possível contar com a sua ajuda?" 
        target="_blank"
        style="position:fixed;bottom:34px;right:26px;">
        <img src="{{ asset('assets/images/whatsapp.svg') }}" alt="Whatsapp" width="50">
    </a>

</body>

</html>
