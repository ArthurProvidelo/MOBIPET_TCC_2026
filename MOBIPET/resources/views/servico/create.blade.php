<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cadastrar Serviço | Mobipet</title>
    <meta name="description"
        content="Adicione novos serviços, preços e durações oferecidas pelo seu petshop na plataforma Mobipet.">
    <meta name="keywords" content="petshop, monitoramento pet, banho e tosa, laravel, mobipet, cadastrar servico">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS Files -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <!-- =========================================================
    HEADER
    ========================================================= -->
    <header id="header" class="header fixed-top">
        <!-- Top Bar -->
        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        <span>(19) 98943-2384</span>
                    </i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Scroll Top Button -->
        <a href="#" id="scroll-top"
            class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
            style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Branding -->
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                    <h1 class="sitename">Mobipet</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('index') }}">Início</a></li>
                        <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
                        <li><a href="{{ route('services') }}">Serviços</a></li>
                        <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

                        {{-- CLIENTE --}}
                        @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
                            <li><a href="{{ route('perfil') }}"><i class="fa-solid fa-user"></i></a></li>
                            <li><a href="{{ route('logout') }}">Sair <i
                                        class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

                            {{-- FUNCIONÁRIO --}}
                        @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                            <li><a href="{{ route('painel-controle') }}">Painel</a></li>
                            <li><a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a></li>
                            <li><a href="{{ route('services') }}" class="active">Cadastrar Serviços</a></li>
                            <li><a href="{{ route('perfil') }}">Perfil</a></li>
                            <li><a href="{{ route('logout') }}">Sair <i
                                        class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                        @else
                            <li><a href="{{ route('login') }}">Entrar</a></li>
                        @endif
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <!-- =========================================================
    MAIN CONTENT
    ========================================================= -->
    <main class="main">
        <section class="agendamento-section">
            <div class="container">

                <!-- Topo da Página -->
                <div class="hero-agendamento text-center" data-aos="fade-up">
                    <h1 class="hero-title">Cadastrar Serviço</h1>
                    <p class="hero-subtitle">
                        Adicione novos procedimentos, defina durações médias e preços para atualizar as opções de
                        agendamento da plataforma.
                    </p>
                </div>

                <!-- Bloco do Formulário -->
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="200">

                        <div class="card agendamento-card">

                            <!-- Card Header Premium -->
                            <div class="card-header">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="header-icon-list">
                                        <i class="fa-solid fa-folder-plus"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-white">Novo Serviço</h3>
                                        <p class="mb-0 text-metod">Preencha os campos obrigatórios (*) para salvar no
                                            banco de dados.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body p-4 p-md-5">

                                @if (session('success'))
                                    <div class="alert alert-success border-0 rounded-4 p-3 shadow-sm mb-4 d-flex align-items-center gap-3"
                                        data-aos="fade-up">
                                        <i class="fa-solid fa-circle-check fs-4 text-success"></i>
                                        <span class="fw-semibold">{{ session('success') }}</span>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 rounded-4 p-3 shadow-sm mb-4 d-flex align-items-center gap-3"
                                        style="background-color: #fff5f5; color: #dc2626;">
                                        <i class="fa-solid fa-circle-exclamation fs-4"></i>
                                        <ul class="mb-0 small fw-semibold list-unstyled">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('services.store') }}" method="POST">
                                    @csrf

                                    <div class="row g-4">

                                        <div class="col-6">
                                            <label for="nome" class="form-label-minimal">Nome do Serviço *</label>
                                            <input type="text" class="form-control form-control-minimal"
                                                id="nome" name="nome"
                                                placeholder="Ex: Banho Premium, Tosa Higiênica..." required
                                                value="{{ old('nome') }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="categoria" class="form-label-minimal">Categoria do Serviço
                                                *</label>
                                            <select class="form-select form-control-minimal" id="categoria"
                                                name="categoria" required>
                                                <option value="" disabled selected>Selecione uma opção...
                                                </option>
                                                <option value="banho"
                                                    {{ old('categoria') == 'banho' ? 'selected' : '' }}>Banho</option>
                                                <option value="tosa"
                                                    {{ old('categoria') == 'tosa' ? 'selected' : '' }}>Tosa</option>
                                                <option value="consulta"
                                                    {{ old('categoria') == 'consulta' ? 'selected' : '' }}>Consulta
                                                    Veterinária</option>
                                                <option value="outros"
                                                    {{ old('categoria') == 'outros' ? 'selected' : '' }}>Outros
                                                    Serviços</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="preco" class="form-label-minimal">Preço Cobrado (R$)
                                                *</label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-minimal" id="preco"
                                                name="preco" placeholder="0,00" required
                                                value="{{ old('preco') }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tempoEstimado" class="form-label-minimal">Tempo Estimado de
                                                Duração *</label>
                                            <input type="text" class="form-control form-control-minimal"
                                                id="tempoEstimado" name="tempoEstimado"
                                                placeholder="Ex: 45 min, 1h 30min" required
                                                value="{{ old('tempoEstimado') }}">
                                        </div>

                                        <div class="col-12">
                                            <label for="descricao" class="form-label-minimal">Descrição Detalhada do
                                                Serviço</label>
                                            <textarea class="form-control form-control-minimal" id="descricao" name="descricao" rows="4"
                                                placeholder="Descreva de forma clara os procedimentos inclusos, produtos químicos ou restrições especiais deste serviço..."></textarea>
                                        </div>

                                        <div class="col-12 text-end mt-5 pt-3 border-top border-light">
                                            <a href="{{ route('services') }}"
                                                class="btn btn-cancelar-premium me-3 small fw-bold text-decoration-none">
                                                Cancelar
                                            </a>
                                            <button type="submit"
                                                class="btn btn-salvar-premium px-4 py-2.5 rounded-3 fw-bold shadow-sm">
                                                <i class="fa-solid fa-cloud-arrow-up me-2"></i> Salvar Serviço
                                            </button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- =========================================================
    FOOTER
    ========================================================= -->
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

    <!-- =========================================================
    CSS INTERNO (Sistema de Identidade Premium)
    ========================================================= -->
    <style>
        body {
            background: #f7f9fc;
            font-family: 'Montserrat', sans-serif;
        }

        .agendamento-section {
            padding: 180px 0 100px;
            background:
                radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
                radial-gradient(circle at bottom left, #e0f2fe 0%, transparent 30%);
            min-height: 100vh;
        }

        .hero-agendamento {
            margin-bottom: 50px;
        }

        .hero-title {
            font-size: 52px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #6b7280;
            max-width: 650px;
            margin: auto;
            line-height: 1.6;
        }

        /* CARD PREMIUM COM BORDAS DE 35PX */
        .agendamento-card {
            border: none;
            border-radius: 35px;
            overflow: hidden;
            background: white;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.06);
        }

        .agendamento-card .card-header {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            padding: 35px;
            border: none;
            color: white;
        }

        .header-icon-list {
            width: 65px;
            height: 65px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }

        .card-header h3 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .text-metod {
            color: rgba(255, 255, 255, 0.85) !important;
            font-size: 14px;
        }

        /* INPUTS E CAMPOS MINIMALISTAS */
        .form-label-minimal {
            font-size: 13px;
            font-weight: 700;
            color: #4b5563;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .form-control-minimal {
            border: 1px solid #e2e8f0;
            background-color: #f8fafc;
            border-radius: 14px;
            padding: 14px 18px;
            font-size: 15px;
            color: #1f2937;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .form-control-minimal:focus {
            background-color: #ffffff;
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
            outline: 0;
        }

        .form-control-minimal::placeholder {
            color: #94a3b8;
            font-weight: 400;
        }

        /* BOTÕES PREMIUM DE AÇÃO */
        .btn-salvar-premium {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            color: white;
            padding: 12px 30px;
            transition: 0.3s ease;
        }

        .btn-salvar-premium:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.25);
        }

        .btn-cancelar-premium {
            color: #6b7280;
            transition: 0.2s;
        }

        .btn-cancelar-premium:hover {
            color: #111827;
        }

        /* CUSTOM RADIO SWITCHES */
        .custom-radio-wrapper .form-check-input:checked {
            background-color: #2563eb;
            border-color: #2563eb;
        }

        @media(max-width: 992px) {
            .hero-title {
                font-size: 38px;
            }
        }

        @media(max-width: 768px) {
            .agendamento-section {
                padding-top: 150px;
            }

            .hero-title {
                font-size: 32px;
            }

            .hero-subtitle {
                font-size: 16px;
            }

            .agendamento-card .card-header {
                padding: 25px;
            }
        }
    </style>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- VLibras Plugin -->
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

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
