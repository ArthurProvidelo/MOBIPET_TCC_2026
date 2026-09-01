<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Entrar | Mobipet</title>
    <meta name="description"
        content="Acesse sua conta Mobipet para agendar serviços, acompanhar o atendimento do seu pet em tempo real e gerenciar seus cadastros.">
    <meta name="keywords" content="login mobipet, entrar, acesso cliente, cadastro tutor, agendamento pet">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">

    <style>
        /* ===========================================================
           PÁGINA LOGIN / CADASTRO — MOBIPET  ·  isolado (prefixo lg-)
           =========================================================== */
        .lg-page {
            --lg-accent: #175cdd;
            --lg-accent-dark: #0f47b3;
            --lg-accent-soft: #eaf1fe;
            --lg-ink: #0f1b34;
            --lg-body: #4a5568;
            --lg-muted: #8794a7;
            --lg-line: #e6ecf5;
            --lg-bg: #f7f9ff;
            --lg-radius: 26px;
            --lg-radius-sm: 14px;
            --lg-shadow-sm: 0 10px 30px -14px rgba(15, 27, 52, .2);
            --lg-shadow: 0 40px 90px -40px rgba(23, 92, 221, .4);

            font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--lg-body);
        }

        .lg-page h1,
        .lg-page h2,
        .lg-page h3,
        .lg-page h4 {
            font-family: "Montserrat", sans-serif;
            color: var(--lg-ink);
            letter-spacing: -0.022em;
            line-height: 1.12;
        }

        /* Barra de progresso de rolagem (padrão do site) */
        .lg-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, var(--lg-accent), #4ade80);
            z-index: 1100;
            transition: width .12s linear;
        }

        /* Rótulo de seção */
        .lg-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .74rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--lg-accent);
            margin-bottom: 14px;
        }

        .lg-eyebrow::before {
            content: "";
            width: 26px;
            height: 2px;
            background: currentColor;
        }

        .lg-eyebrow .lg-idx {
            color: var(--lg-muted);
            font-variant-numeric: tabular-nums;
        }

        /* =========================================================
           FUNDO DA PÁGINA
           ========================================================= */
        body.inner-page {
            background-image: url('{{ asset('assets/img/fundo_login.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
        }

        body.inner-page::before {
            content: "";
            position: fixed;
            inset: 0;
            background-color: rgba(247, 249, 255, .18);
            z-index: -1;
        }

        /* =========================================================
           BOTÕES (sistema consistente — padrão devs)
           ========================================================= */
        .lg-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: .97rem;
            padding: 14px 26px;
            border-radius: 999px;
            border: 1.5px solid transparent;
            text-decoration: none;
            cursor: pointer;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease, border-color .2s ease;
        }

        .lg-btn--primary {
            width: 100%;
            background: var(--lg-accent);
            color: #fff;
            box-shadow: 0 18px 34px -16px rgba(23, 92, 221, .75);
        }

        .lg-btn--primary:hover {
            background: var(--lg-accent-dark);
            color: #fff;
            transform: translateY(-3px);
        }

        .lg-btn--ghost {
            min-width: 150px;
            background: transparent;
            color: #fff;
            border-color: rgba(255, 255, 255, .7);
        }

        .lg-btn--ghost:hover {
            background: #fff;
            color: var(--lg-accent);
            transform: translateY(-3px);
        }

        /* =========================================================
           CARD (login + cadastro com painel deslizante)
           ========================================================= */
        .lg-wrapper {
            display: flex;
            justify-content: center;
            padding: 2rem 1rem 4rem;
        }

        .lg-card {
            position: relative;
            width: 100%;
            max-width: 900px;
            min-height: 480px;
            height: 580px;
            background: #fff;
            border-radius: var(--lg-radius);
            overflow: hidden;
            box-shadow: var(--lg-shadow);
            font-family: "Roboto", sans-serif;
            transition: height .5s cubic-bezier(.65, 0, .35, 1);
        }

        /* =========================================================
           ÁREA DOS FORMULÁRIOS
           ========================================================= */
        .lg-forms {
            position: absolute;
            inset: 0;
            display: flex;
        }

        .lg-panel {
            width: 50%;
            height: 100%;
            padding: 50px 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            background: #fff;
        }

        .lg-panel h2 {
            font-weight: 800;
            font-size: clamp(1.6rem, 3vw, 2rem);
            margin: 0 0 6px;
        }

        .lg-panel .lg-sub {
            font-size: .92rem;
            color: var(--lg-muted);
            margin-bottom: 26px;
        }

        .lg-form-signin {
            order: 1;
        }

        .lg-form-register {
            order: 2;
        }

        /* Campos */
        .lg-panel .form-label {
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .7rem;
            letter-spacing: .09em;
            text-transform: uppercase;
            color: var(--lg-muted);
            margin-bottom: 6px;
        }

        .lg-panel .input-group-text {
            background: var(--lg-bg);
            border: 1px solid var(--lg-line);
            color: var(--lg-muted);
        }

        .lg-panel .form-control {
            height: 50px;
            border: 1px solid var(--lg-line);
            box-shadow: none;
            transition: border-color .25s ease, box-shadow .25s ease;
        }

        .lg-panel .form-control:focus {
            border-color: var(--lg-accent);
            box-shadow: 0 0 0 4px var(--lg-accent-soft);
        }

        .lg-form-register .form-control {
            height: 44px;
        }

        /* =========================================================
           PAINEL AZUL DESLIZANTE
           ========================================================= */
        .lg-overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            z-index: 100;
            transition: transform .7s cubic-bezier(.77, 0, .175, 1);
        }

        .lg-overlay {
            position: relative;
            left: -100%;
            width: 200%;
            height: 100%;
            display: flex;
            color: #fff;
            background:
                radial-gradient(46% 130% at 100% 0%, rgba(255, 255, 255, .16), transparent 60%),
                linear-gradient(135deg, var(--lg-accent), var(--lg-accent-dark));
            transition: transform .7s cubic-bezier(.77, 0, .175, 1);
        }

        .lg-overlay-panel {
            width: 50%;
            height: 100%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .lg-overlay-panel h2 {
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.5rem, 3.4vw, 2.1rem);
            font-weight: 800;
            margin-bottom: 14px;
        }

        .lg-overlay-panel p {
            max-width: 320px;
            margin-bottom: 28px;
            font-size: .95rem;
            line-height: 1.65;
            color: rgba(255, 255, 255, .85);
        }

        /* Estados do card:
           - padrão            -> mostra formulário de LOGIN + CTA "Cadastrar"
           - .lg-register-active -> mostra formulário de CADASTRO + CTA "Entrar" */
        .lg-card.lg-register-active .lg-overlay-container {
            transform: translateX(-100%);
        }

        .lg-card.lg-register-active .lg-overlay {
            transform: translateX(50%);
        }

        /* =========================================================
           RESPONSIVO
           ========================================================= */
        @media (max-width: 900px) {
            .lg-card {
                max-width: 700px;
            }

            .lg-panel {
                padding: 40px 35px;
            }
        }

        @media (max-width: 700px) {
            .lg-card {
                min-height: 720px;
                max-width: 520px;
            }

            /* Painel azul vira faixa fixa no topo; só o texto interno troca */
            .lg-overlay-container {
                top: 0;
                left: 0;
                width: 100%;
                height: 190px;
            }

            .lg-card.lg-register-active .lg-overlay-container {
                transform: none;
            }

            .lg-overlay {
                top: 0;
                left: 0;
                width: 100%;
                height: 200%;
                transform: translateY(-50%);
            }

            .lg-card.lg-register-active .lg-overlay {
                transform: translateY(0);
            }

            .lg-overlay-panel {
                width: 100%;
                height: 50%;
                padding: 20px;
            }

            /* Em telas pequenas só o formulário ativo ocupa espaço */
            .lg-panel {
                display: none;
                width: 100%;
                height: calc(100% - 190px);
                margin-top: 190px;
                padding: 30px 25px;
            }

            .lg-card:not(.lg-register-active) .lg-form-signin,
            .lg-card.lg-register-active .lg-form-register {
                display: flex;
            }

            .lg-overlay-panel p {
                font-size: .85rem;
                margin-bottom: 14px;
            }
        }

        @media (max-width: 480px) {
            .lg-card {
                min-height: 700px;
                border-radius: 20px;
            }

            .lg-overlay-container {
                height: 175px;
            }

            .lg-panel {
                height: calc(100% - 175px);
                margin-top: 175px;
                padding: 25px 20px;
            }

            .lg-overlay-panel p {
                display: none;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .lg-page *,
            .lg-page *::before,
            .lg-page *::after {
                animation: none !important;
                transition: none !important;
            }
        }

        /* ---- Footer criativo (padrão do site) ---- */
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

        .footer-16 .contact-info {
            margin-top: 24px;
        }
    </style>
</head>

<body class="inner-page">

    @include('partials.preloader')

    <div class="lg-progress" id="lgProgress"></div>

    <header id="header" class="header fixed-top">

        <!-- Branding -->
        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">

                <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                    <h1 class="sitename">Mobipet</h1>
                </a>

                <nav id="navmenu" class="navmenu">

                    <ul>
                        
                        @include('partials.nav-user')
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

                </nav>

            </div>

        </div>

    </header>

    <main class="main lg-page" style="margin-top: 120px;">

        <!-- ================= ALERTAS GLOBAIS ================= -->
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

        <!-- ================= CARD LOGIN / CADASTRO ================= -->
        <div class="lg-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="lg-card">

                <!-- ---------- ÁREA DOS FORMULÁRIOS ---------- -->
                <div class="lg-forms">

                    <!-- LOGIN -->
                    <div class="lg-panel lg-form-signin">

                        <span class="lg-eyebrow"><span class="lg-idx">01</span> Acesso</span>

                        <h2>Entrar</h2>
                        <p class="lg-sub">É um prazer ter você de volta conosco!</p>

                        <form method="POST" action="{{ route('login.autenticar') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" name="email"
                                        class="form-control rounded-end-3"
                                        placeholder="seuemail@exemplo.com" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" name="senha"
                                        class="form-control rounded-end-3"
                                        placeholder="Sua senha" required>
                                </div>
                            </div>

                            <button type="submit" class="lg-btn lg-btn--primary">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Entrar
                            </button>

                        </form>

                    </div>

                    <!-- CADASTRO DO CLIENTE -->
                    <div class="lg-panel lg-form-register">

                        <span class="lg-eyebrow"><span class="lg-idx">02</span> Nova conta</span>

                        <h2>Criar cadastro</h2>
                        <p class="lg-sub">Preencha seus dados para criar sua conta no Mobipet.</p>

                        <form method="POST" action="{{ route('cadastro.salvar') }}" id="cadastroForm">
                            @csrf

                            <!-- NOME -->
                            <div class="mb-2">
                                <label class="form-label">Nome Completo</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-user small"></i>
                                    </span>
                                    <input type="text" name="nome" class="form-control"
                                        placeholder="Seu nome completo" value="{{ old('nome', request('nome')) }}"
                                        required>
                                </div>
                            </div>

                            <!-- CPF + TELEFONE -->
                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label">CPF</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-id-card small"></i>
                                        </span>
                                        <input type="text" id="cpf" name="cpf" maxlength="14"
                                            inputmode="numeric" autocomplete="off" class="form-control"
                                            placeholder="000.000.000-00" value="{{ old('cpf') }}" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Telefone</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-telephone"></i>
                                        </span>
                                        <input type="text" id="telefone" name="telefone" maxlength="15"
                                            inputmode="numeric" autocomplete="off" class="form-control"
                                            placeholder="(19) 99999-8888" value="{{ old('telefone') }}" required>
                                    </div>
                                </div>
                            </div>

                            <!-- ENDEREÇO -->
                            <div class="mb-2">
                                <label class="form-label">Endereço Residencial</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-geo-alt"></i>
                                    </span>
                                    <input type="text" name="endereco" class="form-control"
                                        placeholder="Rua, Número, Bairro - Cidade" value="{{ old('endereco') }}"
                                        required>
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="mb-2">
                                <label class="form-label">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="seuemail@exemplo.com"
                                        value="{{ old('email', request('email')) }}" required>
                                </div>
                            </div>

                            <!-- SENHA -->
                            <div class="mb-3">
                                <label class="form-label">Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" name="senha" class="form-control"
                                        placeholder="Crie uma senha segura"
                                        value="{{ old('senha', request('senha')) }}" required>
                                </div>
                            </div>

                            <button type="submit" class="lg-btn lg-btn--primary">
                                <i class="bi bi-check-circle"></i>
                                Finalizar Cadastro
                            </button>

                        </form>

                    </div>

                </div>

                <!-- ---------- PAINEL AZUL DESLIZANTE ---------- -->
                <div class="lg-overlay-container">
                    <div class="lg-overlay">

                        <!-- CTA -> voltar para LOGIN -->
                        <div class="lg-overlay-panel">
                            <h2>Bem-vindo de volta!</h2>
                            <p>Já possui uma conta? Entre com seus dados para acessar o Mobipet.</p>
                            <button type="button" id="lgGoLogin" class="lg-btn lg-btn--ghost">
                                Entrar
                            </button>
                        </div>

                        <!-- CTA -> ir para CADASTRO -->
                        <div class="lg-overlay-panel">
                            <h2>Olá, amigo!</h2>
                            <p>Ainda não possui uma conta? Cadastre-se para aproveitar todos os recursos do Mobipet.</p>
                            <button type="button" id="lgGoRegister" class="lg-btn lg-btn--ghost">
                                Cadastrar
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </main>

    @include('partials.footer')

    <a href="#" id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
        style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Barra de progresso de rolagem -->
    <script>
        (function () {
            var bar = document.getElementById('lgProgress');
            if (!bar) return;
            function update() {
                var h = document.documentElement;
                var max = h.scrollHeight - h.clientHeight;
                var pct = max > 0 ? (h.scrollTop || document.body.scrollTop) / max * 100 : 0;
                bar.style.width = pct + '%';
            }
            document.addEventListener('scroll', update, { passive: true });
            window.addEventListener('resize', update);
            update();
        })();
    </script>

    <!-- Painel deslizante login/cadastro + máscaras -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const card = document.querySelector('.lg-card');
            const signinPanel = document.querySelector('.lg-form-signin');
            const registerPanel = document.querySelector('.lg-form-register');
            const goRegister = document.getElementById('lgGoRegister');
            const goLogin = document.getElementById('lgGoLogin');

            const mobileQuery = window.matchMedia('(max-width: 700px)');
            const smallQuery = window.matchMedia('(max-width: 480px)');

            // Ajusta a altura do card ao conteúdo do painel ativo,
            // para o cadastro (com mais campos) nunca ficar cortado ou com scroll.
            function syncCardHeight() {
                if (!card) return;

                const activePanel = card.classList.contains('lg-register-active')
                    ? registerPanel
                    : signinPanel;

                if (!activePanel) return;

                const contentHeight = activePanel.scrollHeight + 4;

                if (mobileQuery.matches) {
                    const bannerHeight = smallQuery.matches ? 175 : 190;
                    card.style.height = (bannerHeight + contentHeight) + 'px';
                } else {
                    card.style.height = Math.max(contentHeight, 480) + 'px';
                }
            }

            if (goRegister) {
                goRegister.addEventListener('click', function (e) {
                    e.preventDefault();
                    card.classList.add('lg-register-active');
                    syncCardHeight();
                });
            }

            if (goLogin) {
                goLogin.addEventListener('click', function (e) {
                    e.preventDefault();
                    card.classList.remove('lg-register-active');
                    syncCardHeight();
                });
            }

            window.addEventListener('resize', syncCardHeight);
            window.addEventListener('load', syncCardHeight);
            syncCardHeight();

            // Se o formulário de cadastro voltou com erros, abre já no cadastro
            @if ($errors->any() && old('nome'))
                card.classList.add('lg-register-active');
                syncCardHeight();
            @endif

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
                cpfInput.addEventListener('input', function () {
                    cpfInput.value = maskCPF(cpfInput.value);
                });
            }

            if (telefoneInput) {
                telefoneInput.addEventListener('input', function () {
                    telefoneInput.value = maskTelefone(telefoneInput.value);
                });
            }

            // Antes de enviar, remove a máscara para gravar só os números no banco
            const cadastroForm = document.getElementById('cadastroForm');
            if (cadastroForm) {
                cadastroForm.addEventListener('submit', function () {
                    if (cpfInput) cpfInput.value = cpfInput.value.replace(/\D/g, '');
                    if (telefoneInput) telefoneInput.value = telefoneInput.value.replace(/\D/g, '');
                });
            }

        });
    </script>

    @include('partials.logout-confirm')

</body>

</html>
