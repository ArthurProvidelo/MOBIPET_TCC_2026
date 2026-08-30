<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Desenvolvedores | Mobipet</title>
    <meta name="description"
        content="Conheça o time por trás do Mobipet: seis desenvolvedores do SENAI que constroem o agendamento, o monitoramento e a gestão da plataforma.">
    <meta name="keywords" content="equipe mobipet, desenvolvedores, senai, laravel, flutter">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=JetBrains+Mono:wght@400;500;700&display=swap"
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
           PÁGINA DESENVOLVEDORES — MOBIPET  ·  isolado (prefixo dv-)
           =========================================================== */
        .dv-page {
            --dv-accent: #175cdd;
            --dv-accent-dark: #0f47b3;
            --dv-accent-soft: #eaf1fe;
            --dv-ink: #0f1b34;
            --dv-body: #4a5568;
            --dv-muted: #8794a7;
            --dv-amber: #f59e0b;
            --dv-green: #16a34a;
            --dv-violet: #6d5bd0;
            --dv-line: #e6ecf5;
            --dv-bg: #f7f9ff;
            --dv-radius: 24px;
            --dv-radius-sm: 14px;
            --dv-shadow-sm: 0 10px 30px -14px rgba(15, 27, 52, .2);
            --dv-shadow: 0 40px 90px -40px rgba(23, 92, 221, .4);

            font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--dv-body);
            background: var(--dv-bg);
            overflow-x: clip;
        }

        .dv-page h1,
        .dv-page h2,
        .dv-page h3,
        .dv-page h4 {
            font-family: "Montserrat", sans-serif;
            color: var(--dv-ink);
            letter-spacing: -0.022em;
            line-height: 1.12;
        }

        .dv-page p {
            line-height: 1.78;
        }

        .dv-wrap {
            width: min(1140px, 90%);
            margin-inline: auto;
        }

        .dv-page section {
            padding: clamp(4rem, 9vw, 8rem) 0;
            position: relative;
        }

        .dv-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, var(--dv-accent), #4ade80);
            z-index: 1100;
            transition: width .12s linear;
        }

        .dv-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .78rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--dv-accent);
        }

        .dv-eyebrow::before {
            content: "";
            width: 30px;
            height: 2px;
            background: currentColor;
        }

        .dv-eyebrow .dv-idx {
            color: var(--dv-muted);
            font-variant-numeric: tabular-nums;
        }

        .dv-h2 {
            font-size: clamp(1.9rem, 4.2vw, 3rem);
            margin: 22px 0 0;
        }

        .dv-lead {
            font-size: clamp(1.05rem, 2vw, 1.2rem);
            color: var(--dv-body);
        }

        .dv-mark {
            color: var(--dv-ink);
            font-weight: 600;
            background: linear-gradient(transparent 62%, color-mix(in srgb, var(--dv-amber) 45%, transparent) 62%);
        }

        /* Botões */
        .dv-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: .97rem;
            padding: 14px 26px;
            border-radius: 999px;
            border: 1.5px solid transparent;
            text-decoration: none;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease, border-color .2s ease;
        }

        .dv-btn--primary {
            background: var(--dv-accent);
            color: #fff;
            box-shadow: 0 18px 34px -16px rgba(23, 92, 221, .75);
        }

        .dv-btn--primary:hover {
            background: var(--dv-accent-dark);
            color: #fff;
            transform: translateY(-3px);
        }

        .dv-btn--ghost {
            background: transparent;
            color: var(--dv-ink);
            border-color: var(--dv-line);
        }

        .dv-btn--ghost:hover {
            border-color: var(--dv-accent);
            color: var(--dv-accent);
            transform: translateY(-3px);
        }

        .dv-btn--light {
            background: #fff;
            color: var(--dv-accent);
        }

        .dv-btn--light:hover {
            color: var(--dv-accent-dark);
            transform: translateY(-3px);
        }

        /* ===================== HERO ===================== */
        .dv-hero {
            padding-top: clamp(8rem, 16vw, 12rem) !important;
            padding-bottom: clamp(3rem, 8vw, 6rem) !important;
            background:
                radial-gradient(48% 40% at 84% 6%, var(--dv-accent-soft) 0%, transparent 62%),
                radial-gradient(40% 34% at 4% 94%, #e7f8ee 0%, transparent 60%),
                var(--dv-bg);
            overflow: hidden;
        }

        .dv-hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: clamp(2rem, 5vw, 4rem);
            align-items: center;
        }

        .dv-hero h1 {
            font-size: clamp(2.3rem, 5.6vw, 3.9rem);
            font-weight: 800;
            margin: 26px 0 20px;
        }

        .dv-hero h1 .dv-grad {
            background: linear-gradient(120deg, var(--dv-accent), #3b82f6 55%, #4ade80);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .dv-hero p {
            font-size: clamp(1.05rem, 2vw, 1.2rem);
            max-width: 500px;
            margin-bottom: 28px;
        }

        .dv-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .dv-hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: clamp(1.4rem, 5vw, 2.8rem);
            margin-top: 40px;
            padding-top: 28px;
            border-top: 1px solid var(--dv-line);
        }

        .dv-hero-meta b {
            display: block;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.6rem, 4vw, 2.1rem);
            color: var(--dv-ink);
            line-height: 1;
        }

        .dv-hero-meta span {
            font-size: .88rem;
            color: var(--dv-muted);
        }

        /* Terminal / git log */
        .dv-terminal {
            position: relative;
            background: #0b1220;
            border: 1px solid #1c2740;
            border-radius: var(--dv-radius);
            box-shadow: var(--dv-shadow);
            overflow: hidden;
            font-family: "JetBrains Mono", ui-monospace, SFMono-Regular, Menlo, monospace;
        }

        .dv-terminal::after {
            content: "";
            position: absolute;
            inset: -44px -44px auto auto;
            width: 170px;
            height: 170px;
            background: radial-gradient(circle, rgba(74, 222, 128, .28), transparent 70%);
            filter: blur(12px);
            animation: dv-glow 6s ease-in-out infinite alternate;
        }

        @keyframes dv-glow {
            from { transform: translate(0, 0) scale(1); }
            to { transform: translate(-14px, 18px) scale(1.15); }
        }

        .dv-term-bar {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 14px 18px;
            background: #0e1729;
            border-bottom: 1px solid #1c2740;
        }

        .dv-term-bar i {
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: #33405c;
        }

        .dv-term-bar i:nth-child(1) { background: #ff5f56; }
        .dv-term-bar i:nth-child(2) { background: #ffbd2e; }
        .dv-term-bar i:nth-child(3) { background: #27c93f; }

        .dv-term-bar span {
            margin-left: 10px;
            font-size: .78rem;
            color: #6b7a99;
        }

        .dv-term-body {
            padding: 22px 20px;
            font-size: .82rem;
            line-height: 1.9;
            color: #c7d2e6;
        }

        .dv-term-body .dv-cmd {
            color: #8aa2c8;
        }

        .dv-term-body .dv-cmd::before {
            content: "$ ";
            color: #4ade80;
        }

        .dv-term-body .dv-hash {
            color: var(--dv-amber);
        }

        .dv-term-body .dv-msg {
            color: #e6edf7;
        }

        .dv-term-body .dv-cur {
            display: inline-block;
            width: 8px;
            height: 15px;
            vertical-align: -3px;
            background: #4ade80;
            animation: dv-blink 1.1s steps(1) infinite;
        }

        @keyframes dv-blink {
            50% { opacity: 0; }
        }

        /* ===================== TIME ===================== */
        .dv-team {
            background: #fff;
            border-top: 1px solid var(--dv-line);
        }

        .dv-team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 54px;
        }

        .dv-member {
            background: var(--dv-bg);
            border: 1px solid var(--dv-line);
            border-radius: var(--dv-radius);
            overflow: hidden;
            transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
        }

        .dv-member:hover {
            transform: translateY(-10px);
            box-shadow: var(--dv-shadow);
            border-color: transparent;
        }

        .dv-member-photo {
            aspect-ratio: 1 / 1;
            overflow: hidden;
            background: var(--dv-accent-soft);
            display: flex;
        }

        .dv-member-photo img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center center;
            transition: transform .5s ease;
        }

        .dv-member:hover .dv-member-photo img {
            transform: scale(1.06);
        }

        .dv-member-body {
            padding: 24px;
        }

        .dv-role {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase;
            padding: 5px 11px;
            border-radius: 999px;
            margin-bottom: 12px;
        }

        .dv-role--front {
            color: var(--dv-accent);
            background: var(--dv-accent-soft);
        }

        .dv-role--back {
            color: var(--dv-green);
            background: #e7f8ee;
        }

        .dv-role--full {
            color: var(--dv-violet);
            background: #efecfb;
        }

        .dv-member-body h3 {
            font-size: 1.2rem;
            margin: 0 0 8px;
        }

        .dv-member-body p {
            margin: 0;
            font-size: .93rem;
            color: var(--dv-body);
        }

        /* ===================== DISCIPLINAS ===================== */
        .dv-areas {
            background: var(--dv-bg);
        }

        .dv-areas-grid {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: clamp(2rem, 6vw, 5rem);
            align-items: start;
        }

        .dv-areas-aside {
            position: sticky;
            top: 120px;
        }

        .dv-area {
            display: grid;
            grid-template-columns: 56px 1fr;
            gap: 22px;
            padding: 32px 0;
            border-top: 1px solid var(--dv-line);
        }

        .dv-area:first-child {
            padding-top: 0;
            border-top: 0;
        }

        .dv-area .dv-aico {
            width: 56px;
            height: 56px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            background: #fff;
            border: 1px solid var(--dv-line);
            color: var(--dv-accent);
            font-size: 1.5rem;
        }

        .dv-area h3 {
            font-size: 1.18rem;
            margin: 4px 0 8px;
        }

        .dv-area p {
            margin: 0;
            max-width: 520px;
        }

        /* ===================== STACK ===================== */
        .dv-stack {
            background: #fff;
        }

        .dv-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 48px;
        }

        .dv-tchip {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 22px;
            border-radius: var(--dv-radius-sm);
            background: var(--dv-bg);
            border: 1px solid var(--dv-line);
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: .95rem;
            color: var(--dv-ink);
            transition: transform .22s ease, box-shadow .22s ease, border-color .22s ease;
        }

        .dv-tchip:hover {
            transform: translateY(-5px);
            box-shadow: var(--dv-shadow-sm);
            border-color: color-mix(in srgb, var(--dv-accent) 35%, transparent);
        }

        .dv-tchip i {
            color: var(--dv-accent);
            font-size: 1.15rem;
        }

        /* ===================== JORNADA (timeline) ===================== */
        .dv-journey {
            background-color: #0f1b34;
            background-image: radial-gradient(60% 50% at 100% 0%, rgba(23, 92, 221, .28), transparent 60%);
            color: rgba(255, 255, 255, .74);
        }

        .dv-journey h2 {
            color: #fff;
        }

        .dv-journey .dv-eyebrow {
            color: #7db0ff;
        }

        .dv-journey .dv-eyebrow .dv-idx {
            color: rgba(255, 255, 255, .4);
        }

        .dv-journey .dv-lead {
            color: rgba(255, 255, 255, .74);
            max-width: 620px;
            margin-top: 16px;
        }

        .dv-tl {
            list-style: none;
            margin: 56px 0 0;
            padding: 0;
        }

        .dv-tl li {
            position: relative;
            padding: 0 0 34px 40px;
        }

        .dv-tl li:last-child {
            padding-bottom: 0;
        }

        .dv-tl li::before {
            content: "";
            position: absolute;
            left: 10px;
            top: 26px;
            bottom: -4px;
            width: 2px;
            background: rgba(255, 255, 255, .14);
        }

        .dv-tl li:last-child::before {
            display: none;
        }

        .dv-tl li::after {
            content: "";
            position: absolute;
            left: 3px;
            top: 4px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #0f1b34;
            border: 2px solid #4ade80;
        }

        .dv-tl li h3 {
            color: #fff;
            font-size: 1.15rem;
            margin: 0 0 6px;
        }

        .dv-tl li p {
            margin: 0;
            color: rgba(255, 255, 255, .66);
            max-width: 560px;
        }

        /* ===================== CTA ===================== */
        .dv-cta {
            background: var(--dv-bg);
        }

        .dv-cta-card {
            border-radius: clamp(24px, 4vw, 42px);
            padding: clamp(3rem, 8vw, 5.5rem) clamp(1.5rem, 5vw, 4rem);
            text-align: center;
            color: #fff;
            background:
                radial-gradient(46% 130% at 100% 0%, rgba(255, 255, 255, .16), transparent 60%),
                linear-gradient(135deg, var(--dv-accent), var(--dv-accent-dark));
        }

        .dv-cta-card h2 {
            color: #fff;
            font-size: clamp(1.8rem, 4.4vw, 2.8rem);
            margin-bottom: 14px;
        }

        .dv-cta-card p {
            color: rgba(255, 255, 255, .85);
            font-size: 1.1rem;
            max-width: 540px;
            margin: 0 auto 32px;
        }

        .dv-cta-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            justify-content: center;
        }

        /* ===================== RESPONSIVO ===================== */
        @media (max-width: 991px) {

            .dv-hero-grid,
            .dv-areas-grid {
                grid-template-columns: 1fr;
            }

            .dv-areas-aside {
                position: static;
            }

            .dv-team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 575px) {
            .dv-team-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .dv-page *,
            .dv-page *::before,
            .dv-page *::after {
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

<body class="doctors-page">

    @include('partials.preloader')


    <div class="dv-progress" id="dvProgress"></div>

    <header id="header" class="header fixed-top">

        <!-- Scroll Top -->
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
                        <li><a href="{{ route('devs') }}" class="active">Desenvolvedores</a></li>

                        {{-- CLIENTE --}}
                        @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
                            <li><a href="{{ route('perfil') }}"><i class="fa-solid fa-user"></i></a></li>
                            <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

                            {{-- FUNCIONÁRIO --}}
                        @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                            <li><a href="{{ route('painel-controle') }}">Painel</a></li>
                            <li><a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a></li>
                            <li><a href="{{ route('perfil') }}">Perfil</a></li>
                            <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

                            {{-- VISITANTE --}}
                        @else
                            <li><a href="{{ route('login') }}">Entrar</a></li>
                        @endif
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

                </nav>

            </div>

        </div>

    </header>

    <main class="main dv-page">

        <!-- ================= HERO ================= -->
        <section class="dv-hero">
            <div class="dv-wrap">
                <div class="dv-hero-grid">

                    <div data-aos="fade-right">
                        <h1>
                            As pessoas que <span class="dv-grad">construiram o Mobipet.</span>
                        </h1>
                        <p>
                            Somos seis desenvolvedores formados no SENAI. Em dois anos de
                            prática, colocamos de pé o agendamento, o monitoramento em tempo
                            real e a gestão que fazem a plataforma funcionar.
                        </p>

                        <div class="dv-hero-actions">
                            <a href="#dv-time" class="dv-btn dv-btn--primary">
                                Conhecer o time <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="{{ route('sobre') }}" class="dv-btn dv-btn--ghost">
                                <i class="bi bi-info-circle"></i> Sobre o produto
                            </a>
                        </div>

                    </div>

                    <div class="dv-terminal" data-aos="fade-left" data-aos-delay="150">
                        <div class="dv-term-bar">
                            <i></i><i></i><i></i>
                            <span>mobipet — git log</span>
                        </div>
                        <div class="dv-term-body">
                            <div class="dv-cmd">git log --oneline -5</div>
                            <div><span class="dv-hash">846458a</span> <span class="dv-msg">Setup do ambiente nesta máquina</span></div>
                            <div><span class="dv-hash">a54235f</span> <span class="dv-msg">Atualização API/Flutter</span></div>
                            <div><span class="dv-hash">4b5a22c</span> <span class="dv-msg">Atualização do footer</span></div>
                            <div><span class="dv-hash">80a4cea</span> <span class="dv-msg">Atualização API - 18/08</span></div>
                            <div><span class="dv-hash">018e38b</span> <span class="dv-msg">Atualização API</span></div>
                            <div class="dv-cmd">git status <span class="dv-cur"></span></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= TIME ================= -->
        <section class="dv-team" id="dv-time">
            <div class="dv-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="dv-eyebrow"><span class="dv-idx">01</span> Quem faz acontecer</span>
                    <h2 class="dv-h2">Seis pessoas, uma plataforma</h2>
                    <p class="dv-lead" style="margin-top:18px;">
                        Cada integrante cuida de uma parte do Mobipet &mdash; da tela que o tutor
                        vê ao banco de dados que guarda cada atendimento.
                    </p>
                </div>

                <div class="dv-team-grid">

                    <article class="dv-member" data-aos="fade-up" data-aos-delay="0">
                        <div class="dv-member-photo">
                            <img src="{{ asset('assets/img/arthur_novo.png') }}" alt="Arthur Barbosa">
                        </div>
                        <div class="dv-member-body">
                            <span class="dv-role dv-role--front"><i class="bi bi-window"></i> Front-end</span>
                            <h3>Arthur Barbosa</h3>
                            <p>Responsável pela interface do usuário e pela experiência de navegação.</p>
                        </div>
                    </article>

                    <article class="dv-member" data-aos="fade-up" data-aos-delay="80">
                        <div class="dv-member-photo">
                            <img src="{{ asset('assets/img/arthurprovidelo.png') }}" alt="Arthur Providelo">
                        </div>
                        <div class="dv-member-body">
                            <span class="dv-role dv-role--full"><i class="bi bi-layers"></i> Full Stack</span>
                            <h3>Arthur Providelo</h3>
                            <p>Atua no front-end e no back-end, conectando as duas pontas do sistema.</p>
                        </div>
                    </article>

                    <article class="dv-member" data-aos="fade-up" data-aos-delay="160">
                        <div class="dv-member-photo">
                            <img src="{{ asset('assets/img/kailasilva.png') }}" alt="Kaila Silva">
                        </div>
                        <div class="dv-member-body">
                            <span class="dv-role dv-role--back"><i class="bi bi-hdd-stack"></i> Back-end</span>
                            <h3>Kaila Silva</h3>
                            <p>Cuida da integração com o banco de dados e da persistência dos agendamentos.</p>
                        </div>
                    </article>

                    <article class="dv-member" data-aos="fade-up" data-aos-delay="0">
                        <div class="dv-member-photo">
                            <img src="{{ asset('assets/img/kauanferreira.png') }}" alt="Kauan Ferreira">
                        </div>
                        <div class="dv-member-body">
                            <span class="dv-role dv-role--front"><i class="bi bi-window"></i> Front-end</span>
                            <h3>Kauan Ferreira</h3>
                            <p>Focado em usabilidade e design, deixando cada fluxo simples de usar.</p>
                        </div>
                    </article>

                    <article class="dv-member" data-aos="fade-up" data-aos-delay="80">
                        <div class="dv-member-photo">
                            <img src="{{ asset('assets/img/lorenaprofissional.png') }}" alt="Lorena Thomaz">
                        </div>
                        <div class="dv-member-body">
                            <span class="dv-role dv-role--front"><i class="bi bi-window"></i> Front-end</span>
                            <h3>Lorena Thomaz</h3>
                            <p>Trabalha a experiência visual do sistema e a consistência das telas.</p>
                        </div>
                    </article>

                    <article class="dv-member" data-aos="fade-up" data-aos-delay="160">
                        <div class="dv-member-photo">
                            <img src="{{ asset('assets/img/mariafernanda.png') }}" alt="Maria Fernanda Galdino">
                        </div>
                        <div class="dv-member-body">
                            <span class="dv-role dv-role--back"><i class="bi bi-hdd-stack"></i> Back-end</span>
                            <h3>Maria Fernanda Galdino</h3>
                            <p>Responsável pelo funcionamento interno da aplicação e pelas regras de negócio.</p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- ================= DISCIPLINAS ================= -->
        <section class="dv-areas">
            <div class="dv-wrap">
                <div class="dv-areas-grid">

                    <div class="dv-areas-aside" data-aos="fade-up">
                        <span class="dv-eyebrow"><span class="dv-idx">02</span> Como nos dividimos</span>
                        <h2 class="dv-h2" style="margin-top:20px;">Quatro frentes trabalhando junto.</h2>
                    </div>

                    <div>
                        <div class="dv-area" data-aos="fade-up">
                            <div class="dv-aico"><i class="bi bi-window"></i></div>
                            <div>
                                <h3>Front-end</h3>
                                <p>As telas do tutor e do petshop: agendamento, acompanhamento em
                                    tempo real e o painel de controle, sempre pensando na clareza.</p>
                            </div>
                        </div>
                        <div class="dv-area" data-aos="fade-up">
                            <div class="dv-aico"><i class="bi bi-hdd-stack"></i></div>
                            <div>
                                <h3>Back-end</h3>
                                <p>As regras de negócio, a autenticação e a API que sustenta o
                                    agendamento, o status do atendimento e as notificações.</p>
                            </div>
                        </div>
                        <div class="dv-area" data-aos="fade-up">
                            <div class="dv-aico"><i class="bi bi-database"></i></div>
                            <div>
                                <h3>Banco de dados</h3>
                                <p>Modelagem de clientes, pets, serviços e agendamentos, garantindo
                                    que o histórico de cada atendimento fique registrado.</p>
                            </div>
                        </div>
                        <div class="dv-area" data-aos="fade-up">
                            <div class="dv-aico"><i class="bi bi-palette"></i></div>
                            <div>
                                <h3>Design e usabilidade</h3>
                                <p>Identidade visual, consistência entre as páginas e acessibilidade
                                    &mdash; incluindo a tradução em Libras integrada.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= STACK ================= -->
        <section class="dv-stack">
            <div class="dv-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="dv-eyebrow"><span class="dv-idx">03</span> Ferramentas</span>
                    <h2 class="dv-h2">A stack que move o Mobipet</h2>
                    <p class="dv-lead" style="margin-top:18px;">
                        Tecnologias escolhidas para dar conta da web, da API e do aplicativo
                        com o mesmo time.
                    </p>
                </div>

                <div class="dv-chips" data-aos="fade-up">
                    <span class="dv-tchip"><i class="bi bi-git"></i> Laravel</span>
                    <span class="dv-tchip"><i class="bi bi-filetype-php"></i> PHP</span>
                    <span class="dv-tchip"><i class="bi bi-code-slash"></i> Blade</span>
                    <span class="dv-tchip"><i class="bi bi-bootstrap"></i> Bootstrap</span>
                    <span class="dv-tchip"><i class="bi bi-filetype-js"></i> JavaScript</span>
                    <span class="dv-tchip"><i class="bi bi-database"></i> MySQL</span>
                    <span class="dv-tchip"><i class="bi bi-phone"></i> Flutter</span>
                    <span class="dv-tchip"><i class="bi bi-github"></i> Git &amp; GitHub</span>
                </div>
            </div>
        </section>


        <!-- ================= CTA ================= -->
        <section class="dv-cta">
            <div class="dv-wrap">
                <div class="dv-cta-card" data-aos="zoom-in">
                    <h2>Quero conhecer o Mobipet </h2>
                    <p>Explore a plataforma que esses desenvolvedores mantêm no ar.</p>
                    <div class="dv-cta-actions">
                        <a href="{{ route('services') }}" class="dv-btn dv-btn--light">
                            Conhecer os serviços <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="{{ route('index') }}" class="dv-btn dv-btn--ghost"
                            style="color:#fff;border-color:rgba(255,255,255,.4);">
                            <i class="bi bi-house"></i> Ir para o início
                        </a>
                    </div>
                </div>
            </div>
        </section>

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
            var bar = document.getElementById('dvProgress');
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
