<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Entrar | Mobipet</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="{{ asset('assets/img/mobipet_icon.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body class="inner-page">
    <style>
        body.inner-page {
            background-image: url('assets/img/fundo_login.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
        }

        body.inner-page::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.15);
            z-index: -1;
        }

        /* ===== Auth card com painel deslizante (estrutura original) ===== */
        /* =========================================
   CARD
========================================= */

        .auth-card {
            position: relative;
            width: 100%;
            max-width: 900px;
            min-height: 580px;
            background: #fff;
            border-radius: 26px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(0, 0, 0, .18);
        }


        /* =========================================
   FORMULÁRIOS
========================================= */

        .auth-forms {
            position: relative;
            width: 100%;
            min-height: 580px;

            display: flex;
        }

        .auth-panel {
            width: 50%;
            padding: 40px 45px;

            display: flex;
            flex-direction: column;
            justify-content: center;

            background: #fff;
        }

        .auth-form-signin {
            order: 1;
        }

        .auth-form-register {
            order: 2;
        }


        /* =========================================
   PAINEL AZUL
========================================= */

        .auth-overlay-container {
            position: absolute;

            top: 0;
            left: 50%;

            width: 50%;
            height: 100%;

            overflow: hidden;

            z-index: 20;

            transition: left .6s ease-in-out;
        }


        /* CADASTRO */


        /* =========================================
   OVERLAY AZUL
========================================= */

        .auth-overlay {
            position: absolute;

            top: 0;
            left: -100%;

            width: 200%;
            height: 100%;

            display: flex;

            background: linear-gradient(135deg,
                    #497baf,
                    #3061cb);

            transition: left .6s ease-in-out;
        }


        /* Quando estiver no cadastro */

        .auth-card.register-active .auth-overlay {
            left: 0;
        }


        /* =========================================
   PAINÉIS DO OVERLAY
========================================= */

        .auth-overlay-panel {
            width: 50%;
            height: 100%;

            flex-shrink: 0;

            display: flex;
            flex-direction: column;

            align-items: center;
            justify-content: center;

            text-align: center;

            padding: 40px;

            color: #fff;
        }

        .auth-overlay-panel h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        .auth-overlay-panel p {
            max-width: 330px;
            line-height: 1.6;
        }


        /* =========================================
   BOTÃO
========================================= */

        .auth-btn-ghost {
            min-width: 145px;
            padding: 12px 30px;

            border: 2px solid #fff;
            border-radius: 30px;

            background: transparent;
            color: #fff;

            font-weight: 600;

            cursor: pointer;

            transition: .25s;
        }

        .auth-btn-ghost:hover {
            background: #fff;
            color: #3061cb;
        }

        .google-login-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            background-color: #ffffff;
            color: #1f1f1f;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: 500;
            padding: 10px 24px;
            border: 1px solid #747775;
            border-radius: 50px;
            text-decoration: none;
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }

        .google-login-btn:hover {
            background-color: #f8fafd;
            color: #1f1f1f;
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, 0.3), 0 4px 8px 3px rgba(60, 64, 67, 0.15);
        }

        .google-login-btn:active {
            background-color: #f1f3f4;
        }

        .login-separator {
            display: flex;
            align-items: center;
            text-align: center;
            color: #6c757d;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .login-separator::before,
        .login-separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }

        .login-separator:not(:empty)::before {
            margin-right: .5em;
        }

        .login-separator:not(:empty)::after {
            margin-left: .5em;
        }

        /* Ajustes Responsivos */
        @media (max-width: 700px) {

            .auth-card {
                min-height: 750px;
            }

            .auth-forms {
                min-height: 750px;
            }

            .auth-panel {
                width: 100%;
                padding: 30px 25px;
            }

            .auth-overlay-container {
                left: 0;
                top: 0;

                width: 100%;
                height: 180px;

                transition: top .6s ease-in-out;
            }

            .auth-card.register-active .auth-overlay-container {
                left: 0;
                top: calc(100% - 180px);
            }

            .auth-overlay {
                left: 0;
                top: -100%;

                width: 100%;
                height: 200%;

                flex-direction: column;

                transition: top .6s ease-in-out;
            }

            .auth-card.register-active .auth-overlay {
                left: 0;
                top: -100%;
            }

            .auth-overlay-panel {
                width: 100%;
                height: 50%;
            }
        }

        .auth-mobile-toggle {
            display: none;
        }

        /* =====================================================
   CARD DE LOGIN / CADASTRO - CLIENTE
===================================================== */

        .auth-wrapper {
            display: flex;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .auth-card {
            position: relative;
            width: 100%;
            max-width: 900px;
            min-height: 480px;
            height: 580px;
            background: #fff;
            border-radius: 26px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(0, 0, 0, .18);
            font-family: 'Roboto', sans-serif;
            transition: height .5s cubic-bezier(.65, 0, .35, 1);
        }

        /* =====================================================
   ÁREA DOS FORMULÁRIOS
===================================================== */

        .auth-forms {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            display: flex;
        }

        .auth-panel {
            width: 50%;
            height: 100%;
            padding: 50px 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            background: #fff;
        }

        .auth-panel h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        /* =====================================================
   PAINEL DESLIZANTE AZUL
===================================================== */

        .auth-overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            z-index: 100;
            transition: transform .7s cubic-bezier(.77, 0, .175, 1);
        }

        /* Quando estiver no cadastro,
   o painel azul vai para a esquerda */
        .auth-card.register-active .auth-overlay-container {
            transform: translateX(-100%);
        }

        .auth-overlay {
            position: relative;
            left: -100%;
            width: 200%;
            height: 100%;

            display: flex;

            background: linear-gradient(135deg,
                    #497baf 0%,
                    #3061cb 100%);

            color: #fff;

            transition: transform .7s cubic-bezier(.77, 0, .175, 1);
        }

        /* =====================================================
   PAINÉIS INTERNOS DO OVERLAY
===================================================== */

        .auth-overlay-panel {
            width: 50%;
            height: 100%;
            padding: 40px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            text-align: center;
        }

        .auth-overlay-panel h2 {
            margin-bottom: 16px;
            font-family: 'Montserrat', sans-serif;
            font-size: 34px;
            line-height: 1.15;
            font-weight: 800;
        }

        .auth-overlay-panel p {
            max-width: 330px;
            margin-bottom: 30px;
            color: #fff;
            font-size: 15px;
            line-height: 1.6;
        }

        /* =====================================================
   BOTÃO DO PAINEL AZUL
===================================================== */

        .auth-btn-ghost {
            min-width: 145px;
            height: 55px;
            padding: 0 30px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            border: 2px solid #fff;
            border-radius: 30px;

            background: transparent;
            color: #fff;

            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 700;

            text-decoration: none;

            transition:
                background .25s ease,
                color .25s ease,
                transform .2s ease;
        }

        .auth-btn-ghost:hover {
            background: #fff;
            color: #3061cb;
            transform: translateY(-2px);
        }

        /* =====================================================
   FORMULÁRIO DE LOGIN
===================================================== */

        .auth-form-signin {
            order: 1;
        }

        /* =====================================================
   CAMPOS
===================================================== */

        .auth-panel .form-control {
            height: 52px;
            border: 1px solid #d9dfe5;
            transition:
                border-color .25s ease,
                box-shadow .25s ease;
        }

        .auth-panel .form-control:focus {
            border-color: #497baf;
            box-shadow: 0 0 0 4px rgba(73, 123, 175, .12);
        }

        /* =====================================================
   BOTÃO PRINCIPAL
===================================================== */

        .auth-panel .btn-primary {
            height: 52px;
            background: #497baf !important;
            border: none !important;
            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }

        .auth-panel .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 9px 20px rgba(73, 123, 175, .28);
        }

        /* =====================================================
   GOOGLE
===================================================== */

        .google-login-btn {
            transition:
                background-color .2s ease,
                box-shadow .2s ease,
                transform .2s ease;
        }

        .google-login-btn:hover {
            transform: translateY(-2px);
        }

        /* =====================================================
   SEPARADOR
===================================================== */

        .login-separator {
            display: flex;
            align-items: center;
            text-align: center;
            color: #6c757d;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .login-separator::before,
        .login-separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }

        .login-separator:not(:empty)::before {
            margin-right: .5em;
        }

        .login-separator:not(:empty)::after {
            margin-left: .5em;
        }

        /* =====================================================
   RESPONSIVIDADE
===================================================== */

        @media (max-width: 900px) {

            .auth-card {
                max-width: 700px;
            }

            .auth-panel {
                padding: 40px 35px;
            }

            .auth-overlay-panel h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 700px) {

            .auth-card {
                min-height: 720px;
                max-width: 520px;
            }

            /* Painel azul vira uma faixa fixa no topo; só o texto interno troca */
            .auth-overlay-container {
                top: 0;
                left: 0;
                width: 100%;
                height: 190px;
            }

            .auth-card.register-active .auth-overlay-container {
                top: 0;
                transform: none;
            }

            .auth-overlay {
                top: 0;
                width: 100%;
                height: 200%;
                left: 0;
                transform: translateY(-50%);
            }

            .auth-card.register-active .auth-overlay {
                top: 0;
                transform: translateY(0);
            }

            .auth-overlay-panel {
                width: 100%;
                height: 50%;
                padding: 20px;
            }

            /* Em telas pequenas só o formulário ativo ocupa espaço,
               evitando que login e cadastro fiquem espremidos lado a lado */
            .auth-panel {
                display: none;
                width: 100%;
                height: calc(100% - 190px);
                margin-top: 190px;
                padding: 30px 25px;
            }

            .auth-card:not(.register-active) .auth-form-signin,
            .auth-card.register-active .auth-form-register {
                display: flex;
            }

            .auth-overlay-panel h2 {
                font-size: 24px;
            }

            .auth-overlay-panel p {
                font-size: 13px;
                margin-bottom: 12px;
            }

            .auth-btn-ghost {
                height: 42px;
                min-width: 120px;
            }
        }

        @media (max-width: 480px) {

            .auth-card {
                min-height: 700px;
                border-radius: 20px;
            }

            .auth-overlay-container {
                height: 175px;
            }

            .auth-panel {
                height: calc(100% - 175px);
                margin-top: 175px;
                padding: 25px 20px;
            }

            .auth-overlay-panel h2 {
                font-size: 21px;
            }

            .auth-overlay-panel p {
                display: none;
            }

            .auth-btn-ghost {
                height: 40px;
            }
        }
    </style>

    <header id="header" class="header fixed-top">
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
                        <li>
                            <a href="{{ route('login.funcionario') }}">
                                Sou Funcionário <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                        {{-- CLIENTE --}}
                        @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
                            <li><a href="{{ route('perfil') }}"><i class="fa-solid fa-user"></i></a></li>
                            <li>
                                <a href="{{ route('logout') }}">
                                    Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>

                            {{-- FUNCIONÁRIO --}}
                        @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                            <li><a href="{{ route('painel-controle') }}">Painel</a></li>
                            <li><a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a></li>
                            <li><a href="{{ route('perfil') }}">Perfil</a></li>
                            <li>
                                <a href="{{ route('logout') }}">
                                    Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <main class="main" style="margin-top: 120px;">

        {{-- Alertas de Erro Globais --}}
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-10" style="max-width:900px;">
                    @if (session('erro'))
                        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-4 p-3 mb-3"
                            role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('erro') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger border-0 shadow-sm rounded-4 p-3 mb-3 small" role="alert">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="auth-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="auth-card">

                <!-- =========================
         ÁREA DOS FORMULÁRIOS
    ========================== -->
                <div class="auth-forms">

                    <!-- LOGIN -->
                    <div class="auth-panel auth-form-signin">

                        <h2 class="mb-4 text-dark">Entrar</h2>

                        <p class="text-secondary small mb-4">
                            É um prazer ter você de volta conosco!
                        </p>

                        <form method="POST" action="{{ route('login.autenticar') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary small text-uppercase">
                                    E-mail
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted">
                                        <i class="bi bi-envelope"></i>
                                    </span>

                                    <input type="email" name="email"
                                        class="form-control rounded-end-3 p-2 border-light-subtle shadow-none"
                                        placeholder="seuemail@exemplo.com" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary small text-uppercase">
                                    Senha
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted">
                                        <i class="bi bi-lock"></i>
                                    </span>

                                    <input type="password" name="senha"
                                        class="form-control rounded-end-3 p-2 border-light-subtle shadow-none"
                                        placeholder="Sua senha" required>
                                </div>
                            </div>

                            <button type="submit"
                                class="btn btn-primary w-100 py-2 px-4 fw-semibold rounded-pill shadow-sm"
                                style="background-color: #497baf !important; border: none;">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Entrar
                            </button>

                        </form>

                    </div>


                    <!-- =========================
             CADASTRO DO CLIENTE
        ========================== -->
                    <div class="auth-panel auth-form-register">

                        <h2 class="mb-3 text-dark">Criar cadastro</h2>

                        <p class="text-secondary small mb-4">
                            Preencha seus dados para criar sua conta no Mobipet.
                        </p>

                        <form method="POST" action="{{ route('cadastro.salvar') }}" id="cadastroForm">
                            @csrf

                            <!-- NOME -->
                            <div class="mb-2">

                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1"
                                    style="font-size: 11px;">
                                    Nome Completo
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-light border-light-subtle text-muted">
                                        <i class="fa-solid fa-user small"></i>
                                    </span>

                                    <input type="text" name="nome"
                                        class="form-control p-2 border-light-subtle shadow-none"
                                        placeholder="Seu nome completo" value="{{ old('nome', request('nome')) }}"
                                        required>

                                </div>
                            </div>


                            <!-- CPF + TELEFONE -->
                            <div class="row g-2 mb-2">

                                <!-- CPF -->
                                <div class="col-6">

                                    <label class="form-label fw-semibold text-secondary small text-uppercase mb-1"
                                        style="font-size: 11px;">
                                        CPF
                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text bg-light border-light-subtle text-muted">
                                            <i class="fa-solid fa-id-card small"></i>
                                        </span>

                                        <input type="text" id="cpf" name="cpf" maxlength="14"
                                            inputmode="numeric" autocomplete="off"
                                            class="form-control p-2 border-light-subtle shadow-none"
                                            placeholder="000.000.000-00" value="{{ old('cpf') }}" required>

                                    </div>
                                </div>


                                <!-- TELEFONE -->
                                <div class="col-6">

                                    <label class="form-label fw-semibold text-secondary small text-uppercase mb-1"
                                        style="font-size: 11px;">
                                        Telefone
                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text bg-light border-light-subtle text-muted">
                                            <i class="bi bi-telephone"></i>
                                        </span>

                                        <input type="text" id="telefone" name="telefone" maxlength="15"
                                            inputmode="numeric" autocomplete="off"
                                            class="form-control p-2 border-light-subtle shadow-none"
                                            placeholder="(19) 99999-8888" value="{{ old('telefone') }}" required>

                                    </div>
                                </div>

                            </div>


                            <!-- ENDEREÇO -->
                            <div class="mb-2">

                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1"
                                    style="font-size: 11px;">
                                    Endereço Residencial
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-light border-light-subtle text-muted">
                                        <i class="bi bi-geo-alt"></i>
                                    </span>

                                    <input type="text" name="endereco"
                                        class="form-control p-2 border-light-subtle shadow-none"
                                        placeholder="Rua, Número, Bairro - Cidade" value="{{ old('endereco') }}"
                                        required>

                                </div>
                            </div>


                            <!-- EMAIL -->
                            <div class="mb-2">

                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1"
                                    style="font-size: 11px;">
                                    E-mail
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-light border-light-subtle text-muted">
                                        <i class="bi bi-envelope"></i>
                                    </span>

                                    <input type="email" name="email"
                                        class="form-control p-2 border-light-subtle shadow-none"
                                        placeholder="seuemail@exemplo.com"
                                        value="{{ old('email', request('email')) }}" required>

                                </div>
                            </div>


                            <!-- SENHA -->
                            <div class="mb-3">

                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1"
                                    style="font-size: 11px;">
                                    Senha
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-light border-light-subtle text-muted">
                                        <i class="bi bi-lock"></i>
                                    </span>

                                    <input type="password" name="senha"
                                        class="form-control p-2 border-light-subtle shadow-none"
                                        placeholder="Crie uma senha segura"
                                        value="{{ old('senha', request('senha')) }}" required>

                                </div>
                            </div>


                            <!-- BOTÃO -->
                            <button type="submit"
                                class="btn btn-primary w-100 py-2 px-4 fw-semibold rounded-pill shadow-sm"
                                style="background-color: #497baf !important; border: none;">

                                <i class="bi bi-check-circle me-1"></i>
                                Finalizar Cadastro

                            </button>

                        </form>

                    </div>

                </div>


                <!-- =========================
         PAINEL AZUL DESLIZANTE
    ========================== -->
                <div class="auth-overlay-container">

                    <div class="auth-overlay">

                        <!-- PAINEL PARA LOGIN -->
                        <div class="auth-overlay-panel">

                            <h2>Bem-vindo de volta!</h2>

                            <p>
                                Já possui uma conta?
                                Entre com seus dados para acessar o Mobipet.
                            </p>

                            <button type="button" id="goLogin" class="auth-btn-ghost">
                                Entrar
                            </button>

                        </div>


                        <!-- PAINEL PARA CADASTRO -->
                        <div class="auth-overlay-panel">

                            <h2>Olá, amigo!</h2>

                            <p>
                                Ainda não possui uma conta?
                                Cadastre-se para aproveitar todos os recursos do Mobipet.
                            </p>

                            <button type="button" id="goRegister" class="auth-btn-ghost">
                                Cadastrar
                            </button>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </main>

    <a href="#" id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
        style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const card = document.querySelector('.auth-card');

            const signinPanel = document.querySelector('.auth-form-signin');
            const registerPanel = document.querySelector('.auth-form-register');

            const goRegister = document.getElementById('goRegister');
            const goLogin = document.getElementById('goLogin');

            const mobileQuery = window.matchMedia('(max-width: 700px)');
            const smallQuery = window.matchMedia('(max-width: 480px)');

            // Ajusta a altura do card ao conteúdo do painel ativo,
            // para o cadastro (com mais campos) nunca ficar cortado ou com scroll.
            function syncCardHeight() {

                const activePanel = card.classList.contains('register-active') ?
                    registerPanel :
                    signinPanel;

                if (!activePanel) return;

                const contentHeight = activePanel.scrollHeight + 4;

                if (mobileQuery.matches) {
                    const bannerHeight = smallQuery.matches ? 175 : 190;
                    card.style.height = (bannerHeight + contentHeight) + 'px';
                } else {
                    card.style.height = Math.max(contentHeight, 480) + 'px';
                }
            }

            // CADASTRO
            if (goRegister) {
                goRegister.addEventListener('click', function(e) {

                    e.preventDefault();

                    card.classList.add('register-active');
                    syncCardHeight();

                });
            }

            // LOGIN
            if (goLogin) {
                goLogin.addEventListener('click', function(e) {

                    e.preventDefault();

                    card.classList.remove('register-active');
                    syncCardHeight();

                });
            }

            window.addEventListener('resize', syncCardHeight);
            window.addEventListener('load', syncCardHeight);

            syncCardHeight();

            // =========================================
            // MÁSCARAS DE CPF E TELEFONE
            // =========================================

            const cpfInput = document.getElementById('cpf');
            const telefoneInput = document.getElementById('telefone');

            function maskCPF(value) {
                return value
                    .replace(/\D/g, '')
                    .slice(0, 11)
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            }

            function maskTelefone(value) {
                const digits = value.replace(/\D/g, '').slice(0, 11);

                if (digits.length > 10) {
                    // Celular: (00) 00000-0000
                    return digits
                        .replace(/(\d{2})(\d)/, '($1) $2')
                        .replace(/(\d{5})(\d)/, '$1-$2');
                }

                // Fixo: (00) 0000-0000
                return digits
                    .replace(/(\d{2})(\d)/, '($1) $2')
                    .replace(/(\d{4})(\d{1,4})$/, '$1-$2');
            }

            if (cpfInput) {
                cpfInput.addEventListener('input', function() {
                    cpfInput.value = maskCPF(cpfInput.value);
                });
            }

            if (telefoneInput) {
                telefoneInput.addEventListener('input', function() {
                    telefoneInput.value = maskTelefone(telefoneInput.value);
                });
            }

            // Antes de enviar, remove a máscara para gravar só os números no banco
            const cadastroForm = document.getElementById('cadastroForm');
            if (cadastroForm) {
                cadastroForm.addEventListener('submit', function() {
                    if (cpfInput) cpfInput.value = cpfInput.value.replace(/\D/g, '');
                    if (telefoneInput) telefoneInput.value = telefoneInput.value.replace(/\D/g, '');
                });
            }

        });
    </script>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    @include('partials.logout-confirm')

</body>

</html>
