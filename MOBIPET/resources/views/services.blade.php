<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Serviços | Mobipet</title>
    <meta name="description"
        content="Banho, tosa, hidratação e mais — todos os serviços do petshop com agendamento digital e acompanhamento de cada etapa em tempo real pelo Mobipet.">
    <meta name="keywords" content="banho e tosa, serviços petshop, hidratação pet, agendamento pet, mobipet">

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
           PÁGINA SERVIÇOS — MOBIPET  ·  estilos isolados (prefixo sv-)
           =========================================================== */
        .sv-page {
            --sv-accent: #175cdd;
            --sv-accent-dark: #0f47b3;
            --sv-accent-soft: #eaf1fe;
            --sv-ink: #0f1b34;
            --sv-body: #4a5568;
            --sv-muted: #8794a7;
            --sv-amber: #f59e0b;
            --sv-green: #16a34a;
            --sv-line: #e6ecf5;
            --sv-bg: #f7f9ff;
            --sv-radius: 24px;
            --sv-radius-sm: 14px;
            --sv-shadow-sm: 0 10px 30px -14px rgba(15, 27, 52, .2);
            --sv-shadow: 0 40px 90px -40px rgba(23, 92, 221, .4);

            font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--sv-body);
            background: var(--sv-bg);
            overflow-x: clip;
        }

        .sv-page h1,
        .sv-page h2,
        .sv-page h3,
        .sv-page h4 {
            font-family: "Montserrat", sans-serif;
            color: var(--sv-ink);
            letter-spacing: -0.022em;
            line-height: 1.12;
        }

        .sv-page p {
            line-height: 1.78;
        }

        .sv-wrap {
            width: min(1140px, 90%);
            margin-inline: auto;
        }

        .sv-page section {
            padding: clamp(4rem, 9vw, 8rem) 0;
            position: relative;
        }

        /* Barra de progresso de rolagem */
        .sv-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, var(--sv-accent), #4ade80);
            z-index: 1100;
            transition: width .12s linear;
        }

        /* Rótulo de seção */
        .sv-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .78rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--sv-accent);
        }

        .sv-eyebrow::before {
            content: "";
            width: 30px;
            height: 2px;
            background: currentColor;
        }

        .sv-eyebrow .sv-idx {
            color: var(--sv-muted);
            font-variant-numeric: tabular-nums;
        }

        .sv-h2 {
            font-size: clamp(1.9rem, 4.2vw, 3rem);
            margin: 22px 0 0;
        }

        .sv-lead {
            font-size: clamp(1.05rem, 2vw, 1.2rem);
            color: var(--sv-body);
        }

        .sv-mark {
            color: var(--sv-ink);
            font-weight: 600;
            background: linear-gradient(transparent 62%, color-mix(in srgb, var(--sv-amber) 45%, transparent) 62%);
        }

        /* Botões */
        .sv-btn {
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

        .sv-btn--primary {
            background: var(--sv-accent);
            color: #fff;
            box-shadow: 0 18px 34px -16px rgba(23, 92, 221, .75);
        }

        .sv-btn--primary:hover {
            background: var(--sv-accent-dark);
            color: #fff;
            transform: translateY(-3px);
        }

        .sv-btn--ghost {
            background: transparent;
            color: var(--sv-ink);
            border-color: var(--sv-line);
        }

        .sv-btn--ghost:hover {
            border-color: var(--sv-accent);
            color: var(--sv-accent);
            transform: translateY(-3px);
        }

        .sv-btn--light {
            background: #fff;
            color: var(--sv-accent);
        }

        .sv-btn--light:hover {
            color: var(--sv-accent-dark);
            transform: translateY(-3px);
        }

        /* ===================== HERO ===================== */
        .sv-hero {
            padding-top: clamp(8rem, 16vw, 12rem) !important;
            padding-bottom: clamp(3rem, 8vw, 6rem) !important;
            background:
                radial-gradient(48% 40% at 84% 6%, var(--sv-accent-soft) 0%, transparent 62%),
                radial-gradient(40% 34% at 4% 94%, #e7f8ee 0%, transparent 60%),
                var(--sv-bg);
            overflow: hidden;
        }

        .sv-hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: clamp(2rem, 5vw, 4rem);
            align-items: center;
        }

        .sv-hero h1 {
            font-size: clamp(2.3rem, 5.6vw, 3.9rem);
            font-weight: 800;
            margin: 26px 0 20px;
        }

        .sv-hero h1 .sv-grad {
            background: linear-gradient(120deg, var(--sv-accent), #3b82f6 55%, #4ade80);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .sv-hero p {
            font-size: clamp(1.05rem, 2vw, 1.2rem);
            max-width: 500px;
            margin-bottom: 28px;
        }

        .sv-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .sv-hero-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 26px;
        }

        .sv-chip {
            font-size: .82rem;
            font-weight: 600;
            color: var(--sv-ink);
            background: #fff;
            border: 1px solid var(--sv-line);
            padding: 7px 14px;
            border-radius: 999px;
        }

        .sv-chip i {
            color: var(--sv-accent);
            margin-right: 6px;
        }

        /* Painel dashboard do hero */
        .sv-dash {
            position: relative;
            background: #fff;
            border: 1px solid var(--sv-line);
            border-radius: var(--sv-radius);
            box-shadow: var(--sv-shadow);
            padding: 26px;
        }

        .sv-dash::after {
            content: "";
            position: absolute;
            inset: -44px -44px auto auto;
            width: 170px;
            height: 170px;
            background: radial-gradient(circle, rgba(74, 222, 128, .32), transparent 70%);
            filter: blur(10px);
            z-index: -1;
            animation: sv-glow 6s ease-in-out infinite alternate;
        }

        @keyframes sv-glow {
            from { transform: translate(0, 0) scale(1); }
            to { transform: translate(-14px, 18px) scale(1.15); }
        }

        .sv-dash-top {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 22px;
        }

        .sv-dash-avatar {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: grid;
            place-items: center;
            font-size: 1.6rem;
            background: var(--sv-accent-soft);
            color: var(--sv-accent);
            flex: none;
        }

        .sv-dash-top b {
            display: block;
            font-family: "Montserrat", sans-serif;
            color: var(--sv-ink);
            font-size: 1.05rem;
        }

        .sv-dash-top span {
            font-size: .85rem;
            color: var(--sv-muted);
        }

        .sv-badge-live {
            margin-left: auto;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .06em;
            color: var(--sv-green);
            background: #e7f8ee;
            padding: 5px 11px;
            border-radius: 999px;
            flex: none;
        }

        .sv-badge-live .sv-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--sv-green);
            animation: sv-pulse 2s infinite;
        }

        @keyframes sv-pulse {
            0% { box-shadow: 0 0 0 0 rgba(22, 163, 74, .5); }
            70% { box-shadow: 0 0 0 10px rgba(22, 163, 74, 0); }
            100% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0); }
        }

        .sv-bar-head {
            display: flex;
            justify-content: space-between;
            font-size: .82rem;
            font-weight: 600;
            color: var(--sv-body);
            margin-bottom: 8px;
        }

        .sv-bar {
            height: 10px;
            border-radius: 999px;
            background: #eef1f6;
            overflow: hidden;
        }

        .sv-bar > span {
            display: block;
            height: 100%;
            width: 68%;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--sv-accent), #4f8cff);
            animation: sv-fill 2.6s ease-in-out infinite alternate;
        }

        @keyframes sv-fill {
            from { width: 62%; }
            to { width: 74%; }
        }

        .sv-mini-tl {
            list-style: none;
            margin: 22px 0 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .sv-mini-tl li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 14px;
            background: #f6f8fc;
            font-size: .9rem;
            color: var(--sv-muted);
            border: 1px solid transparent;
        }

        .sv-mini-tl li i {
            font-size: 1.05rem;
        }

        .sv-mini-tl li.done {
            color: var(--sv-body);
            background: #eafaf0;
        }

        .sv-mini-tl li.done i {
            color: var(--sv-green);
        }

        .sv-mini-tl li.now {
            color: var(--sv-accent);
            font-weight: 600;
            background: var(--sv-accent-soft);
            border-color: color-mix(in srgb, var(--sv-accent) 20%, transparent);
        }

        .sv-mini-tl li.now i {
            color: var(--sv-accent);
        }

        .sv-eta {
            margin-top: 18px;
            background: var(--sv-ink);
            border-radius: 18px;
            padding: 18px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #fff;
        }

        .sv-eta small {
            color: rgba(255, 255, 255, .6);
            display: block;
        }

        .sv-eta b {
            font-family: "Montserrat", sans-serif;
            font-size: 1.5rem;
        }

        /* ===================== GRID DE SERVIÇOS ===================== */
        .sv-catalog {
            background: #fff;
            border-top: 1px solid var(--sv-line);
        }

        .sv-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin-top: 54px;
        }

        .sv-card {
            position: relative;
            background: var(--sv-bg);
            border: 1px solid var(--sv-line);
            border-radius: var(--sv-radius);
            padding: 32px;
            overflow: hidden;
            transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
        }

        .sv-card::before {
            content: "";
            position: absolute;
            inset: auto auto -40px -40px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--sv-accent-soft);
            opacity: 0;
            transition: opacity .3s ease;
        }

        .sv-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--sv-shadow);
            border-color: transparent;
        }

        .sv-card:hover::before {
            opacity: 1;
        }

        .sv-card .sv-ico {
            position: relative;
            width: 56px;
            height: 56px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            font-size: 1.6rem;
            background: #fff;
            border: 1px solid var(--sv-line);
            color: var(--sv-accent);
            margin-bottom: 20px;
            transition: transform .28s ease;
        }

        .sv-card:hover .sv-ico {
            transform: translateY(-4px) rotate(-6deg);
        }

        .sv-card h3 {
            position: relative;
            font-size: 1.18rem;
            margin-bottom: 8px;
        }

        .sv-card p {
            position: relative;
            margin: 0;
            font-size: .95rem;
            color: var(--sv-body);
        }

        .sv-card .sv-more {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-top: 16px;
            font-size: .85rem;
            font-weight: 600;
            color: var(--sv-accent);
            opacity: 0;
            transform: translateX(-6px);
            transition: opacity .28s ease, transform .28s ease;
        }

        .sv-card:hover .sv-more {
            opacity: 1;
            transform: translateX(0);
        }

        /* ===================== ACOMPANHAMENTO (split) ===================== */
        .sv-track {
            background: var(--sv-bg);
        }

        .sv-track-grid {
            display: grid;
            grid-template-columns: .92fr 1.08fr;
            gap: clamp(2rem, 6vw, 4.5rem);
            align-items: center;
        }

        .sv-track-figure {
            position: relative;
            border-radius: var(--sv-radius);
            overflow: hidden;
            border: 6px solid #fff;
            box-shadow: var(--sv-shadow);
            aspect-ratio: 5 / 4;
        }

        .sv-track-figure img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .sv-track-figure .sv-tag {
            position: absolute;
            left: 16px;
            bottom: 16px;
            background: rgba(255, 255, 255, .95);
            border-radius: 12px;
            padding: 10px 14px;
            font-size: .82rem;
            font-weight: 600;
            color: var(--sv-ink);
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: var(--sv-shadow-sm);
        }

        .sv-track-figure .sv-tag i {
            color: var(--sv-accent);
        }

        .sv-stage-list {
            list-style: none;
            margin: 34px 0 0;
            padding: 0;
            position: relative;
        }

        .sv-stage-list li {
            position: relative;
            padding: 0 0 22px 34px;
            font-size: 1rem;
            color: var(--sv-body);
        }

        .sv-stage-list li:last-child {
            padding-bottom: 0;
        }

        .sv-stage-list li::before {
            content: "";
            position: absolute;
            left: 9px;
            top: 20px;
            bottom: -4px;
            width: 2px;
            background: var(--sv-line);
        }

        .sv-stage-list li:last-child::before {
            display: none;
        }

        .sv-stage-list li::after {
            content: "";
            position: absolute;
            left: 3px;
            top: 3px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--sv-accent);
        }

        .sv-stage-list li b {
            color: var(--sv-ink);
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
        }

        .sv-stage-list li span {
            display: block;
            font-size: .88rem;
            color: var(--sv-muted);
        }

        /* ===================== NOTIFICAÇÕES (dark) ===================== */
        .sv-notif {
            background-color: #0f1b34;
            background-image: radial-gradient(60% 50% at 100% 0%, rgba(23, 92, 221, .28), transparent 60%);
            color: rgba(255, 255, 255, .74);
        }

        .sv-notif h2,
        .sv-notif .sv-lead {
            color: #fff;
        }

        .sv-notif .sv-eyebrow {
            color: #7db0ff;
        }

        .sv-notif .sv-eyebrow .sv-idx {
            color: rgba(255, 255, 255, .4);
        }

        .sv-notif-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(2rem, 6vw, 4.5rem);
            align-items: center;
            margin-top: 20px;
        }

        .sv-notif p.sv-lead {
            max-width: 460px;
        }

        .sv-phone {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 26px;
            padding: 26px;
            backdrop-filter: blur(4px);
        }

        .sv-phone .sv-ph-head {
            display: flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 16px;
            margin-bottom: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
            color: #fff;
            font-weight: 600;
            font-size: .92rem;
        }

        .sv-phone .sv-ph-head .sv-wpp {
            width: 30px;
            height: 30px;
            border-radius: 9px;
            display: grid;
            place-items: center;
            background: #25d366;
            color: #05231a;
        }

        .sv-bubble {
            background: #fff;
            color: var(--sv-ink);
            border-radius: 4px 16px 16px 16px;
            padding: 12px 15px;
            font-size: .9rem;
            margin-bottom: 12px;
            max-width: 90%;
            box-shadow: 0 10px 24px -14px rgba(0, 0, 0, .5);
        }

        .sv-bubble:last-child {
            margin-bottom: 0;
        }

        .sv-bubble time {
            display: block;
            font-size: .72rem;
            color: var(--sv-muted);
            margin-top: 4px;
        }

        .sv-bubble b {
            font-family: "Montserrat", sans-serif;
        }

        /* ===================== PASSO A PASSO ===================== */
        .sv-how {
            background: #fff;
        }

        .sv-flow {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            margin-top: 58px;
            position: relative;
        }

        .sv-flow::before {
            content: "";
            position: absolute;
            top: 27px;
            left: 11%;
            right: 11%;
            height: 2px;
            background: repeating-linear-gradient(90deg, var(--sv-line) 0 8px, transparent 8px 16px);
        }

        .sv-node {
            position: relative;
            text-align: center;
        }

        .sv-node .sv-nring {
            width: 56px;
            height: 56px;
            margin: 0 auto 20px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--sv-line);
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            color: var(--sv-accent);
            transition: .25s ease;
        }

        .sv-node:hover .sv-nring {
            background: var(--sv-accent);
            border-color: var(--sv-accent);
            color: #fff;
            transform: translateY(-5px);
        }

        .sv-node h3 {
            font-size: 1.05rem;
            margin-bottom: 6px;
        }

        .sv-node p {
            font-size: .92rem;
            margin: 0;
        }

        /* ===================== DIFERENCIAIS ===================== */
        .sv-diff {
            background: var(--sv-bg);
        }

        .sv-diff-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 52px;
        }

        .sv-diff-item {
            background: #fff;
            border: 1px solid var(--sv-line);
            border-radius: var(--sv-radius-sm);
            padding: 26px;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .sv-diff-item:hover {
            transform: translateY(-6px);
            box-shadow: var(--sv-shadow-sm);
        }

        .sv-diff-item i {
            font-size: 1.5rem;
            color: var(--sv-accent);
        }

        .sv-diff-item h3 {
            font-size: 1.02rem;
            margin: 14px 0 6px;
        }

        .sv-diff-item p {
            font-size: .9rem;
            margin: 0;
            color: var(--sv-body);
        }

        /* ===================== FAQ ===================== */
        .sv-faq {
            background: #fff;
        }

        .sv-faq-list {
            margin-top: 48px;
            max-width: 780px;
        }

        .sv-faq-list details {
            border-bottom: 1px solid var(--sv-line);
            padding: 22px 0;
        }

        .sv-faq-list summary {
            list-style: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: 1.05rem;
            color: var(--sv-ink);
        }

        .sv-faq-list summary::-webkit-details-marker {
            display: none;
        }

        .sv-faq-list summary i {
            flex: none;
            color: var(--sv-accent);
            transition: transform .3s ease;
        }

        .sv-faq-list details[open] summary i {
            transform: rotate(45deg);
        }

        .sv-faq-list details p {
            margin: 14px 0 0;
            color: var(--sv-body);
            max-width: 680px;
        }

        /* ===================== CTA ===================== */
        .sv-cta {
            background: var(--sv-bg);
        }

        .sv-cta-card {
            border-radius: clamp(24px, 4vw, 42px);
            padding: clamp(3rem, 8vw, 5.5rem) clamp(1.5rem, 5vw, 4rem);
            text-align: center;
            color: #fff;
            background:
                radial-gradient(46% 130% at 100% 0%, rgba(255, 255, 255, .16), transparent 60%),
                linear-gradient(135deg, var(--sv-accent), var(--sv-accent-dark));
        }

        .sv-cta-card h2 {
            color: #fff;
            font-size: clamp(1.8rem, 4.4vw, 2.8rem);
            margin-bottom: 14px;
        }

        .sv-cta-card p {
            color: rgba(255, 255, 255, .85);
            font-size: 1.1rem;
            max-width: 540px;
            margin: 0 auto 32px;
        }

        .sv-cta-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            justify-content: center;
        }

        /* ===================== RESPONSIVO ===================== */
        @media (max-width: 991px) {

            .sv-hero-grid,
            .sv-track-grid,
            .sv-notif-grid {
                grid-template-columns: 1fr;
            }

            .sv-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .sv-diff-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .sv-flow {
                grid-template-columns: repeat(2, 1fr);
            }

            .sv-flow::before {
                display: none;
            }
        }

        @media (max-width: 575px) {

            .sv-grid,
            .sv-diff-grid,
            .sv-flow {
                grid-template-columns: 1fr;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .sv-page *,
            .sv-page *::before,
            .sv-page *::after {
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

<body class="index-page">

    @include('partials.preloader')


    <div class="sv-progress" id="svProgress"></div>

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

    <main class="main sv-page">

        <!-- ================= HERO ================= -->
        <section class="sv-hero">
            <div class="sv-wrap">
                <div class="sv-hero-grid">

                    <div data-aos="fade-right">
                        <span class="sv-eyebrow">Serviços Mobipet</span>
                        <h1>
                            Todo cuidado do petshop, <span class="sv-grad">acompanhado etapa por etapa.</span>
                        </h1>
                        <p>
                            Banho, tosa, hidratação e mais &mdash; agendados em segundos e
                            acompanhados em tempo real, do check-in ao "pode buscar".
                        </p>

                        <div class="sv-hero-actions">
                            <a href="{{ route('agendamento') }}" class="sv-btn sv-btn--primary">
                                Agendar um serviço <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="#sv-catalogo" class="sv-btn sv-btn--ghost">
                                <i class="bi bi-grid"></i> Ver o catálogo
                            </a>
                        </div>

                        <div class="sv-hero-chips">
                            <span class="sv-chip"><i class="bi bi-broadcast"></i> Acompanhamento ao vivo</span>
                            <span class="sv-chip"><i class="bi bi-bell"></i> Aviso a cada etapa</span>
                            <span class="sv-chip"><i class="bi bi-clock-history"></i> Histórico salvo</span>
                        </div>
                    </div>

                    <div class="sv-dash" data-aos="fade-left" data-aos-delay="150">
                        <div class="sv-dash-top">
                            <span class="sv-dash-avatar"><i class="bi bi-heart-fill"></i></span>
                            <div>
                                <b>Rex &middot; Banho &amp; Tosa</b>
                                <span>Hoje, 09:00</span>
                            </div>
                            <span class="sv-badge-live"><span class="sv-dot"></span> EM ATENDIMENTO</span>
                        </div>

                        <div class="sv-bar-head">
                            <span>Progresso do atendimento</span>
                            <span>68%</span>
                        </div>
                        <div class="sv-bar"><span></span></div>

                        <ul class="sv-mini-tl">
                            <li class="done"><i class="bi bi-check-circle-fill"></i> Recepção concluída</li>
                            <li class="done"><i class="bi bi-check-circle-fill"></i> Banho finalizado</li>
                            <li class="now"><i class="bi bi-arrow-repeat"></i> Secagem em andamento</li>
                            <li><i class="bi bi-clock"></i> Tosa aguardando</li>
                        </ul>

                        <div class="sv-eta">
                            <div>
                                <small>Tempo estimado restante</small>
                                <span>Atualização automática</span>
                            </div>
                            <b>15 min</b>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= CATÁLOGO ================= -->
        <section class="sv-catalog" id="sv-catalogo">
            <div class="sv-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="sv-eyebrow"><span class="sv-idx">01</span> O que oferecemos</span>
                    <h2 class="sv-h2">Um catálogo completo de banho e tosa</h2>
                    <p class="sv-lead" style="margin-top:18px;">
                        Cada serviço abaixo entra no mesmo fluxo monitorado: você agenda,
                        acompanha e recebe o aviso quando termina.
                    </p>
                </div>

                <div class="sv-grid">
                    <article class="sv-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="sv-ico"><i class="bi bi-droplet-half"></i></div>
                        <h3>Banho</h3>
                        <p>Higienização completa com produtos adequados ao pelo e à pele do pet.</p>
                        <span class="sv-more">Incluído no monitoramento <i class="bi bi-arrow-right"></i></span>
                    </article>

                    <article class="sv-card" data-aos="fade-up" data-aos-delay="80">
                        <div class="sv-ico"><i class="bi bi-scissors"></i></div>
                        <h3>Tosa</h3>
                        <p>Tosa higiênica ou completa, no padrão da raça ou do jeito que você prefere.</p>
                        <span class="sv-more">Incluído no monitoramento <i class="bi bi-arrow-right"></i></span>
                    </article>

                    <article class="sv-card" data-aos="fade-up" data-aos-delay="160">
                        <div class="sv-ico"><i class="bi bi-stars"></i></div>
                        <h3>Hidratação</h3>
                        <p>Tratamento que devolve maciez e brilho ao pelo depois do banho.</p>
                        <span class="sv-more">Incluído no monitoramento <i class="bi bi-arrow-right"></i></span>
                    </article>

                    <article class="sv-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="sv-ico"><i class="bi bi-wind"></i></div>
                        <h3>Escovação e secagem</h3>
                        <p>Desembolo e secagem cuidadosa para o pelo ficar soltinho e sem nós.</p>
                        <span class="sv-more">Incluído no monitoramento <i class="bi bi-arrow-right"></i></span>
                    </article>

                    <article class="sv-card" data-aos="fade-up" data-aos-delay="80">
                        <div class="sv-ico"><i class="bi bi-flower1"></i></div>
                        <h3>Corte de unhas</h3>
                        <p>Corte seguro no comprimento certo, evitando desconforto ao caminhar.</p>
                        <span class="sv-more">Incluído no monitoramento <i class="bi bi-arrow-right"></i></span>
                    </article>

                    <article class="sv-card" data-aos="fade-up" data-aos-delay="160">
                        <div class="sv-ico"><i class="bi bi-ear"></i></div>
                        <h3>Limpeza de ouvidos</h3>
                        <p>Limpeza delicada da região auricular, parte da rotina de higiene do pet.</p>
                        <span class="sv-more">Incluído no monitoramento <i class="bi bi-arrow-right"></i></span>
                    </article>
                </div>
            </div>
        </section>

       
        <!-- ================= NOTIFICAÇÕES ================= -->
        <section class="sv-notif">
            <div class="sv-wrap">
                <div class="sv-notif-grid">

                    <div data-aos="fade-right">
                        <span class="sv-eyebrow"><span class="sv-idx">03</span> Você fica sabendo</span>
                        <h2 class="sv-h2">Um aviso automático a cada mudança de etapa</h2>
                        <p class="sv-lead" style="margin-top:16px;">
                            Nada de ficar atualizando a tela. Quando o serviço avança, a
                            notificação chega até você &mdash; inclusive quando o pet está
                            pronto para buscar.
                        </p>
                    </div>

                    <div class="sv-phone" data-aos="fade-left" data-aos-delay="120">
                        <div class="sv-ph-head">
                            <span class="sv-wpp"><i class="bi bi-whatsapp"></i></span>
                            Mobipet &middot; Atendimento do Rex
                        </div>
                        <div class="sv-bubble" data-aos="fade-up" data-aos-delay="150">
                            <b>Rex</b> deu entrada no petshop 🐾
                            <time>09:42</time>
                        </div>
                        <div class="sv-bubble" data-aos="fade-up" data-aos-delay="250">
                            Banho iniciado 🛁
                            <time>10:05</time>
                        </div>
                        <div class="sv-bubble" data-aos="fade-up" data-aos-delay="350">
                            Secagem em andamento — tempo estimado 15 min
                            <time>10:38</time>
                        </div>
                        <div class="sv-bubble" data-aos="fade-up" data-aos-delay="450">
                            ✅ <b>Rex está pronto para retirada!</b>
                            <time>10:59</time>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= PASSO A PASSO ================= -->
        <section class="sv-how">
            <div class="sv-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="sv-eyebrow"><span class="sv-idx">04</span> Como agendar</span>
                    <h2 class="sv-h2">Do agendamento à retirada em quatro passos</h2>
                </div>

                <div class="sv-flow">
                    <div class="sv-node" data-aos="fade-up" data-aos-delay="0">
                        <div class="sv-nring">01</div>
                        <h3>Escolha o serviço</h3>
                        <p>Banho, tosa, hidratação ou um combo.</p>
                    </div>
                    <div class="sv-node" data-aos="fade-up" data-aos-delay="90">
                        <div class="sv-nring">02</div>
                        <h3>Agende online</h3>
                        <p>Selecione o melhor dia e horário para você.</p>
                    </div>
                    <div class="sv-node" data-aos="fade-up" data-aos-delay="180">
                        <div class="sv-nring">03</div>
                        <h3>Acompanhe</h3>
                        <p>Veja cada etapa e receba as notificações.</p>
                    </div>
                    <div class="sv-node" data-aos="fade-up" data-aos-delay="270">
                        <div class="sv-nring">04</div>
                        <h3>Retire seu pet</h3>
                        <p>Com aviso de "pronto" e histórico registrado.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= DIFERENCIAIS ================= -->
        <section class="sv-diff">
            <div class="sv-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="sv-eyebrow"><span class="sv-idx">05</span> Por que pelo Mobipet</span>
                    <h2 class="sv-h2">O serviço é o mesmo. <br>A experiência, não.</h2>
                </div>

                <div class="sv-diff-grid">
                    <div class="sv-diff-item" data-aos="fade-up" data-aos-delay="0">
                        <i class="bi bi-eye"></i>
                        <h3>Transparência</h3>
                        <p>Você enxerga o mesmo status que o petshop, em tempo real.</p>
                    </div>
                    <div class="sv-diff-item" data-aos="fade-up" data-aos-delay="80">
                        <i class="bi bi-telephone-x"></i>
                        <h3>Sem ligações</h3>
                        <p>As atualizações chegam sozinhas; não precisa cobrar notícias.</p>
                    </div>
                    <div class="sv-diff-item" data-aos="fade-up" data-aos-delay="160">
                        <i class="bi bi-calendar2-week"></i>
                        <h3>Agenda organizada</h3>
                        <p>Horários sem conflito e lembrete do compromisso.</p>
                    </div>
                    <div class="sv-diff-item" data-aos="fade-up" data-aos-delay="240">
                        <i class="bi bi-clock-history"></i>
                        <h3>Histórico completo</h3>
                        <p>Tudo o que foi feito fica registrado para consultar depois.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= FAQ ================= -->
        <section class="sv-faq">
            <div class="sv-wrap">
                <div data-aos="fade-up" style="max-width:640px;">
                    <span class="sv-eyebrow"><span class="sv-idx">06</span> Dúvidas frequentes</span>
                    <h2 class="sv-h2">Perguntas rápidas sobre os serviços</h2>
                </div>

                <div class="sv-faq-list" data-aos="fade-up">
                    <details open>
                        <summary>Como funciona o acompanhamento em tempo real? <i class="bi bi-plus-lg"></i></summary>
                        <p>A cada etapa concluída, a equipe do petshop atualiza o atendimento no
                            sistema. Essa mudança aparece na hora para você, junto com uma
                            notificação automática.</p>
                    </details>
                    <details>
                        <summary>Preciso ter conta para agendar? <i class="bi bi-plus-lg"></i></summary>
                        <p>Sim. Com a conta, o Mobipet vincula o agendamento ao seu pet, guarda o
                            histórico dos serviços e envia as notificações para você.</p>
                    </details>
                    <details>
                        <summary>Posso agendar mais de um serviço de uma vez? <i class="bi bi-plus-lg"></i></summary>
                        <p>Pode. Banho, tosa, hidratação e os demais serviços podem ser combinados
                            no mesmo agendamento e aparecem juntos na linha do tempo.</p>
                    </details>
                    <details>
                        <summary>E se eu precisar remarcar? <i class="bi bi-plus-lg"></i></summary>
                        <p>É só acessar a área de agendamento pela sua conta e escolher um novo
                            horário disponível.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- ================= CTA ================= -->
        <section class="sv-cta">
            <div class="sv-wrap">
                <div class="sv-cta-card" data-aos="zoom-in">
                    <h2>Escolha um serviço e acompanhe do início ao fim</h2>
                    <p>Agende em segundos e receba o aviso quando o seu pet estiver pronto.</p>
                    <div class="sv-cta-actions">
                        <a href="{{ route('agendamento') }}" class="sv-btn sv-btn--light">
                            Agendar agora <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/5519989432384" class="sv-btn sv-btn--ghost"
                            style="color:#fff;border-color:rgba(255,255,255,.4);" target="_blank" rel="noopener">
                            <i class="bi bi-whatsapp"></i> Falar no WhatsApp
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
            var bar = document.getElementById('svProgress');
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
