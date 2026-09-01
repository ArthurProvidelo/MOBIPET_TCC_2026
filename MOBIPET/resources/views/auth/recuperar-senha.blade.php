<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Recuperar Senha | Mobipet</title>
    <meta name="description"
        content="Recupere o acesso à sua conta Mobipet. Confirme o e-mail e o CPF cadastrados para redefinir sua senha na hora.">
    <meta name="keywords" content="recuperar senha mobipet, esqueci minha senha, redefinir senha">

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
           PÁGINA RECUPERAR SENHA — MOBIPET  ·  isolado (prefixo rs-)
           =========================================================== */
        .rs-page {
            --rs-accent: #175cdd;
            --rs-accent-dark: #0f47b3;
            --rs-accent-soft: #eaf1fe;
            --rs-ink: #0f1b34;
            --rs-body: #4a5568;
            --rs-muted: #8794a7;
            --rs-line: #e6ecf5;
            --rs-bg: #f7f9ff;
            --rs-radius: 26px;
            --rs-radius-sm: 14px;
            --rs-shadow-sm: 0 10px 30px -14px rgba(15, 27, 52, .2);
            --rs-shadow: 0 40px 90px -40px rgba(23, 92, 221, .4);

            font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--rs-body);
        }

        .rs-page h1,
        .rs-page h2,
        .rs-page h3,
        .rs-page h4 {
            font-family: "Montserrat", sans-serif;
            color: var(--rs-ink);
            letter-spacing: -0.022em;
            line-height: 1.12;
        }

        /* Barra de progresso de rolagem (padrão do site) */
        .rs-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, var(--rs-accent), #4ade80);
            z-index: 1100;
            transition: width .12s linear;
        }

        /* Rótulo de seção */
        .rs-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .74rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--rs-accent);
            margin-bottom: 14px;
        }

        .rs-eyebrow::before {
            content: "";
            width: 26px;
            height: 2px;
            background: currentColor;
        }

        .rs-eyebrow .rs-idx {
            color: var(--rs-muted);
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
        .rs-btn {
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

        .rs-btn--primary {
            width: 100%;
            background: var(--rs-accent);
            color: #fff;
            box-shadow: 0 18px 34px -16px rgba(23, 92, 221, .75);
        }

        .rs-btn--primary:hover {
            background: var(--rs-accent-dark);
            color: #fff;
            transform: translateY(-3px);
        }

        .rs-btn--primary:disabled {
            opacity: .65;
            cursor: not-allowed;
            transform: none;
        }

        .rs-btn--ghost {
            min-width: 150px;
            background: transparent;
            color: #fff;
            border-color: rgba(255, 255, 255, .7);
        }

        .rs-btn--ghost:hover {
            background: #fff;
            color: var(--rs-accent);
            transform: translateY(-3px);
        }

        .rs-back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-family: "Lato", sans-serif;
            font-weight: 600;
            font-size: .85rem;
            color: var(--rs-muted);
            text-decoration: none;
            margin-top: 18px;
            transition: color .2s ease, gap .2s ease;
        }

        .rs-back-link:hover {
            color: var(--rs-accent);
            gap: 10px;
        }

        /* =========================================================
           CARD (recuperação — layout estático de 2 colunas)
           ========================================================= */
        .rs-wrapper {
            display: flex;
            justify-content: center;
            padding: 2rem 1rem 4rem;
        }

        .rs-card {
            position: relative;
            width: 100%;
            max-width: 900px;
            min-height: 480px;
            background: #fff;
            border-radius: var(--rs-radius);
            overflow: hidden;
            box-shadow: var(--rs-shadow);
            font-family: "Roboto", sans-serif;
            display: flex;
        }

        /* =========================================================
           FORMULÁRIO
           ========================================================= */
        .rs-panel {
            width: 50%;
            padding: 55px 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .rs-panel h2 {
            font-weight: 800;
            font-size: clamp(1.6rem, 3vw, 2rem);
            margin: 0 0 6px;
        }

        .rs-panel .rs-sub {
            font-size: .92rem;
            color: var(--rs-muted);
            margin-bottom: 26px;
        }

        /* Campos */
        .rs-panel .form-label {
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .7rem;
            letter-spacing: .09em;
            text-transform: uppercase;
            color: var(--rs-muted);
            margin-bottom: 6px;
        }

        .rs-panel .input-group-text {
            background: var(--rs-bg);
            border: 1px solid var(--rs-line);
            color: var(--rs-muted);
        }

        .rs-panel .form-control {
            height: 50px;
            border: 1px solid var(--rs-line);
            box-shadow: none;
            transition: border-color .25s ease, box-shadow .25s ease;
        }

        .rs-panel .form-control:focus {
            border-color: var(--rs-accent);
            box-shadow: 0 0 0 4px var(--rs-accent-soft);
        }

        /* =========================================================
           PAINEL AZUL LATERAL (estático — sem toggle)
           ========================================================= */
        .rs-side {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            background:
                radial-gradient(46% 130% at 100% 0%, rgba(255, 255, 255, .16), transparent 60%),
                linear-gradient(135deg, var(--rs-accent), var(--rs-accent-dark));
        }

        .rs-side i.bi {
            font-size: 3.2rem;
            margin-bottom: 18px;
            opacity: .95;
        }

        .rs-side h2 {
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.5rem, 3.4vw, 2.1rem);
            font-weight: 800;
            margin-bottom: 14px;
        }

        .rs-side p {
            max-width: 320px;
            margin-bottom: 4px;
            font-size: .95rem;
            line-height: 1.65;
            color: rgba(255, 255, 255, .85);
        }

        /* =========================================================
           RESPONSIVO
           ========================================================= */
        @media (max-width: 900px) {
            .rs-card {
                max-width: 700px;
            }

            .rs-panel,
            .rs-side {
                padding: 40px 35px;
            }
        }

        @media (max-width: 700px) {
            .rs-card {
                flex-direction: column;
                max-width: 520px;
            }

            .rs-panel,
            .rs-side {
                width: 100%;
            }

            .rs-side {
                order: -1;
                padding: 30px 25px;
            }

            .rs-side p {
                font-size: .85rem;
            }

            .rs-panel {
                padding: 35px 25px;
            }
        }

        @media (max-width: 480px) {
            .rs-card {
                border-radius: 20px;
            }

            .rs-side i.bi {
                font-size: 2.6rem;
                margin-bottom: 12px;
            }

            .rs-panel {
                padding: 30px 20px;
            }
        }

        @media (prefers-reduced-motion: reduce) and (max-width: 1px) {

            .rs-page *,
            .rs-page *::before,
            .rs-page *::after {
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

    <div class="rs-progress" id="rsProgress"></div>

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

    <main class="main rs-page" style="margin-top: 120px;">

        <!-- ================= ALERTAS GLOBAIS ================= -->
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-10" style="max-width:900px;">
                    @if (session('sucesso'))
                        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 p-3 mb-3"
                            role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i> {{ session('sucesso') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

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

        <!-- ================= CARD RECUPERAR SENHA ================= -->
        <div class="rs-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="rs-card">

                <!-- ---------- FORMULÁRIO ---------- -->
                <div class="rs-panel">

                    <span class="rs-eyebrow"><span class="rs-idx">01</span> Recuperação</span>

                    <h2>Esqueceu sua senha?</h2>
                    <p class="rs-sub">Informe o e-mail e o CPF cadastrados na sua conta. Se os dois conferirem, você cria uma nova senha na hora.</p>

                    <form method="POST" action="{{ route('senha.verificar') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email"
                                    class="form-control rounded-end-3"
                                    placeholder="seuemail@exemplo.com" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">CPF</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-vcard"></i>
                                </span>
                                <input type="text" name="cpf"
                                    class="form-control rounded-end-3"
                                    placeholder="000.000.000-00" value="{{ old('cpf') }}"
                                    inputmode="numeric" maxlength="14" required>
                            </div>
                        </div>

                        <button type="submit" class="rs-btn rs-btn--primary">
                            <i class="bi bi-shield-check"></i>
                            Confirmar dados
                        </button>

                    </form>

                    <a href="{{ route('login') }}" class="rs-back-link">
                        <i class="bi bi-arrow-left"></i>
                        Voltar para o login
                    </a>

                </div>

                <!-- ---------- PAINEL AZUL LATERAL ---------- -->
                <div class="rs-side">
                    <i class="bi bi-shield-lock"></i>
                    <h2>Confirme sua identidade</h2>
                    <p>Sem link e sem espera: confirme o e-mail e o CPF que você usou no cadastro e crie uma nova senha na hora para voltar a cuidar do seu pet por aqui.</p>
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
            var bar = document.getElementById('rsProgress');
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

    @include('partials.logout-confirm')

</body>

</html>