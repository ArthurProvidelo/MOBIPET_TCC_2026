<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Serviços | Mobipet</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">

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

    <style>
        /* --- ESTILOS INTERNOS DA PÁGINA DE SERVIÇOS --- */
        body {
            background: #f5f7fb;
            overflow-x: hidden;
        }

        main {
            margin-top: 40px;
        }

        /* --- HERO SECTION --- */
        .hero-modern {
            padding-top: 140px;
            padding-bottom: 120px;
        }

        .hero-modern h1 {
            color: #101828;
            letter-spacing: -3px;
            line-height: 1;
            font-size: 5rem;
            padding-top: 50px !important;
        }

        /* --- DASHBOARD CARD (MOCKUP) --- */
        .dashboard-card {
            border: 1px solid rgba(0, 0, 0, .05);
            overflow: hidden;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, .92);
            box-shadow: 0 30px 70px rgba(15, 23, 42, .08);
        }

        .dashboard-card::before {
            content: "";
            position: absolute;
            width: 260px;
            height: 260px;
            background: rgba(13, 110, 253, .05);
            border-radius: 50%;
            top: -120px;
            right: -120px;
        }

        .online-badge {
            position: absolute;
            top: 30px;
            right: 30px;
            background: linear-gradient(135deg, #198754, #20c997);
            color: white;
            padding: 10px 18px;
            border-radius: 999px;
            font-size: .85rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 15px 40px rgba(25, 135, 84, .25);
        }

        .progress {
            height: 12px;
            border-radius: 999px;
            overflow: hidden;
            background: #e9ecef;
        }

        .progress-bar {
            background: linear-gradient(90deg, #0d6efd, #4f8cff);
        }

        /* --- TIMELINE (DASHBOARD) --- */
        .timeline-area {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 30px;
        }

        .timeline-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 18px;
            border-radius: 22px;
            background: #f8fafc;
            transition: .3s ease;
            border: 1px solid transparent;
        }

        .timeline-item:hover {
            transform: translateY(-3px);
            background: white;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .06);
        }

        .timeline-item.completed {
            background: rgba(25, 135, 84, .08);
            border-color: rgba(25, 135, 84, .12);
        }

        .timeline-item.completed i {
            color: #198754;
        }

        .timeline-item.active {
            background: rgba(13, 110, 253, .08);
            border-color: rgba(13, 110, 253, .15);
            transform: scale(1.02);
        }

        .timeline-item.active i {
            color: #0d6efd;
        }

        .tempo-card {
            background: linear-gradient(135deg, #111827, #1f2937);
            border-radius: 28px;
            padding: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 35px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
        }

        /* --- SEÇÃO DE SERVIÇOS --- */
        .service-card {
            background: radial-gradient(circle at top right, rgba(255, 255, 255, .12), transparent 30%),
                linear-gradient(135deg, #0f172a, #111827, #1e293b);
            border: 1px solid rgba(255, 255, 255, .08);
            box-shadow: 0 40px 80px rgba(15, 23, 42, .18);
        }

        .service-icon {
            width: 95px;
            height: 95px;
            border-radius: 28px;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(37, 99, 235, .35);
        }

        .service-icon i {
            color: white;
            font-size: 2.3rem;
        }

        .mini-badge {
            background: rgba(255, 255, 255, .1);
            border: 1px solid rgba(255, 255, 255, .1);
            color: white;
            padding: 10px 18px;
            border-radius: 999px;
            font-size: .9rem;
            font-weight: 600;
        }

        .service-status {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .status-item {
            padding: 18px 22px;
            border-radius: 20px;
            background: rgba(255, 255, 255, .06);
            color: white;
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, .05);
        }

        .status-item.active {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            box-shadow: 0 15px 30px rgba(37, 99, 235, .25);
        }

        .status-item,
            .status-item i {
                color: #fff !important;
            }

            .status-item.active,
            .status-item.active i {
                color: #fff !important;
            }

        /* --- CARDS SECUNDÁRIOS --- */
        .glass-card {
            background: rgba(255, 255, 255, .75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, .4);
            box-shadow: 0 20px 40px rgba(15, 23, 42, .06);
            transition: .35s ease;
        }

        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(15, 23, 42, .1);
        }

        .small-icon {
            width: 72px;
            height: 72px;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.7rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .12);
        }

        /* --- COMPONENTES AUXILIARES --- */
        .btn-primary {
            background: linear-gradient(135deg, #0d6efd, #3b82f6);
            border: none;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 35px rgba(13, 110, 253, .25);
        }

        /* --- RESPONSIVIDADE (MEDIA QUERIES) --- */
        @media(max-width:991px) {
            .hero-modern {
                text-align: center;
            }

            .hero-modern h1 {
                font-size: 3rem;
            }

            .dashboard-card {
                margin-top: 50px;
            }
        }

        @media(max-width:576px) {
            .hero-modern h1 {
                font-size: 2.3rem;
            }

            .tempo-card {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">

    <!-- Top Bar -->
    <!-- Scroll Top -->
    <a href="#"
       id="scroll-top"
       class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
       style="width: 50px;
              height: 50px;
              position: fixed;
              bottom: 20px;
              right: 20px;
              z-index: 999;
              font-size: 24px;">

        <i class="bi bi-arrow-up-short"></i>

    </a>

    <!-- Branding -->
    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}"
               class="logo d-flex align-items-center">

                <h1 class="sitename">
                    Mobipet
                </h1>

            </a>

            <nav id="navmenu" class="navmenu">

                <ul>

                    <li>
                        <a href="{{ route('index') }}">
                            Início
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('sobre') }}">
                            Sobre nós
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}" class="active">
                            Serviços
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('devs') }}">
                            Desenvolvedores
                        </a>
                    </li>

                    {{-- CLIENTE --}}
                    @if(session()->has('id') && session('nivel_acesso') == 'USUARIO')

                        <li>
                            <a href="{{ route('pets.create') }}">
                                Cadastrar Pet
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('agendamento') }}">
                                Agendamento
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('pets.index') }}">
                                Meus Pets
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('perfil') }}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                Sair
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                    {{-- FUNCIONÁRIO --}}
                    @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')

                        <li>
                            <a href="{{ route('painel-controle') }}">
                                Painel
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('funcionario.agendamentos') }}">
                                Agendamentos
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('perfil') }}">
                                Perfil
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                Sair
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                    {{-- VISITANTE --}}
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

    <main class="main">

        <section class="hero-modern py-5 overflow-hidden">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6" data-aos="fade-right">
                        <h1 class="display-3 fw-bold mb-4">Monitoramento moderno para banho e tosa</h1>
                        <p class="lead text-secondary mb-5" style="line-height:1.9;">
                            Acompanhe cada etapa do atendimento em tempo real, trazendo mais confiança, carinho e
                            tranquilidade para quem ama seu pet.
                        </p>
                    </div>

                    <div class="col-lg-6 mt-lg-5" data-aos="fade-left">
                        <div class="dashboard-card shadow-lg rounded-5 p-4 position-relative">
                            <div class="online-badge">
                                <i class="bi bi-broadcast"></i> EM ATENDIMENTO
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?q=80&w=500"
                                    class="rounded-circle shadow" width="90" height="90"
                                    style="object-fit:cover;" alt="Foto do Pet">
                                <div class="ms-3">
                                    <h4 class="fw-bold mb-1">Rex</h4>
                                    <p class="text-secondary mb-0">Pug</p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-semibold">Status do atendimento</span>
                                    <span class="badge bg-primary rounded-pill px-3 py-2">Secagem em andamento</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width:65%"></div>
                                </div>
                            </div>

                            <div class="timeline-area">
                                <div class="timeline-item completed">
                                    <i class="bi bi-check-circle-fill"></i> <span>Recepção concluída</span>
                                </div>
                                <div class="timeline-item completed">
                                    <i class="bi bi-check-circle-fill"></i> <span>Banho finalizado</span>
                                </div>
                                <div class="timeline-item active">
                                    <i class="bi bi-arrow-repeat"></i> <span>Secagem em andamento</span>
                                </div>
                                <div class="timeline-item">
                                    <i class="bi bi-clock"></i> <span>Tosa aguardando</span>
                                </div>
                            </div>

                            <div class="tempo-card">
                                <div>
                                    <h5 class="fw-bold mb-1 text-white">Tempo restante</h5>
                                    <p class="text-light mb-0">Atualização automática</p>
                                </div>
                                <h2 class="fw-bold text-white mb-0">15min</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5 position-relative overflow-hidden bg-white">
            <div class="container py-5">

                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-2 fw-bold mt-4 mb-4 text-dark lh-sm">
                        Uma experiência tecnológica feita para quem ama pets
                    </h2>
                    <p class="lead text-secondary mx-auto" style="max-width:900px;line-height:1.9;">
                        A Mobipet aproxima o tutor do petshop através de notificações inteligentes e monitoramento
                        moderno de serviços.
                    </p>
                </div>

                <!-- SEÇÃO CORRIGIDA COMEÇA AQUI -->
                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card h-100 p-5 rounded-5 position-relative overflow-hidden d-flex flex-column justify-content-between">
                            <div>
                                <div class="service-icon mb-5">
                                    <i class="bi bi-bell-fill"></i>
                                </div>
                                <span class="mini-badge">Atualizações em tempo real</span>
                                <h3 class="fw-bold text-white mt-4 mb-4 display-6">Notificações automáticas durante o atendimento</h3>
                                <p class="text-light opacity-75 fs-5" style="line-height:1.9;">
                                    O tutor recebe mensagens automáticas informando cada etapa do atendimento.
                                </p>
                            </div>
                            <div class="service-status mt-5">
                                <div class="status-item"><i class="bi bi-check-circle-fill"></i> Banho concluído</div>
                                <div class="status-item active"><i class="bi bi-arrow-repeat"></i> Secagem em andamento</div>
                                <div class="status-item"><i class="bi bi-clock"></i> Finalização pendente</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="row g-4 h-100 align-items-stretch">
                            <div class="col-12">
                                <div class="glass-card p-5 rounded-5 h-100 d-flex flex-column justify-content-center">
                                    <div class="small-icon bg-success mb-3">
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                    <h4 class="fw-bold mt-2 mb-3">Comunicação via WhatsApp</h4>
                                    <p class="text-secondary fs-5 mb-0" style="line-height:1.8;">
                                        Todas as notificações chegam diretamente no WhatsApp do tutor de forma prática.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="glass-card p-4 rounded-5 h-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <div class="small-icon bg-primary mb-3">
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                        <h5 class="fw-bold mt-2 mb-3">Mais confiança</h5>
                                    </div>
                                    <p class="text-secondary mb-0" style="line-height:1.8;">
                                        Transparência para deixar o tutor tranquilo durante o atendimento.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="glass-card p-4 rounded-5 h-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <div class="small-icon bg-dark mb-3">
                                            <i class="bi bi-stars"></i>
                                        </div>
                                        <h5 class="fw-bold mt-2 mb-3">Experiência premium</h5>
                                    </div>
                                    <p class="text-secondary mb-0" style="line-height:1.8;">
                                        Um sistema moderno para destacar seu petshop da concorrência.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SEÇÃO CORRIGIDA TERMINA AQUI -->

            </div>
        </section>

    </main>

    <style>
        /* ---------- Footer criativo ---------- */
        .footer-16 {
            position: relative;
            overflow: visible;
            padding-bottom: 90px;
        }

        .footer-16 .footer-main {
            margin-bottom: 0;
        }

        .footer-16::before {
            content: "";
            position: absolute;
            top: -1px;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--accent-color), #22c55e, var(--accent-color), transparent);
            background-size: 200% 100%;
            animation: footerGradientMove 6s linear infinite;
        }

        @keyframes footerGradientMove {
            0% { background-position: 0% 0; }
            100% { background-position: 200% 0; }
        }

        .footer-badge {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-color), #1d4ed8);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(23, 92, 221, 0.35);
            z-index: 2;
            transition: transform 0.4s ease;
        }

        .footer-badge i {
            color: #fff;
            font-size: 26px;
        }

        .footer-badge:hover {
            transform: translate(-50%, -50%) rotate(-15deg) scale(1.1);
        }

        .footer-16 .brand-section {
            max-width: 380px;
        }

        .footer-status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #16a34a;
            background: rgba(34, 197, 94, 0.12);
            padding: 6px 14px;
            border-radius: 999px;
            margin-bottom: 22px;
        }

        .footer-status .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22c55e;
            animation: statusPulse 2s infinite;
        }

        @keyframes statusPulse {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.5); }
            70% { box-shadow: 0 0 0 8px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }

        .footer-16 .contact-info {
            margin-top: 24px;
        }

        .footer-16 .footer-social .social-link.whatsapp i {
            color: #25d366;
        }

        .footer-16 .footer-social .social-link.instagram i {
            background: linear-gradient(45deg, #f9ce34, #ee2a7b, #6228d7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .footer-16 .footer-bottom .legal-links .credits i {
            color: #ef4444;
            margin: 0 2px;
        }

        .footer-16 .footer-bottom .copyright p {
            color: rgba(255, 255, 255, 0.85);
        }

        .footer-16 .footer-bottom .copyright p .sitename {
            color: #fff;
        }

        .footer-16 .footer-bottom .legal-links a {
            color: rgba(255, 255, 255, 0.85);
        }

        .footer-16 .footer-bottom .legal-links a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .footer-16 .footer-bottom .legal-links .credits {
            color: rgba(255, 255, 255, 0.7);
            border-left-color: rgba(255, 255, 255, 0.3);
        }

        .footer-16 .footer-bottom .legal-links .credits a {
            color: #fff;
            font-weight: 600;
        }
    </style>

    <footer id="footer" class="footer-16 footer position-relative">

        <div class="footer-badge">
            <i class="fa-solid fa-paw"></i>
        </div>

        <div class="container">

            <div class="footer-main row gy-5 justify-content-between align-items-start" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-5 brand-section">

                    <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                        <h1 class="sitename">Mobipet</h1>
                    </a>

                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Rua Bela Vista, 100 - Centro, Tambaú - SP</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <span>(19) 98943-2384</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <span>mobipet@gmail.com</span>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 footer-nav-wrapper">
                    <div class="row">

                        <div class="col-6 nav-column">
                            <h6>Navegação</h6>
                            <nav class="footer-nav">
                                <a href="{{ route('index') }}">Início</a>
                                <a href="{{ route('sobre') }}">Sobre nós</a>
                                <a href="{{ route('services') }}">Serviços</a>
                                <a href="{{ route('devs') }}">Desenvolvedores</a>
                            </nav>
                        </div>

                        <div class="col-6 nav-column">
                            <h6>Minha Conta</h6>
                            <nav class="footer-nav">
                                @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                                    <a href="{{ route('agendamento') }}">Agendamento</a>
                                    <a href="{{ route('pets.index') }}">Meus Pets</a>
                                    <a href="{{ route('pets.create') }}">Cadastrar Pet</a>
                                    <a href="{{ route('perfil') }}">Meu Perfil</a>
                                @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                                    <a href="{{ route('painel-controle') }}">Painel</a>
                                    <a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a>
                                    <a href="{{ route('perfil') }}">Perfil</a>
                                @else
                                    <a href="{{ route('login') }}">Entrar</a>
                                    <a href="{{ route('cadastro') }}">Criar conta</a>
                                @endif
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#"
        id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 1000,
                    once: true
                });
            }
        });
    </script>
    @include('partials.logout-confirm')

</body>

</html>