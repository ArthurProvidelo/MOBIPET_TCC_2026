<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sobre nós</title>
    <meta name="description"
        content="Saiba como o Mobipet conecta tutores e petshops através do monitoramento em tempo real.">
    <meta name="keywords" content="petshop, monitoramento pet, banho e tosa, laravel, mobipet">

    <link href="{{ asset('assets/img/mobipet_icon.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">
</head>

<body class="about-page">

    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19) 99999-8888</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                    <h1 class="sitename">Mobipet</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('index') }}">Início</a></li>
                        <li><a href="{{ route('sobre') }}" class="active">Sobre nós</a></li>
                        <li><a href="{{ route('services') }}">Serviços</a></li>
                        <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

                        @if (session()->has('cliente_id'))
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li>
                                <a href="{{ route('pets.index') }}">
                                    Meus Pets
                                </a>
                            </li>
                            <li class="dropdown">

                                <a href="{{ route('perfil') }}">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}">
                                    Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}">
                                    Entrar
                                </a>
                            </li>
                        @endif

                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>
    <style>
        .hero-mobipet {
            /* background:linear-gradient(135deg,#0b5ed7,#0a2f78);
    color:white; */
            padding: 120px 0;
        }

        .min-vh-75 {
            min-height: 75vh;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, .15);
            padding: 10px 18px;
            border-radius: 50px;
            margin-bottom: 20px;
        }

        .hero-mobipet h1 {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.1;
        }

        .hero-mobipet p {
            font-size: 1.2rem;
            opacity: .9;
        }

        .section-padding {
            padding: 100px 0;
        }

        .problem-card,
        .step-card,
        .benefit-card,
        .mvv-card {
            background: white;
            padding: 35px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            height: 100%;
            transition: .3s;
        }

        .problem-card:hover,
        .step-card:hover,
        .benefit-card:hover,
        .mvv-card:hover {
            transform: translateY(-10px);
        }

        .problem-card i {
            font-size: 3rem;
            color: #0d6efd;
        }

        .step-card span {
            font-size: 3rem;
            font-weight: 800;
            color: #0d6efd;
        }

        .status-item {
            padding: 12px;
            background: #f8f9fa;
            margin-bottom: 10px;
            border-radius: 12px;
        }

        .cta-final {
            background: linear-gradient(135deg, #0b5ed7, #0a2f78);
            color: white;
            padding: 100px 0;
        }

        @media(max-width:768px) {

            .hero-mobipet {
                text-align: center;
                padding: 80px 0;
            }

            .hero-mobipet h1 {
                font-size: 2.5rem;
            }

            /* ====== */

            .hero-mobipet{
                position:relative;
                overflow:hidden;
                padding:120px 0;
                background:
                    radial-gradient(circle at top right,#dbeafe 0%,transparent 40%),
                    linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);
            }

            .hero-shape{
                position:absolute;
                top:-150px;
                right:-100px;
                width:500px;
                height:500px;
                border-radius:50%;
                background:rgba(13,110,253,.08);
            }

            .hero-tag{
                display:inline-flex;
                align-items:center;
                gap:8px;
                padding:10px 18px;
                border-radius:50px;
                background:#eef5ff;
                color:#0d6efd;
                font-weight:600;
                margin-bottom:25px;
            }

            .hero-mobipet h1{
                font-size:4rem;
                font-weight:800;
                line-height:1.1;
                color:#0f172a;
                margin-bottom:25px;
            }

            .hero-mobipet p{
                font-size:1.2rem;
                color:#64748b;
                line-height:1.8;
                margin-bottom:30px;
            }

            .hero-status{
                display:flex;
                flex-wrap:wrap;
                gap:12px;
                margin-bottom:35px;
            }

            .status-card{
                background:#fff;
                border:1px solid #e2e8f0;
                border-radius:12px;
                padding:12px 18px;
                font-size:.95rem;
                font-weight:500;
                box-shadow:0 5px 15px rgba(0,0,0,.05);
            }

            .status-dot{
                width:10px;
                height:10px;
                border-radius:50%;
                display:inline-block;
                margin-right:8px;
            }

            .hero-buttons{
                display:flex;
                gap:15px;
                flex-wrap:wrap;
            }

            .hero-buttons .btn{
                border-radius:14px;
                padding:14px 30px;
                font-weight:600;
            }

            .hero-image-wrapper{
                position:relative;
            }

            .hero-image{
                max-width:90%;
                animation:float 4s ease-in-out infinite;
            }

            @keyframes float{
                0%,100%{
                    transform:translateY(0);
                }
                50%{
                    transform:translateY(-12px);
                }
            }

            @media(max-width:992px){

                .hero-mobipet{
                    text-align:center;
                    padding:80px 0;
                }

                .hero-mobipet h1{
                    font-size:2.8rem;
                }

                .hero-status{
                    justify-content:center;
                }

                .hero-buttons{
                    justify-content:center;
                }
            }

        }
    </style>

    <main class="main">

        <!-- PROBLEMA -->
        <section class="hero-mobipet">

    <div class="hero-shape"></div>

    <div class="container">

        <div class="row align-items-center min-vh-75">

            <div class="col-lg-6">

                <h1> 
                  Fique por dentro de cada momento.
                </h1>

                <p>
                    A Mobipet aproxima tutores e petshops através de atualizações em tempo real,
                    oferecendo mais transparência, confiança e tranquilidade durante todo o atendimento.
                </p>

                <div class="hero-status">

                </div>

                <div class="hero-buttons">

                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                        Começar Agora
                    </a>

                    <a href="#como-funciona" class="btn btn-outline-primary btn-lg">
                        Saiba Mais
                    </a>

                </div>

            </div>

            <div class="col-lg-6 text-center position-relative">

                <div class="hero-image-wrapper">

                    <img
                        src="{{ asset('assets/img/image2.png') }}"
                        class="img-fluid hero-image"
                        alt="Mobipet">

                </div>
            </div>
        </div>
    </div>

</section>

        <!-- SOLUÇÃO -->
        <section class="section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <img src="{{ asset('assets/img/image2.png') }}" class="img-fluid rounded-4 shadow">

                    </div>

                    <div class="col-lg-6">
                        <span class="text-primary fw-bold">
                            NOSSA SOLUÇÃO
                        </span>

                        <h2 class="fw-bold mb-4">
                            Transparência em cada etapa.
                        </h2>

                        <p class="lead">
                            Com a Mobipet, o petshop atualiza o status do atendimento
                            em tempo real e o tutor acompanha tudo diretamente pelo sistema.
                        </p>

                        <div class="status-list">
                            <div class="status-item">
                                <span class="badge bg-primary">1</span>
                                Pet Recebido
                            </div>

                            <div class="status-item">
                                <span class="badge bg-info">2</span>
                                Banho em andamento
                            </div>

                            <div class="status-item">
                                <span class="badge bg-warning">3</span>
                                Tosa em andamento
                            </div>

                            <div class="status-item">
                                <span class="badge bg-success">4</span>
                                Serviço concluído
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COMO FUNCIONA -->
        <section id="como-funciona" class="section-padding bg-light">

            <div class="container">

                <div class="section-title text-center">

                    <h2>
                        Como Funciona
                    </h2>

                </div>

                <div class="row g-4">

                    <div class="col-lg-3">

                        <div class="step-card">

                            <span>01</span>

                            <h5>
                                Agendamento
                            </h5>

                        </div>

                    </div>

                    <div class="col-lg-3">

                        <div class="step-card">

                            <span>02</span>

                            <h5>
                                Atendimento
                            </h5>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="step-card">

                            <span>03</span>

                            <h5>
                                Atualizações
                            </h5>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="step-card">

                            <span>04</span>

                            <h5>
                                Retirada
                            </h5>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BENEFICIOS -->
        <section class="section-padding">

            <div class="container">
                <div class="row g-4">
                    <div clas="col-lg-6">
                        <div class="benefit-card">

                            <h3>
                                Para Tutores
                            </h3>

                            <ul>
                                <li>Monitoramento em tempo real</li>
                                <li>Mais confiança</li>
                                <li>Histórico completo</li>
                                <li>Menos ansiedade</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="benefit-card">

                            <h3>
                                Para Petshops
                            </h3>

                            <ul>
                                <li>Gestão centralizada</li>
                                <li>Controle operacional</li>
                                <li>Mais produtividade</li>
                                <li>Melhor experiência ao cliente</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- MISSAO VISAO VALORES -->

        <section class="section-padding bg-light">

            <div class="container">

                <div class="row g-4">

                    <div class="col-lg-4">

                        <div class="mvv-card">

                            <h3>Missão</h3>

                            <p>
                                Aproximar tutores e petshops através da tecnologia.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="mvv-card">

                            <h3>Visão</h3>

                            <p>
                                Ser referência em monitoramento pet no Brasil.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="mvv-card">

                            <h3>Valores</h3>

                            <p>
                                Transparência, inovação, confiança e cuidado animal.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- CTA -->

        <section class="cta-final">

            <div class="container text-center">

                <h2>
                    Mais transparência para quem cuida.
                </h2>

                <p>
                    Transforme a experiência dos seus clientes com a Mobipet.
                </p>

                <a href="{{ route('login') }}" class="btn btn-light btn-lg">
                    Entrar na Plataforma
                </a>

            </div>

        </section>

    </main>

    <footer id="footer" class="footer position-relative py-4">
        <div class="container">
            <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
                <div class="row py-4">
                    <div class="col-md-6 d-flex flex-column align-items-start">
                        <a href="{{ route('index') }}" class="logo d-flex align-items-center mb-2">
                            <h1 class="sitename m-0">Mobipet</h1>
                        </a>
                        <p class="lead">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!</p>
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-md-end align-items-start">
                        <p class="mb-1"><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú -
                                SP</span></p>
                        <p class="mb-1"><span><i class="bi bi-telephone"></i> (19) 98943-2384</span></p>
                        <p class="mb-0"><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
        style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
