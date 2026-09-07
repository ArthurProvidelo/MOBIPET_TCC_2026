<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Início | Mobipet</title>
    <meta name="description"
        content="Mobipet: agende banho, tosa e consultas em segundos e acompanhe cada etapa do atendimento do seu pet em tempo real.">
    <meta name="keywords" content="petshop, banho e tosa, monitoramento pet, agendamento pet, mobipet">

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
           PÁGINA INÍCIO — MOBIPET  ·  estilos isolados (prefixo mp-)
           Mesmo design system das páginas Sobre / Serviços / Devs.
           =========================================================== */
        .mp-page {
            --mp-accent: #175cdd;
            --mp-accent-dark: #0f47b3;
            --mp-accent-soft: #eaf1fe;
            --mp-ink: #0f1b34;
            --mp-body: #4a5568;
            --mp-muted: #8794a7;
            --mp-amber: #f59e0b;
            --mp-green: #16a34a;
            --mp-line: #e6ecf5;
            --mp-bg: #f7f9ff;
            --mp-radius: 24px;
            --mp-radius-sm: 14px;
            --mp-shadow-sm: 0 10px 30px -14px rgba(15, 27, 52, .2);
            --mp-shadow: 0 40px 90px -40px rgba(23, 92, 221, .4);

            font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--mp-body);
            background: var(--mp-bg);
            overflow-x: clip;
        }

        .mp-page h1,
        .mp-page h2,
        .mp-page h3,
        .mp-page h4 {
            font-family: "Montserrat", sans-serif;
            color: var(--mp-ink);
            letter-spacing: -0.022em;
            line-height: 1.12;
        }

        .mp-page p {
            line-height: 1.78;
        }

        .mp-wrap {
            width: min(1140px, 90%);
            margin-inline: auto;
        }

        .mp-narrow {
            width: min(720px, 90%);
            margin-inline: auto;
        }

        .mp-page section {
            padding: clamp(4rem, 9vw, 8rem) 0;
            position: relative;
        }

        /* ---- Barra de progresso de rolagem ---- */
        .mp-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, var(--mp-accent), #4ade80);
            z-index: 1100;
            transition: width .12s linear;
        }

        /* ---- Rótulo de seção (eyebrow editorial) ---- */
        .mp-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .78rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--mp-accent);
        }

        .mp-eyebrow::before {
            content: "";
            width: 30px;
            height: 2px;
            background: currentColor;
        }

        .mp-eyebrow .mp-idx {
            color: var(--mp-muted);
            font-variant-numeric: tabular-nums;
        }

        .mp-h2 {
            font-size: clamp(1.9rem, 4.2vw, 3rem);
            margin: 22px 0 0;
        }

        .mp-lead {
            font-size: clamp(1.05rem, 2vw, 1.2rem);
            color: var(--mp-body);
        }

        .mp-mark {
            color: var(--mp-ink);
            font-weight: 600;
            background: linear-gradient(transparent 62%, color-mix(in srgb, var(--mp-amber) 45%, transparent) 62%);
        }

        /* ---- Botões ---- */
        .mp-btn {
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
            cursor: pointer;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease, border-color .2s ease;
        }

        .mp-btn--primary {
            background: var(--mp-accent);
            color: #fff;
            box-shadow: 0 18px 34px -16px rgba(23, 92, 221, .75);
        }

        .mp-btn--primary:hover {
            background: var(--mp-accent-dark);
            color: #fff;
            transform: translateY(-3px);
        }

        .mp-btn--ghost {
            background: transparent;
            color: var(--mp-ink);
            border-color: var(--mp-line);
        }

        .mp-btn--ghost:hover {
            border-color: var(--mp-accent);
            color: var(--mp-accent);
            transform: translateY(-3px);
        }

        .mp-btn--light {
            background: #fff;
            color: var(--mp-accent);
        }

        .mp-btn--light:hover {
            color: var(--mp-accent-dark);
            transform: translateY(-3px);
        }

        /* ===================== HERO ===================== */
        .mp-hero {
            padding-top: clamp(8rem, 16vw, 12rem) !important;
            padding-bottom: clamp(3rem, 8vw, 6rem) !important;
            background:
                radial-gradient(48% 40% at 84% 6%, var(--mp-accent-soft) 0%, transparent 62%),
                radial-gradient(40% 34% at 4% 94%, #e7f8ee 0%, transparent 60%),
                var(--mp-bg);
            overflow: hidden;
        }

        .mp-hero-grid {
            display: grid;
            grid-template-columns: 1.08fr .92fr;
            gap: clamp(2rem, 5vw, 4rem);
            align-items: center;
        }

        .mp-hero h1 {
            font-size: clamp(2.3rem, 6vw, 4rem);
            font-weight: 800;
            margin: 26px 0 22px;
        }

        .mp-hero h1 .mp-grad {
            background: linear-gradient(120deg, var(--mp-accent), #3b82f6 55%, #4ade80);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .mp-hero p {
            font-size: clamp(1.05rem, 2vw, 1.22rem);
            max-width: 520px;
            margin-bottom: 30px;
        }

        .mp-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .mp-scrollcue {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 42px;
            font-size: .82rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--mp-muted);
            font-family: "Lato", sans-serif;
            font-weight: 700;
        }

        .mp-scrollcue i {
            animation: mp-bob 1.8s ease-in-out infinite;
        }

        @keyframes mp-bob {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(6px); }
        }

        /* Painel "ao vivo" do hero */
        .mp-live-card {
            position: relative;
            background: #fff;
            border: 1px solid var(--mp-line);
            border-radius: var(--mp-radius);
            box-shadow: var(--mp-shadow);
            padding: 26px;
        }

        .mp-live-card::after {
            content: "";
            position: absolute;
            inset: -40px -40px auto auto;
            width: 160px;
            height: 160px;
            background: radial-gradient(circle, rgba(74, 222, 128, .35), transparent 70%);
            filter: blur(10px);
            z-index: -1;
            animation: mp-glow 6s ease-in-out infinite alternate;
        }

        @keyframes mp-glow {
            from { transform: translate(0, 0) scale(1); }
            to { transform: translate(-14px, 18px) scale(1.15); }
        }

        .mp-lc-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .mp-lc-head b {
            font-family: "Montserrat", sans-serif;
            font-size: .98rem;
            color: var(--mp-ink);
        }

        .mp-badge-live {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .06em;
            color: var(--mp-green);
            background: #e7f8ee;
            padding: 5px 11px;
            border-radius: 999px;
        }

        .mp-badge-live .mp-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--mp-green);
            animation: mp-pulse 2s infinite;
        }

        @keyframes mp-pulse {
            0% { box-shadow: 0 0 0 0 rgba(22, 163, 74, .5); }
            70% { box-shadow: 0 0 0 10px rgba(22, 163, 74, 0); }
            100% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0); }
        }

        /* ---- Lista de etapas (compartilhada hero + demo) ---- */
        .mp-steps {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .mp-steps li {
            position: relative;
            padding: 0 0 20px 30px;
            font-size: .93rem;
            color: var(--mp-muted);
            transition: color .3s ease;
        }

        .mp-steps li:last-child {
            padding-bottom: 0;
        }

        .mp-steps li::before {
            content: "";
            position: absolute;
            left: 8px;
            top: 20px;
            bottom: -2px;
            width: 2px;
            background: var(--mp-line);
        }

        .mp-steps li:last-child::before {
            display: none;
        }

        .mp-steps li::after {
            content: "";
            position: absolute;
            left: 2px;
            top: 3px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--mp-line);
            transition: background .3s ease, border-color .3s ease, box-shadow .3s ease;
        }

        .mp-steps li.is-done {
            color: var(--mp-body);
        }

        .mp-steps li.is-done::after {
            background: var(--mp-green);
            border-color: var(--mp-green);
        }

        .mp-steps li.is-now {
            color: var(--mp-accent);
            font-weight: 600;
        }

        .mp-steps li.is-now::after {
            background: var(--mp-accent);
            border-color: #fff;
            box-shadow: 0 0 0 4px rgba(23, 92, 221, .25);
            animation: mp-pulse 2s infinite;
        }

        /* ===================== MANIFESTO ===================== */
        .mp-manifesto {
            background: #fff;
            border-top: 1px solid var(--mp-line);
        }

        .mp-manifesto .mp-big {
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            color: var(--mp-ink);
            font-size: clamp(1.5rem, 3.6vw, 2.4rem);
            line-height: 1.32;
            letter-spacing: -0.02em;
        }

        .mp-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 44px;
        }

        .mp-pill {
            flex: 1 1 200px;
            border: 1px solid var(--mp-line);
            border-radius: var(--mp-radius-sm);
            padding: 22px 24px;
            background: var(--mp-bg);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .mp-pill:hover {
            transform: translateY(-6px);
            box-shadow: var(--mp-shadow-sm);
        }

        .mp-pill b {
            display: block;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.7rem, 4vw, 2.2rem);
            color: var(--mp-ink);
            line-height: 1;
        }

        .mp-pill span {
            font-size: .9rem;
            color: var(--mp-muted);
        }

        /* ===================== COMO FUNCIONA ===================== */
        .mp-how {
            background: var(--mp-bg);
        }

        .mp-flow {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            margin-top: 58px;
            position: relative;
        }

        .mp-flow::before {
            content: "";
            position: absolute;
            top: 27px;
            left: 11%;
            right: 11%;
            height: 2px;
            background: repeating-linear-gradient(90deg, var(--mp-line) 0 8px, transparent 8px 16px);
        }

        .mp-node {
            position: relative;
            text-align: center;
        }

        .mp-node .mp-nring {
            width: 56px;
            height: 56px;
            margin: 0 auto 20px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--mp-line);
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            color: var(--mp-accent);
            transition: .25s ease;
        }

        .mp-node:hover .mp-nring {
            background: var(--mp-accent);
            border-color: var(--mp-accent);
            color: #fff;
            transform: translateY(-5px);
        }

        .mp-node h3 {
            font-size: 1.05rem;
            margin-bottom: 6px;
        }

        .mp-node p {
            font-size: .92rem;
            margin: 0;
        }

        /* ============ ACOMPANHAMENTO AO VIVO (seção escura) ============ */
        .mp-demo {
            background-color: #0f1b34;
            background-image:
                radial-gradient(60% 50% at 100% 0%, rgba(23, 92, 221, .28), transparent 60%),
                linear-gradient(180deg, #0f1b34 0%, #101d3a 100%);
            color: rgba(255, 255, 255, .72);
        }

        .mp-demo h2 {
            color: #fff;
        }

        .mp-demo .mp-eyebrow {
            color: #7db0ff;
        }

        .mp-demo .mp-eyebrow .mp-idx {
            color: rgba(255, 255, 255, .4);
        }

        .mp-demo-lead {
            font-size: clamp(1.05rem, 2vw, 1.2rem);
            color: rgba(255, 255, 255, .72);
            max-width: 560px;
            margin-top: 20px;
        }

        .mp-demo-hint {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 24px;
            font-size: .82rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #7db0ff;
            font-family: "Lato", sans-serif;
            font-weight: 700;
        }

        .mp-demo-hint i {
            animation: mp-bob 1.8s ease-in-out infinite;
        }

        .mp-demo-grid {
            display: grid;
            grid-template-columns: 1fr 1.05fr;
            gap: clamp(2rem, 6vw, 4.5rem);
            align-items: center;
            margin-top: 56px;
        }

        .mp-panel {
            background: #fff;
            border-radius: var(--mp-radius);
            box-shadow: var(--mp-shadow);
            padding: 28px;
            color: var(--mp-body);
        }

        .mp-panel-head {
            display: flex;
            align-items: center;
            gap: 14px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--mp-line);
        }

        .mp-panel-head .mp-pet {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: grid;
            place-items: center;
            background: var(--mp-accent-soft);
            color: var(--mp-accent);
            font-size: 1.4rem;
            flex: none;
        }

        .mp-panel-head b {
            display: block;
            font-family: "Montserrat", sans-serif;
            color: var(--mp-ink);
            font-size: 1rem;
        }

        .mp-panel-head span {
            font-size: .84rem;
            color: var(--mp-muted);
        }

        .mp-panel-head .mp-badge-live {
            margin-left: auto;
            flex: none;
        }

        .mp-prog-head {
            display: flex;
            justify-content: space-between;
            font-size: .82rem;
            font-weight: 600;
            color: var(--mp-body);
            margin: 22px 0 8px;
        }

        .mp-prog {
            height: 10px;
            border-radius: 999px;
            background: #eef1f6;
            overflow: hidden;
        }

        .mp-prog > span {
            display: block;
            height: 100%;
            width: 0;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--mp-accent), #4f8cff);
            transition: width .6s cubic-bezier(.4, 0, .2, 1);
        }

        .mp-panel .mp-steps {
            margin-top: 22px;
        }

        .mp-toast {
            margin-top: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border-radius: var(--mp-radius-sm);
            background: var(--mp-ink);
            color: #fff;
            font-size: .9rem;
            opacity: 0;
            transform: translateY(8px);
            transition: opacity .3s ease, transform .3s ease;
        }

        .mp-toast.is-show {
            opacity: 1;
            transform: translateY(0);
        }

        .mp-toast i {
            color: #4ade80;
            font-size: 1.2rem;
            flex: none;
        }

        .mp-demo-controls {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 22px;
        }

        .mp-demo-controls .mp-btn {
            flex: 1 1 auto;
            justify-content: center;
        }

        .mp-btn--soft {
            background: #f1f4f9;
            color: var(--mp-ink);
            flex: 0 0 auto !important;
        }

        .mp-btn--soft:hover {
            background: #e5eaf2;
        }

        /* ===================== RECURSOS ===================== */
        .mp-features {
            background: #fff;
        }

        .mp-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 58px;
        }

        .mp-card {
            border: 1px solid var(--mp-line);
            border-radius: var(--mp-radius);
            padding: 32px;
            background: #fff;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .mp-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--mp-shadow-sm);
        }

        .mp-card .mp-cico {
            width: 54px;
            height: 54px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            background: var(--mp-accent-soft);
            color: var(--mp-accent);
            font-size: 1.5rem;
            margin-bottom: 18px;
        }

        .mp-card:nth-child(3n+2) .mp-cico {
            background: #e7f8ee;
            color: var(--mp-green);
        }

        .mp-card:nth-child(3n) .mp-cico {
            background: #fef3e2;
            color: var(--mp-amber);
        }

        .mp-card h3 {
            font-size: 1.16rem;
            margin: 0 0 8px;
        }

        .mp-card p {
            margin: 0;
            font-size: .96rem;
            color: var(--mp-body);
        }

        /* ===================== PARA QUEM É ===================== */
        .mp-aud {
            background: var(--mp-bg);
        }

        .mp-aud-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 26px;
            margin-top: 54px;
        }

        .mp-audcard {
            border-radius: var(--mp-radius);
            padding: 38px;
            border: 1px solid var(--mp-line);
            background: #fff;
        }

        .mp-audcard--dark {
            background: var(--mp-ink);
            border-color: var(--mp-ink);
        }

        .mp-audcard-top {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
        }

        .mp-audcard-top .mp-af {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: var(--mp-accent-soft);
            color: var(--mp-accent);
            font-size: 1.4rem;
        }

        .mp-audcard--dark .mp-af {
            background: rgba(255, 255, 255, .1);
            color: #7db0ff;
        }

        .mp-audcard h3 {
            margin: 0;
            font-size: 1.28rem;
        }

        .mp-audcard--dark h3 {
            color: #fff;
        }

        .mp-audcard ul {
            list-style: none;
            margin: 0 0 28px;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .mp-audcard li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: .97rem;
            color: var(--mp-body);
        }

        .mp-audcard--dark li {
            color: rgba(255, 255, 255, .8);
        }

        .mp-audcard li i {
            flex: none;
            margin-top: 3px;
            color: var(--mp-green);
        }

        .mp-audcard--dark li i {
            color: #4ade80;
        }

        /* ===================== CTA FINAL ===================== */
        .mp-cta {
            background: #fff;
        }

        .mp-cta-card {
            border-radius: clamp(24px, 4vw, 42px);
            padding: clamp(3rem, 8vw, 5.5rem) clamp(1.5rem, 5vw, 4rem);
            text-align: center;
            color: #fff;
            background:
                radial-gradient(46% 130% at 100% 0%, rgba(255, 255, 255, .16), transparent 60%),
                linear-gradient(135deg, var(--mp-accent), var(--mp-accent-dark));
        }

        .mp-cta-card h2 {
            color: #fff;
            font-size: clamp(1.8rem, 4.4vw, 2.8rem);
            margin-bottom: 14px;
        }

        .mp-cta-card p {
            color: rgba(255, 255, 255, .85);
            font-size: 1.1rem;
            max-width: 540px;
            margin: 0 auto 32px;
        }

        .mp-cta-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            justify-content: center;
        }

        /* ===================== RESPONSIVO ===================== */
        @media (max-width: 991px) {

            .mp-hero-grid,
            .mp-demo-grid,
            .mp-aud-grid {
                grid-template-columns: 1fr;
            }

            .mp-flow {
                grid-template-columns: repeat(2, 1fr);
            }

            .mp-flow::before {
                display: none;
            }

            .mp-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 575px) {

            .mp-flow,
            .mp-cards {
                grid-template-columns: 1fr;
            }

            .mp-audcard {
                padding: 26px;
            }
        }

        @media (prefers-reduced-motion: reduce) and (max-width: 1px) {
            .mp-page *,
            .mp-page *::before,
            .mp-page *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body class="index-page">

    @include('partials.preloader')


    <div class="mp-progress" id="mpProgress"></div>

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

                        @include('partials.nav-user')
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

                </nav>

            </div>

        </div>

    </header>

    <main class="main mp-page">

        <!-- ================= HERO ================= -->
        <section class="mp-hero">
            <div class="mp-wrap">
                <div class="mp-hero-grid">

                    <div data-aos="fade-right">
                        <span class="mp-eyebrow">Petshop com tecnologia</span>
                        <h1>
                            Acompanhe o banho e a tosa do seu pet
                            <span class="mp-grad">em tempo real.</span>
                        </h1>
                        <p>
                            Agende em segundos e veja cada etapa do atendimento acontecer, sem
                            precisar ligar no petshop. Simples de usar, mesmo na primeira vez.
                        </p>

                        <div class="mp-hero-actions">
                            @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                                <a href="{{ route('agendamento') }}" class="mp-btn mp-btn--primary">
                                    Agendar um serviço <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="{{ route('pets.index') }}" class="mp-btn mp-btn--ghost">
                                    <i class="bi bi-heart"></i> Meus pets
                                </a>
                            @elseif (session()->has('id') && (session('nivel_acesso') === 'FUNCIONARIO' || session('nivel_acesso') === 'ADMIN'))
                                <a href="{{ route('painel-controle') }}" class="mp-btn mp-btn--primary">
                                    Abrir o painel <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="{{ route('funcionario.agendamentos') }}" class="mp-btn mp-btn--ghost">
                                    <i class="bi bi-calendar-week"></i> Ver agendamentos
                                </a>
                            @else
                                <a href="{{ route('cadastro') }}" class="mp-btn mp-btn--primary">
                                    Criar conta grátis <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="#mp-demo" class="mp-btn mp-btn--ghost" data-mp-scroll>
                                    <i class="bi bi-play-circle"></i> Ver como funciona
                                </a>
                            @endif
                        </div>

                        <span class="mp-scrollcue">
                            <i class="bi bi-arrow-down"></i> Role para conhecer
                        </span>
                    </div>

                    <div class="mp-live-card" data-aos="fade-left" data-aos-delay="150">
                        <div class="mp-lc-head">
                            <b>Rex &middot; Banho &amp; Tosa</b>
                            <span class="mp-badge-live"><span class="mp-dot"></span> AO VIVO</span>
                        </div>
                        <ul class="mp-steps">
                            <li class="is-done">Agendamento confirmado</li>
                            <li class="is-done">Pet recebido no petshop</li>
                            <li class="is-now">Banho em andamento</li>
                            <li>Secagem e escovação</li>
                            <li>Pronto para retirada</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= MANIFESTO ================= -->
        <section class="mp-manifesto">
            <div class="mp-wrap">
                <div class="mp-narrow" style="margin-inline:0;" data-aos="fade-up">
                    <p class="mp-big" style="margin-top:24px;">
                        O Mobipet deixa o atendimento do seu pet
                        <span class="mp-mark">mais rápido</span>,
                        <span class="mp-mark">mais transparente</span> e
                        <span class="mp-mark">sem telefone</span> &mdash;
                        do agendamento à retirada.
                    </p>
                    <p class="mp-lead" style="margin-top:22px;">
                        Você marca o horário pelo celular e acompanha cada etapa acontecer,
                        com aviso automático a cada mudança. Sem ligação, sem fila, sem "já está pronto?".
                    </p>
                </div>

                <div class="mp-pills">
                    <div class="mp-pill" data-aos="fade-up" data-aos-delay="0">
                        <b><span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2"
                                class="purecounter"></span></b>
                        <span>etapas do atendimento monitoradas</span>
                    </div>
                    <div class="mp-pill" data-aos="fade-up" data-aos-delay="100">
                        <b>24<span style="font-size:1.1rem;">h</span></b>
                        <span>agendamento online, todos os dias</span>
                    </div>
                    <div class="mp-pill" data-aos="fade-up" data-aos-delay="200">
                        <b><span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2.4"
                                class="purecounter"></span>%</b>
                        <span>do histórico de serviços registrado</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= COMO FUNCIONA ================= -->
        <section class="mp-how">
            <div class="mp-wrap">
                <div class="mp-narrow" style="margin-inline:0;" data-aos="fade-up">
                    <span class="mp-eyebrow"><span class="mp-idx">01</span> Como funciona</span>
                    <h2 class="mp-h2">Do agendamento à retirada em 4 passos.</h2>
                    <p class="mp-lead" style="margin-top:18px;">
                        Nenhum passo tem segredo. Você faz tudo pelo celular ou pelo computador.
                    </p>
                </div>

                <div class="mp-flow">
                    <div class="mp-node" data-aos="fade-up" data-aos-delay="0">
                        <div class="mp-nring">01</div>
                        <h3>Escolha o serviço</h3>
                        <p>Banho, tosa ou consulta, direto na tela inicial.</p>
                    </div>
                    <div class="mp-node" data-aos="fade-up" data-aos-delay="80">
                        <div class="mp-nring">02</div>
                        <h3>Agende online</h3>
                        <p>Selecione o dia e o horário que forem melhores para você.</p>
                    </div>
                    <div class="mp-node" data-aos="fade-up" data-aos-delay="160">
                        <div class="mp-nring">03</div>
                        <h3>Acompanhe em tempo real</h3>
                        <p>Veja cada etapa avançar e receba avisos automáticos.</p>
                    </div>
                    <div class="mp-node" data-aos="fade-up" data-aos-delay="240">
                        <div class="mp-nring">04</div>
                        <h3>Retire seu pet</h3>
                        <p>Você recebe o aviso de "pronto" e o histórico fica salvo.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= ACOMPANHAMENTO AO VIVO (demo) ================= -->
        <section class="mp-demo" id="mp-demo">
            <div class="mp-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="mp-eyebrow"><span class="mp-idx">02</span> Experimente agora</span>
                    <h2 class="mp-h2">É assim que você acompanha o atendimento.</h2>
                    <p class="mp-demo-lead">
                        Toque no botão e avance o atendimento etapa por etapa. É exatamente o
                        que o tutor vê no celular enquanto o petshop trabalha.
                    </p>
                    <span class="mp-demo-hint"><i class="bi bi-arrow-right"></i> Interaja com o painel</span>
                </div>

                <div class="mp-demo-grid">

                    <div data-aos="fade-right">
                        <p style="color:rgba(255,255,255,.7);">
                            Cada etapa concluída pelo petshop aparece na hora para o tutor, com
                            uma notificação. Nada de ligar para perguntar como está o pet &mdash;
                            a informação chega sozinha.
                        </p>
                    </div>

                    <div class="mp-panel" data-aos="fade-left" data-aos-delay="120">
                        <div class="mp-panel-head">
                            <span class="mp-pet"><i class="bi bi-heart-fill"></i></span>
                            <div>
                                <b>Rex &middot; Banho &amp; Tosa</b>
                                <span>Agendado para hoje, 09:00</span>
                            </div>
                            <span class="mp-badge-live"><span class="mp-dot"></span> AO VIVO</span>
                        </div>

                        <div class="mp-prog-head">
                            <span>Progresso do atendimento</span>
                            <span id="mpProgPct">0%</span>
                        </div>
                        <div class="mp-prog"><span id="mpProgBar"></span></div>

                        <ul class="mp-steps" id="mpDemoTl">
                            <li>Agendamento confirmado</li>
                            <li>Pet recebido no petshop</li>
                            <li>Banho iniciado</li>
                            <li>Tosa e finalização</li>
                            <li>Secagem e escovação</li>
                            <li>Pronto para retirada</li>
                        </ul>

                        <div class="mp-toast" id="mpToast" role="status" aria-live="polite">
                            <i class="bi bi-bell-fill"></i>
                            <span id="mpToastMsg">Toque em "Avançar etapa" para começar a simulação.</span>
                        </div>

                        <div class="mp-demo-controls">
                            <button type="button" class="mp-btn mp-btn--primary" id="mpNext">
                                Avançar etapa <i class="bi bi-arrow-right"></i>
                            </button>
                            <button type="button" class="mp-btn mp-btn--soft" id="mpReset" aria-label="Reiniciar simulação">
                                <i class="bi bi-arrow-counterclockwise"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= RECURSOS ================= -->
        <section class="mp-features">
            <div class="mp-wrap">
                <div class="mp-narrow" style="margin-inline:0;" data-aos="fade-up">
                    <span class="mp-eyebrow"><span class="mp-idx">03</span> Recursos</span>
                    <h2 class="mp-h2">Pensado para facilitar a sua vida.</h2>
                    <p class="mp-lead" style="margin-top:18px;">
                        Cada recurso existe para tirar uma dor do dia a dia &mdash; do tutor e do petshop.
                    </p>
                </div>

                <div class="mp-cards">
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="mp-cico"><i class="bi bi-broadcast"></i></div>
                        <h3>Acompanhamento ao vivo</h3>
                        <p>Você vê em que etapa o pet está sem precisar ligar nem sair de casa.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="80">
                        <div class="mp-cico"><i class="bi bi-bell-fill"></i></div>
                        <h3>Avisos automáticos</h3>
                        <p>Uma notificação a cada mudança de etapa e quando o pet está pronto.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="160">
                        <div class="mp-cico"><i class="bi bi-calendar-check-fill"></i></div>
                        <h3>Agendamento simples</h3>
                        <p>Poucos toques para marcar. Sem ligação, sem fila, sem confusão de horário.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="mp-cico"><i class="bi bi-clock-history"></i></div>
                        <h3>Histórico do pet</h3>
                        <p>Tudo o que já foi feito fica registrado para consultar quando quiser.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="80">
                        <div class="mp-cico"><i class="bi bi-clipboard2-data-fill"></i></div>
                        <h3>Painel para o petshop</h3>
                        <p>Clientes, pets e agenda organizados, com menos ligações no balcão.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="160">
                        <div class="mp-cico"><i class="bi bi-universal-access-circle"></i></div>
                        <h3>Acessível a todos</h3>
                        <p>Interface clara e tradução automática para Libras (VLibras) integrada.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= PARA QUEM É ================= -->
        <section class="mp-aud">
            <div class="mp-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="mp-eyebrow"><span class="mp-idx">04</span> Para quem é</span>
                    <h2 class="mp-h2">Os dois lados do balcão, no mesmo sistema.</h2>
                </div>

                <div class="mp-aud-grid">
                    <div class="mp-audcard" data-aos="fade-up">
                        <div class="mp-audcard-top">
                            <span class="mp-af"><i class="bi bi-heart"></i></span>
                            <h3>Para os tutores</h3>
                        </div>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Crie a conta grátis e cadastre seu pet em um minuto</li>
                            <li><i class="bi bi-check-circle-fill"></i> Agende banho, tosa ou consulta a qualquer hora</li>
                            <li><i class="bi bi-check-circle-fill"></i> Acompanhe cada etapa do atendimento em tempo real</li>
                            <li><i class="bi bi-check-circle-fill"></i> Receba avisos automáticos até o "pronto para retirada"</li>
                        </ul>
                        @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                            <a href="{{ route('agendamento') }}" class="mp-btn mp-btn--primary">
                                Fazer um agendamento <i class="bi bi-arrow-right"></i>
                            </a>
                        @else
                            <a href="{{ route('cadastro') }}" class="mp-btn mp-btn--primary">
                                Criar minha conta <i class="bi bi-arrow-right"></i>
                            </a>
                        @endif
                    </div>

                    <div class="mp-audcard mp-audcard--dark" data-aos="fade-up" data-aos-delay="120">
                        <div class="mp-audcard-top">
                            <span class="mp-af"><i class="bi bi-shop"></i></span>
                            <h3>Para o petshop</h3>
                        </div>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Acesse o painel com o login de funcionário</li>
                            <li><i class="bi bi-check-circle-fill"></i> Veja a agenda do dia, sem conflito de horário</li>
                            <li><i class="bi bi-check-circle-fill"></i> Clientes, pets e serviços em um lugar só</li>
                            <li><i class="bi bi-check-circle-fill"></i> Atualize o status e o tutor é avisado na hora</li>
                        </ul>
                        @if (session()->has('id') && (session('nivel_acesso') === 'FUNCIONARIO' || session('nivel_acesso') === 'ADMIN'))
                            <a href="{{ route('painel-controle') }}" class="mp-btn mp-btn--light">
                                Abrir o painel <i class="bi bi-arrow-right"></i>
                            </a>
                        @else
                            <a href="{{ route('login.funcionario') }}" class="mp-btn mp-btn--light">
                                Entrar como funcionário <i class="bi bi-arrow-right"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= CTA FINAL ================= -->
        <section class="mp-cta">
            <div class="mp-wrap">
                <div class="mp-cta-card" data-aos="zoom-in">
                    @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                        <h2>Tudo pronto. Que tal agendar o próximo banho?</h2>
                        <p>Escolha o serviço e o horário e acompanhe cada etapa pelo celular.</p>
                        <div class="mp-cta-actions">
                            <a href="{{ route('agendamento') }}" class="mp-btn mp-btn--light">
                                Agendar agora <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="{{ route('pets.create') }}" class="mp-btn mp-btn--ghost"
                                style="color:#fff;border-color:rgba(255,255,255,.4);">
                                <i class="bi bi-plus-circle"></i> Cadastrar outro pet
                            </a>
                        </div>
                    @elseif (session()->has('id') && (session('nivel_acesso') === 'FUNCIONARIO' || session('nivel_acesso') === 'ADMIN'))
                        <h2>Sua agenda do dia está esperando.</h2>
                        <p>Abra o painel para organizar os atendimentos e atualizar os status.</p>
                        <div class="mp-cta-actions">
                            <a href="{{ route('painel-controle') }}" class="mp-btn mp-btn--light">
                                Abrir o painel <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @else
                        <h2>Crie sua conta e acompanhe seu pet.</h2>
                        <p>É grátis, leva menos de um minuto e não precisa instalar nada.</p>
                        <div class="mp-cta-actions">
                            <a href="{{ route('cadastro') }}" class="mp-btn mp-btn--light">
                                Criar conta grátis <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="{{ route('login') }}" class="mp-btn mp-btn--ghost"
                                style="color:#fff;border-color:rgba(255,255,255,.4);">
                                <i class="bi bi-box-arrow-in-right"></i> Já tenho conta
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </section>

    </main>

    @include('partials.footer')

    <!-- Preloader -->
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
            var bar = document.getElementById('mpProgress');
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

    <!-- Demo interativa do acompanhamento -->
    <script>
        (function () {
            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            document.querySelectorAll('[data-mp-scroll]').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    var target = document.querySelector(this.getAttribute('href'));
                    if (!target) return;
                    e.preventDefault();
                    target.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
                });
            });

            var stages = [
                'Agendamento confirmado para hoje às 09:00.',
                'Rex deu entrada no petshop. 🐾',
                'Banho iniciado. Você será avisado na próxima etapa.',
                'Tosa e acabamento em andamento.',
                'Secagem e escovação em andamento.',
                'Rex está pronto para retirada! ✅'
            ];

            var tl = document.getElementById('mpDemoTl');
            var nextBtn = document.getElementById('mpNext');
            var resetBtn = document.getElementById('mpReset');
            var progBar = document.getElementById('mpProgBar');
            var progPct = document.getElementById('mpProgPct');
            var toast = document.getElementById('mpToast');
            var toastMsg = document.getElementById('mpToastMsg');
            if (!tl || !nextBtn) return;

            var items = Array.prototype.slice.call(tl.querySelectorAll('li'));
            var current = -1;
            var nudged = false;

            function render() {
                items.forEach(function (li, i) {
                    li.classList.toggle('is-done', i < current);
                    li.classList.toggle('is-now', i === current);
                });
                var pct = current < 0 ? 0 : Math.round(((current + 1) / stages.length) * 100);
                progBar.style.width = pct + '%';
                progPct.textContent = pct + '%';

                if (current >= 0) {
                    toastMsg.textContent = stages[current];
                    toast.classList.add('is-show');
                }

                if (current >= stages.length - 1) {
                    nextBtn.innerHTML = 'Ver primeiros passos <i class="bi bi-arrow-down"></i>';
                    nextBtn.dataset.done = '1';
                } else {
                    nextBtn.innerHTML = 'Avançar etapa <i class="bi bi-arrow-right"></i>';
                    delete nextBtn.dataset.done;
                }
            }

            nextBtn.addEventListener('click', function () {
                if (nextBtn.dataset.done === '1') {
                    var aud = document.querySelector('.mp-aud');
                    if (aud) aud.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
                    return;
                }
                if (current < stages.length - 1) {
                    current++;
                    render();
                }
            });

            resetBtn.addEventListener('click', function () {
                current = -1;
                toast.classList.remove('is-show');
                toastMsg.textContent = 'Toque em "Avançar etapa" para começar a simulação.';
                render();
            });

            render();

            if (!reduceMotion && 'IntersectionObserver' in window) {
                var io = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting && !nudged) {
                            nudged = true;
                            setTimeout(function () {
                                if (current === -1) { current = 0; render(); }
                            }, 900);
                            io.disconnect();
                        }
                    });
                }, { threshold: 0.4 });
                io.observe(document.getElementById('mp-demo'));
            }
        })();
    </script>

    @include('partials.logout-confirm')

</body>

</html>
