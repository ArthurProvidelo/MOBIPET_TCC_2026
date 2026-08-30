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
           LANDING PAGE MOBIPET — estilos isolados (prefixo mp-)
           Foco: UI/UX de onboarding, interatividade a cada scroll
           =========================================================== */
        .mp-landing {
            --mp-accent: #175cdd;
            --mp-accent-dark: #0f47b3;
            --mp-accent-soft: #eaf1fe;
            --mp-ink: #0f1b34;
            --mp-body: #4a5568;
            --mp-muted: #7b899c;
            --mp-amber: #f59e0b;
            --mp-green: #16a34a;
            --mp-green-soft: #e7f8ee;
            --mp-surface: #ffffff;
            --mp-bg: #f6f9ff;
            --mp-border: #e7ecf5;
            --mp-radius: 22px;
            --mp-radius-sm: 14px;
            --mp-shadow-sm: 0 6px 20px -8px rgba(15, 27, 52, .18);
            --mp-shadow: 0 24px 60px -24px rgba(23, 92, 221, .32);

            font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--mp-body);
            background: var(--mp-bg);
            overflow-x: clip;
        }

        .mp-landing h1,
        .mp-landing h2,
        .mp-landing h3,
        .mp-landing h4 {
            font-family: "Montserrat", sans-serif;
            color: var(--mp-ink);
            letter-spacing: -0.02em;
            line-height: 1.15;
        }

        .mp-landing p {
            line-height: 1.7;
        }

        .mp-landing section {
            padding: clamp(3.5rem, 8vw, 6.5rem) 0;
        }

        .mp-container {
            width: min(1160px, 92%);
            margin-inline: auto;
        }

        /* Acessibilidade: foco visível em todos os interativos */
        .mp-landing a:focus-visible,
        .mp-landing button:focus-visible,
        .mp-landing summary:focus-visible {
            outline: 3px solid color-mix(in srgb, var(--mp-accent) 55%, transparent);
            outline-offset: 3px;
            border-radius: 6px;
        }

        /* Barra de progresso de leitura */
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

        .mp-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: .82rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--mp-accent);
            background: var(--mp-accent-soft);
            border: 1px solid color-mix(in srgb, var(--mp-accent) 18%, transparent);
            padding: 7px 14px;
            border-radius: 999px;
        }

        .mp-section-head {
            max-width: 640px;
        }

        .mp-section-head.mp-center {
            margin-inline: auto;
            text-align: center;
        }

        .mp-section-head h2 {
            font-size: clamp(1.7rem, 3.6vw, 2.5rem);
            margin: 18px 0 12px;
        }

        .mp-section-head p {
            font-size: 1.06rem;
            color: var(--mp-body);
            margin: 0;
        }

        /* ---------- Botões ---------- */
        .mp-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: .98rem;
            padding: 14px 26px;
            border-radius: 999px;
            border: 1.5px solid transparent;
            cursor: pointer;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease, border-color .2s ease;
            text-decoration: none;
        }

        .mp-btn i {
            font-size: 1.05em;
        }

        .mp-btn--primary {
            background: var(--mp-accent);
            color: #fff;
            box-shadow: 0 16px 30px -14px rgba(23, 92, 221, .7);
        }

        .mp-btn--primary:hover {
            background: var(--mp-accent-dark);
            color: #fff;
            transform: translateY(-3px);
        }

        .mp-btn--ghost {
            background: #fff;
            color: var(--mp-ink);
            border-color: var(--mp-border);
        }

        .mp-btn--ghost:hover {
            border-color: var(--mp-accent);
            color: var(--mp-accent);
            transform: translateY(-3px);
        }

        .mp-btn--wpp {
            background: #25d366;
            color: #05231a;
        }

        .mp-btn--wpp:hover {
            background: #1fbe5b;
            color: #05231a;
            transform: translateY(-3px);
        }

        .mp-btn--light {
            background: #fff;
            color: var(--mp-accent);
        }

        .mp-btn--light:hover {
            background: #fff;
            color: var(--mp-accent-dark);
            transform: translateY(-3px);
        }

        .mp-btn--block {
            width: 100%;
        }

        /* ---------- HERO ---------- */
        .mp-hero {
            position: relative;
            background:
                radial-gradient(60% 55% at 88% -5%, var(--mp-accent-soft) 0%, transparent 60%),
                radial-gradient(50% 45% at -5% 105%, var(--mp-green-soft) 0%, transparent 55%),
                var(--mp-bg);
            padding-top: clamp(6.5rem, 13vw, 9rem) !important;
        }

        .mp-hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: clamp(2rem, 5vw, 4.5rem);
            align-items: center;
        }

        .mp-hero h1 {
            font-size: clamp(2.2rem, 5vw, 3.5rem);
            margin: 22px 0 18px;
        }

        .mp-hero h1 .mp-hl {
            position: relative;
            color: var(--mp-accent);
            white-space: nowrap;
        }

        .mp-hero h1 .mp-hl::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 4px;
            height: 10px;
            background: color-mix(in srgb, var(--mp-amber) 40%, transparent);
            border-radius: 4px;
            z-index: -1;
        }

        .mp-hero-lead {
            font-size: 1.15rem;
            max-width: 520px;
            margin-bottom: 26px;
        }

        .mp-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .mp-trust {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            margin-top: 22px;
        }

        .mp-trust span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .9rem;
            color: var(--mp-body);
        }

        .mp-trust i {
            color: var(--mp-green);
            font-size: 1.05rem;
        }

        .mp-stats {
            display: flex;
            flex-wrap: wrap;
            gap: clamp(1.5rem, 5vw, 3rem);
            margin-top: 34px;
            padding-top: 26px;
            border-top: 1px solid var(--mp-border);
        }

        .mp-stat b {
            display: block;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.6rem, 4vw, 2.1rem);
            color: var(--mp-ink);
            line-height: 1;
        }

        .mp-stat span {
            font-size: .9rem;
            color: var(--mp-muted);
        }

        /* Visual do hero */
        .mp-hero-visual {
            position: relative;
        }

        .mp-hero-visual .mp-frame {
            border-radius: var(--mp-radius);
            overflow: hidden;
            box-shadow: var(--mp-shadow);
            border: 6px solid #fff;
            aspect-ratio: 4 / 4.3;
        }

        .mp-hero-visual .mp-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .mp-float {
            position: absolute;
            background: #fff;
            border-radius: var(--mp-radius-sm);
            box-shadow: var(--mp-shadow-sm);
            border: 1px solid var(--mp-border);
            padding: 14px 16px;
        }

        .mp-float--status {
            left: -28px;
            bottom: 44px;
            width: 232px;
        }

        .mp-float--status .mp-fs-title {
            font-size: .72rem;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--mp-muted);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .mp-fs-row {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: .85rem;
            color: var(--mp-body);
            padding: 4px 0;
        }

        .mp-fs-row i {
            font-size: 1rem;
        }

        .mp-fs-row.done i {
            color: var(--mp-green);
        }

        .mp-fs-row.active {
            color: var(--mp-accent);
            font-weight: 600;
        }

        .mp-fs-row.active i {
            color: var(--mp-accent);
        }

        .mp-fs-row.wait i {
            color: #cbd5e1;
        }

        .mp-float--notif {
            top: 26px;
            right: -22px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: .86rem;
            font-weight: 600;
            color: var(--mp-ink);
        }

        .mp-float--notif .mp-bell {
            width: 34px;
            height: 34px;
            flex: none;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--mp-accent-soft);
            color: var(--mp-accent);
        }

        /* ---------- COMO FUNCIONA (4 passos) ---------- */
        .mp-how {
            background: #fff;
        }

        .mp-steps-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-top: 52px;
            position: relative;
        }

        .mp-steps-grid::before {
            content: "";
            position: absolute;
            top: 26px;
            left: 12%;
            right: 12%;
            height: 2px;
            background: repeating-linear-gradient(90deg, var(--mp-border) 0 10px, transparent 10px 20px);
            z-index: 0;
        }

        .mp-step {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .mp-step .mp-num {
            width: 54px;
            height: 54px;
            margin: 0 auto 18px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--mp-border);
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            color: var(--mp-accent);
            transition: .25s ease;
        }

        .mp-step:hover .mp-num {
            background: var(--mp-accent);
            border-color: var(--mp-accent);
            color: #fff;
            transform: translateY(-4px);
        }

        .mp-step h3 {
            font-size: 1.05rem;
            margin-bottom: 6px;
        }

        .mp-step p {
            font-size: .92rem;
            margin: 0;
            color: var(--mp-body);
        }

        /* ---------- DEMO INTERATIVA ---------- */
        .mp-demo {
            background: linear-gradient(160deg, #0f1b34 0%, #16264a 100%);
        }

        .mp-demo .mp-container {
            display: grid;
            grid-template-columns: 1fr 1.05fr;
            gap: clamp(2rem, 6vw, 4.5rem);
            align-items: center;
        }

        .mp-demo h2,
        .mp-demo .mp-eyebrow {
            color: #fff;
        }

        .mp-demo .mp-eyebrow {
            background: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .2);
        }

        .mp-demo h2 {
            font-size: clamp(1.7rem, 3.6vw, 2.5rem);
            margin: 18px 0 14px;
        }

        .mp-demo > .mp-container > div:first-child p {
            color: rgba(255, 255, 255, .74);
            font-size: 1.05rem;
        }

        .mp-demo-hint {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 18px;
            font-size: .9rem;
            color: #93c5fd;
            font-weight: 600;
        }

        .mp-demo-hint i {
            animation: mp-tap 1.6s ease-in-out infinite;
        }

        @keyframes mp-tap {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-4px); }
        }

        .mp-panel {
            background: #fff;
            border-radius: var(--mp-radius);
            padding: 28px;
            box-shadow: var(--mp-shadow);
        }

        .mp-panel-head {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--mp-border);
        }

        .mp-panel-head .mp-pet {
            width: 46px;
            height: 46px;
            border-radius: 13px;
            display: grid;
            place-items: center;
            background: var(--mp-accent-soft);
            color: var(--mp-accent);
            font-size: 1.35rem;
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

        .mp-panel-head .mp-live {
            margin-left: auto;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: .72rem;
            font-weight: 700;
            color: var(--mp-green);
            background: var(--mp-green-soft);
            padding: 5px 11px;
            border-radius: 999px;
            flex: none;
        }

        .mp-panel-head .mp-live .mp-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--mp-green);
            animation: mp-pulse 2s infinite;
        }

        @keyframes mp-pulse {
            0% { box-shadow: 0 0 0 0 rgba(22, 163, 74, .5); }
            70% { box-shadow: 0 0 0 9px rgba(22, 163, 74, 0); }
            100% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0); }
        }

        .mp-prog-head {
            display: flex;
            justify-content: space-between;
            font-size: .82rem;
            font-weight: 600;
            color: var(--mp-body);
            margin: 20px 0 8px;
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

        .mp-demo-tl {
            list-style: none;
            margin: 20px 0 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .mp-demo-tl li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 12px;
            background: #f6f8fc;
            font-size: .92rem;
            color: var(--mp-muted);
            border: 1px solid transparent;
            transition: background .3s ease, color .3s ease, border-color .3s ease;
        }

        .mp-demo-tl li .mp-tl-ico {
            width: 24px;
            height: 24px;
            flex: none;
            display: grid;
            place-items: center;
            border-radius: 50%;
            border: 2px solid #d3dbe6;
            font-size: .7rem;
            color: transparent;
        }

        .mp-demo-tl li.done {
            color: var(--mp-body);
            background: var(--mp-green-soft);
        }

        .mp-demo-tl li.done .mp-tl-ico {
            background: var(--mp-green);
            border-color: var(--mp-green);
            color: #fff;
        }

        .mp-demo-tl li.now {
            color: var(--mp-accent);
            font-weight: 600;
            background: var(--mp-accent-soft);
            border-color: color-mix(in srgb, var(--mp-accent) 25%, transparent);
        }

        .mp-demo-tl li.now .mp-tl-ico {
            border-color: var(--mp-accent);
            color: var(--mp-accent);
            animation: mp-pulse 2s infinite;
        }

        .mp-toast {
            margin-top: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border-radius: 14px;
            background: var(--mp-ink);
            color: #fff;
            font-size: .9rem;
            opacity: 0;
            transform: translateY(8px);
            transition: opacity .3s ease, transform .3s ease;
        }

        .mp-toast.show {
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
        }

        .mp-btn--soft {
            background: #f1f4f9;
            color: var(--mp-ink);
            flex: 0 0 auto !important;
        }

        .mp-btn--soft:hover {
            background: #e5eaf2;
        }

        /* ---------- PRIMEIROS PASSOS (abas Tutor / Petshop) ---------- */
        .mp-start {
            background: var(--mp-bg);
        }

        .mp-tabs {
            display: inline-flex;
            gap: 6px;
            padding: 6px;
            background: #fff;
            border: 1px solid var(--mp-border);
            border-radius: 999px;
            margin: 26px auto 0;
        }

        .mp-tab {
            border: 0;
            background: transparent;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: .95rem;
            color: var(--mp-body);
            padding: 11px 24px;
            border-radius: 999px;
            cursor: pointer;
            transition: background .2s ease, color .2s ease;
        }

        .mp-tab[aria-selected="true"] {
            background: var(--mp-accent);
            color: #fff;
        }

        .mp-tabpanel {
            margin-top: 40px;
        }

        .mp-start-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .mp-start-card {
            background: #fff;
            border: 1px solid var(--mp-border);
            border-radius: var(--mp-radius);
            padding: 30px;
            position: relative;
        }

        .mp-start-card .mp-sc-num {
            position: absolute;
            top: 22px;
            right: 26px;
            font-family: "Montserrat", sans-serif;
            font-weight: 800;
            font-size: 2.4rem;
            color: var(--mp-accent-soft);
            line-height: 1;
        }

        .mp-start-card .mp-sc-ico {
            width: 50px;
            height: 50px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: var(--mp-accent-soft);
            color: var(--mp-accent);
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .mp-start-card h3 {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .mp-start-card p {
            margin: 0;
            font-size: .94rem;
            color: var(--mp-body);
        }

        .mp-start-cta {
            margin-top: 34px;
            display: flex;
            justify-content: center;
        }

        /* ---------- RECURSOS ---------- */
        .mp-features {
            background: #fff;
        }

        .mp-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin-top: 48px;
        }

        .mp-card {
            background: var(--mp-surface);
            border: 1px solid var(--mp-border);
            border-radius: var(--mp-radius);
            padding: 30px;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .mp-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--mp-shadow);
            border-color: transparent;
        }

        .mp-card .mp-ico {
            width: 54px;
            height: 54px;
            display: grid;
            place-items: center;
            border-radius: 15px;
            font-size: 1.5rem;
            background: var(--mp-accent-soft);
            color: var(--mp-accent);
            margin-bottom: 18px;
        }

        .mp-card:nth-child(2) .mp-ico {
            background: var(--mp-green-soft);
            color: var(--mp-green);
        }

        .mp-card:nth-child(3) .mp-ico {
            background: #fef3e2;
            color: var(--mp-amber);
        }

        .mp-card h3 {
            font-size: 1.16rem;
            margin-bottom: 8px;
        }

        .mp-card p {
            margin: 0;
            font-size: .96rem;
            color: var(--mp-body);
        }

        /* ---------- FAQ ---------- */
        .mp-faq {
            background: var(--mp-bg);
        }

        .mp-faq-list {
            max-width: 780px;
            margin: 44px auto 0;
        }

        .mp-faq-list details {
            background: #fff;
            border: 1px solid var(--mp-border);
            border-radius: var(--mp-radius-sm);
            padding: 20px 24px;
            margin-bottom: 14px;
        }

        .mp-faq-list summary {
            list-style: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: 1.02rem;
            color: var(--mp-ink);
        }

        .mp-faq-list summary::-webkit-details-marker {
            display: none;
        }

        .mp-faq-list summary i {
            flex: none;
            color: var(--mp-accent);
            transition: transform .3s ease;
        }

        .mp-faq-list details[open] summary i {
            transform: rotate(45deg);
        }

        .mp-faq-list details p {
            margin: 14px 0 0;
            color: var(--mp-body);
            font-size: .96rem;
        }

        /* ---------- CTA FINAL ---------- */
        .mp-cta {
            background: #fff;
        }

        .mp-cta-card {
            background:
                radial-gradient(40% 120% at 100% 0%, rgba(255, 255, 255, .14) 0%, transparent 60%),
                linear-gradient(135deg, var(--mp-accent) 0%, var(--mp-accent-dark) 100%);
            border-radius: clamp(24px, 4vw, 40px);
            padding: clamp(3rem, 7vw, 5rem) clamp(1.5rem, 5vw, 4rem);
            text-align: center;
            color: #fff;
        }

        .mp-cta-card h2 {
            color: #fff;
            font-size: clamp(1.7rem, 4vw, 2.6rem);
            margin-bottom: 14px;
        }

        .mp-cta-card p {
            color: rgba(255, 255, 255, .85);
            font-size: 1.1rem;
            max-width: 560px;
            margin: 0 auto 32px;
        }

        .mp-cta-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            justify-content: center;
        }

        /* ---------- RESPONSIVO ---------- */
        @media (max-width: 991px) {

            .mp-hero-grid,
            .mp-demo .mp-container {
                grid-template-columns: 1fr;
            }

            .mp-cards,
            .mp-start-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .mp-steps-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .mp-steps-grid::before {
                display: none;
            }

            .mp-hero-visual {
                max-width: 460px;
                margin-inline: auto;
            }

            .mp-float--status {
                left: -12px;
            }

            .mp-float--notif {
                right: -6px;
            }
        }

        @media (max-width: 575px) {

            .mp-cards,
            .mp-steps-grid,
            .mp-start-grid {
                grid-template-columns: 1fr;
            }

            .mp-float--status {
                position: static;
                width: auto;
                margin-top: 16px;
                box-shadow: var(--mp-shadow-sm);
            }

            .mp-float--notif {
                position: static;
                margin-bottom: 16px;
            }

            .mp-tabs {
                display: flex;
                width: 100%;
            }

            .mp-tab {
                flex: 1;
                padding: 11px 8px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .mp-landing *,
            .mp-landing *::before,
            .mp-landing *::after {
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
                        <li><a href="{{ route('index') }}" class="active">Início</a></li>
                        <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
                        <li><a href="{{ route('services') }}">Serviços</a></li>
                        <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

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

    <main class="main mp-landing">

        <!-- ============ HERO ============ -->
        <section class="mp-hero">
            <div class="mp-container">
                <div class="mp-hero-grid">

                    <div class="mp-hero-copy" data-aos="fade-right">
                        <span class="mp-eyebrow"><i class="bi bi-stars"></i> Petshop com tecnologia</span>

                        <h1>
                            Acompanhe o banho e a tosa do seu pet
                            <span class="mp-hl">em tempo real</span>
                        </h1>

                        <p class="mp-hero-lead">
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
                            @elseif (session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
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


                        <div class="mp-stats">
                            <div class="mp-stat">
                                <b><span data-purecounter-start="0" data-purecounter-end="100"
                                        data-purecounter-duration="2" class="purecounter"></span>+</b>
                                <span>Funcionalidades</span>
                            </div>
                            <div class="mp-stat">
                                <b><span data-purecounter-start="0" data-purecounter-end="6"
                                        data-purecounter-duration="2" class="purecounter"></span></b>
                                <span>Etapas monitoradas</span>
                            </div>
                            <div class="mp-stat">
                                <b>24h</b>
                                <span>Agendamento online</span>
                            </div>
                        </div>
                    </div>

                    <div class="mp-hero-visual" data-aos="fade-left" data-aos-delay="150">
                        <div class="mp-frame">
                            <img src="{{ asset('assets/img/pet_sendo_cuidado.png') }}"
                                alt="Pet recebendo cuidados de banho e tosa no petshop">
                        </div>

                        <div class="mp-float mp-float--notif">
                            <span class="mp-bell"><i class="bi bi-bell-fill"></i></span>
                            Seu pet está no banho 🛁
                        </div>

                        <div class="mp-float mp-float--status">
                            <div class="mp-fs-title">Status do atendimento</div>
                            <div class="mp-fs-row done"><i class="bi bi-check-circle-fill"></i> Pet recebido</div>
                            <div class="mp-fs-row active"><i class="bi bi-droplet-half"></i> Banho em andamento</div>
                            <div class="mp-fs-row wait"><i class="bi bi-circle"></i> Pronto para retirada</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============ COMO FUNCIONA ============ -->
        <section class="mp-how">
            <div class="mp-container">
                <div class="mp-section-head mp-center" data-aos="fade-up">
                    <span class="mp-eyebrow"><i class="bi bi-signpost-split"></i> Como funciona</span>
                    <h2>Do agendamento à retirada em 4 passos</h2>
                    <p>Nenhum passo tem segredo. Você faz tudo pelo celular ou pelo computador.</p>
                </div>

                <div class="mp-steps-grid">
                    <div class="mp-step" data-aos="fade-up" data-aos-delay="0">
                        <div class="mp-num">01</div>
                        <h3>Escolha o serviço</h3>
                        <p>Banho, tosa ou consulta, direto na tela inicial.</p>
                    </div>
                    <div class="mp-step" data-aos="fade-up" data-aos-delay="80">
                        <div class="mp-num">02</div>
                        <h3>Agende online</h3>
                        <p>Selecione o dia e o horário que forem melhores para você.</p>
                    </div>
                    <div class="mp-step" data-aos="fade-up" data-aos-delay="160">
                        <div class="mp-num">03</div>
                        <h3>Acompanhe em tempo real</h3>
                        <p>Veja cada etapa avançar e receba avisos automáticos.</p>
                    </div>
                    <div class="mp-step" data-aos="fade-up" data-aos-delay="240">
                        <div class="mp-num">04</div>
                        <h3>Retire seu pet</h3>
                        <p>Você recebe o aviso de "pronto" e o histórico fica salvo.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ DEMO INTERATIVA ============ -->
        <section class="mp-demo" id="mp-demo">
            <div class="mp-container">

                <div data-aos="fade-right">
                    <span class="mp-eyebrow"><i class="bi bi-hand-index-thumb"></i> Experimente agora</span>
                    <h2>É assim que você acompanha o atendimento</h2>
                    <p>
                        Toque no botão e avance o atendimento etapa por etapa. É exatamente o
                        que o tutor vê no celular enquanto o petshop trabalha &mdash; sem
                        precisar ligar para perguntar "já está pronto?".
                    </p>
                    <span class="mp-demo-hint"><i class="bi bi-arrow-down-circle"></i> Interaja com o painel ao lado</span>
                </div>

                <div class="mp-panel" data-aos="fade-left" data-aos-delay="120">
                    <div class="mp-panel-head">
                        <span class="mp-pet"><i class="bi bi-heart-fill"></i></span>
                        <div>
                            <b>Rex &middot; Banho &amp; Tosa</b>
                            <span>Agendado para hoje, 09:00</span>
                        </div>
                        <span class="mp-live"><span class="mp-dot"></span> AO VIVO</span>
                    </div>

                    <div class="mp-prog-head">
                        <span>Progresso do atendimento</span>
                        <span id="mpProgPct">0%</span>
                    </div>
                    <div class="mp-prog"><span id="mpProgBar"></span></div>

                    <ul class="mp-demo-tl" id="mpDemoTl">
                        <li data-stage="0"><span class="mp-tl-ico"><i class="bi bi-check"></i></span> Agendamento confirmado</li>
                        <li data-stage="1"><span class="mp-tl-ico"><i class="bi bi-check"></i></span> Pet recebido no petshop</li>
                        <li data-stage="2"><span class="mp-tl-ico"><i class="bi bi-check"></i></span> Banho iniciado</li>
                        <li data-stage="3"><span class="mp-tl-ico"><i class="bi bi-check"></i></span> Tosa e finalização</li>
                        <li data-stage="4"><span class="mp-tl-ico"><i class="bi bi-check"></i></span> Secagem e escovação</li>
                        <li data-stage="5"><span class="mp-tl-ico"><i class="bi bi-check"></i></span> Pronto para retirada</li>
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
        </section>

        <!-- ============ PRIMEIROS PASSOS ============ -->
        <section class="mp-start">
            <div class="mp-container">
                <div class="mp-section-head mp-center" data-aos="fade-up">
                    <span class="mp-eyebrow"><i class="bi bi-flag"></i> Primeiros passos</span>
                    <h2>Comece em 3 passos</h2>
                    <p>Escolha o seu perfil e veja o caminho mais curto para usar o Mobipet.</p>

                    <div class="mp-tabs" role="tablist" aria-label="Escolha o seu perfil">
                        <button class="mp-tab" role="tab" id="mpTabTutor" aria-controls="mpPanelTutor"
                            aria-selected="true">Sou tutor</button>
                        <button class="mp-tab" role="tab" id="mpTabShop" aria-controls="mpPanelShop"
                            aria-selected="false" tabindex="-1">Sou funcionário</button>
                    </div>
                </div>

                <!-- Painel: Tutor -->
                <div class="mp-tabpanel" id="mpPanelTutor" role="tabpanel" aria-labelledby="mpTabTutor" data-aos="fade-up">
                    <div class="mp-start-grid">
                        <div class="mp-start-card">
                            <span class="mp-sc-num">1</span>
                            <div class="mp-sc-ico"><i class="bi bi-person-plus"></i></div>
                            <h3>Crie sua conta grátis</h3>
                            <p>Leva menos de um minuto. Você pode entrar com o Google, se preferir.</p>
                        </div>
                        <div class="mp-start-card">
                            <span class="mp-sc-num">2</span>
                            <div class="mp-sc-ico"><i class="bi bi-clipboard2-heart"></i></div>
                            <h3>Cadastre seu pet</h3>
                            <p>Nome, raça e porte. Assim o petshop já sabe quem vai atender.</p>
                        </div>
                        <div class="mp-start-card">
                            <span class="mp-sc-num">3</span>
                            <div class="mp-sc-ico"><i class="bi bi-calendar-check"></i></div>
                            <h3>Agende e acompanhe</h3>
                            <p>Escolha o horário e receba os avisos a cada etapa do atendimento.</p>
                        </div>
                    </div>
                    <div class="mp-start-cta">
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
                </div>

                <!-- Painel: Petshop -->
                <div class="mp-tabpanel" id="mpPanelShop" role="tabpanel" aria-labelledby="mpTabShop" hidden>
                    <div class="mp-start-grid">
                        <div class="mp-start-card">
                            <span class="mp-sc-num">1</span>
                            <div class="mp-sc-ico"><i class="bi bi-box-arrow-in-right"></i></div>
                            <h3>Acesse o painel</h3>
                            <p>A equipe entra com o login de funcionário e vê a agenda do dia.</p>
                        </div>
                        <div class="mp-start-card">
                            <span class="mp-sc-num">2</span>
                            <div class="mp-sc-ico"><i class="bi bi-calendar2-week"></i></div>
                            <h3>Organize os atendimentos</h3>
                            <p>Horários, serviços e pets de cada cliente, tudo em um lugar só.</p>
                        </div>
                        <div class="mp-start-card">
                            <span class="mp-sc-num">3</span>
                            <div class="mp-sc-ico"><i class="bi bi-broadcast"></i></div>
                            <h3>Atualize o status</h3>
                            <p>A cada etapa concluída, o tutor recebe o aviso automaticamente.</p>
                        </div>
                    </div>
                    <div class="mp-start-cta">
                        @if (session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                            <a href="{{ route('painel-controle') }}" class="mp-btn mp-btn--primary">
                                Abrir o painel <i class="bi bi-arrow-right"></i>
                            </a>
                        @else
                            <a href="{{ route('login.funcionario') }}" class="mp-btn mp-btn--primary">
                                Entrar como funcionário <i class="bi bi-arrow-right"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ RECURSOS ============ -->
        <section class="mp-features">
            <div class="mp-container">
                <div class="mp-section-head mp-center" data-aos="fade-up">
                    <span class="mp-eyebrow"><i class="bi bi-boxes"></i> Recursos</span>
                    <h2>Pensado para facilitar a sua vida</h2>
                    <p>Cada recurso existe para tirar uma dor do dia a dia &mdash; do tutor e do petshop.</p>
                </div>

                <div class="mp-cards">
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="mp-ico"><i class="bi bi-broadcast"></i></div>
                        <h3>Acompanhamento ao vivo</h3>
                        <p>Você vê em que etapa o pet está sem precisar ligar nem sair de casa.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="80">
                        <div class="mp-ico"><i class="bi bi-bell-fill"></i></div>
                        <h3>Avisos automáticos</h3>
                        <p>Uma notificação a cada mudança de etapa e quando o pet está pronto.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="160">
                        <div class="mp-ico"><i class="bi bi-calendar-check-fill"></i></div>
                        <h3>Agendamento simples</h3>
                        <p>Poucos toques para marcar. Sem ligação, sem fila, sem confusão de horário.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="mp-ico"><i class="bi bi-clock-history"></i></div>
                        <h3>Histórico do pet</h3>
                        <p>Tudo o que já foi feito fica registrado para consultar quando quiser.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="80">
                        <div class="mp-ico"><i class="bi bi-clipboard2-data-fill"></i></div>
                        <h3>Painel para o petshop</h3>
                        <p>Clientes, pets e agenda organizados, com menos ligações no balcão.</p>
                    </div>
                    <div class="mp-card" data-aos="fade-up" data-aos-delay="160">
                        <div class="mp-ico"><i class="bi bi-universal-access-circle"></i></div>
                        <h3>Acessível a todos</h3>
                        <p>Interface clara e tradução automática para Libras (VLibras) integrada.</p>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- ============ CTA FINAL ============ -->
        <section class="mp-cta">
            <div class="mp-container">
                <div class="mp-cta-card" data-aos="zoom-in">
                    @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                        <h2>Tudo pronto. Que tal agendar o próximo banho?</h2>
                        <p>Escolha o serviço e o horário e acompanhe cada etapa pelo celular.</p>
                        <div class="mp-cta-actions">
                            <a href="{{ route('agendamento') }}" class="mp-btn mp-btn--light">
                                Agendar agora <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="{{ route('pets.create') }}" class="mp-btn mp-btn--wpp">
                                <i class="bi bi-plus-circle"></i> Cadastrar outro pet
                            </a>
                        </div>
                    @elseif (session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                        <h2>Sua agenda do dia está esperando</h2>
                        <p>Abra o painel para organizar os atendimentos e atualizar os status.</p>
                        <div class="mp-cta-actions">
                            <a href="{{ route('painel-controle') }}" class="mp-btn mp-btn--light">
                                Abrir o painel <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @else
                        <h2>Crie sua conta e acompanhe seu pet</h2>
                        <p>É grátis, leva menos de um minuto e não precisa instalar nada.</p>
                        <div class="mp-cta-actions">
                            <a href="{{ route('cadastro') }}" class="mp-btn mp-btn--light">
                                Criar conta grátis <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="{{ route('login') }}" class="mp-btn mp-btn--wpp">
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

    <!-- Interações da landing (barra de progresso, demo, abas) -->
    <script>
        (function () {
            'use strict';
            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            /* ---- Barra de progresso de leitura ---- */
            var bar = document.getElementById('mpProgress');
            if (bar) {
                var updateBar = function () {
                    var h = document.documentElement;
                    var max = h.scrollHeight - h.clientHeight;
                    bar.style.width = (max > 0 ? (h.scrollTop / max) * 100 : 0) + '%';
                };
                document.addEventListener('scroll', updateBar, { passive: true });
                window.addEventListener('resize', updateBar);
                updateBar();
            }

            /* ---- Scroll suave para âncoras internas ---- */
            document.querySelectorAll('[data-mp-scroll]').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    var target = document.querySelector(this.getAttribute('href'));
                    if (!target) return;
                    e.preventDefault();
                    target.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
                });
            });

            /* ---- Demo interativa do acompanhamento ---- */
            var stages = [
                { label: 'Agendamento confirmado', msg: 'Agendamento confirmado para hoje às 09:00.' },
                { label: 'Pet recebido no petshop', msg: 'Rex deu entrada no petshop. 🐾' },
                { label: 'Banho iniciado', msg: 'Banho iniciado. Você será avisado na próxima etapa.' },
                { label: 'Tosa e finalização', msg: 'Tosa e acabamento em andamento.' },
                { label: 'Secagem e escovação', msg: 'Secagem e escovação em andamento.' },
                { label: 'Pronto para retirada', msg: 'Rex está pronto para retirada! ✅' }
            ];
            var tl = document.getElementById('mpDemoTl');
            var nextBtn = document.getElementById('mpNext');
            var resetBtn = document.getElementById('mpReset');
            var progBar = document.getElementById('mpProgBar');
            var progPct = document.getElementById('mpProgPct');
            var toast = document.getElementById('mpToast');
            var toastMsg = document.getElementById('mpToastMsg');

            if (tl && nextBtn) {
                var items = Array.prototype.slice.call(tl.querySelectorAll('li'));
                var current = -1;
                var autoNudged = false;

                var render = function () {
                    items.forEach(function (li, i) {
                        li.classList.toggle('done', i < current);
                        li.classList.toggle('now', i === current);
                    });
                    var pct = current < 0 ? 0 : Math.round(((current + 1) / stages.length) * 100);
                    progBar.style.width = pct + '%';
                    progPct.textContent = pct + '%';

                    if (current >= 0) {
                        toastMsg.textContent = stages[current].msg;
                        toast.classList.add('show');
                    }

                    if (current >= stages.length - 1) {
                        nextBtn.innerHTML = 'Ver primeiros passos <i class="bi bi-arrow-down"></i>';
                        nextBtn.dataset.done = '1';
                    } else {
                        nextBtn.innerHTML = 'Avançar etapa <i class="bi bi-arrow-right"></i>';
                        delete nextBtn.dataset.done;
                    }
                };

                nextBtn.addEventListener('click', function () {
                    if (nextBtn.dataset.done === '1') {
                        var start = document.querySelector('.mp-start');
                        if (start) start.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
                        return;
                    }
                    if (current < stages.length - 1) {
                        current++;
                        render();
                    }
                });

                resetBtn.addEventListener('click', function () {
                    current = -1;
                    toast.classList.remove('show');
                    toastMsg.textContent = 'Toque em "Avançar etapa" para começar a simulação.';
                    render();
                });

                render();

                /* Convida à interação: avança 1 etapa sozinho quando a seção aparece */
                if (!reduceMotion && 'IntersectionObserver' in window) {
                    var io = new IntersectionObserver(function (entries) {
                        entries.forEach(function (entry) {
                            if (entry.isIntersecting && !autoNudged) {
                                autoNudged = true;
                                setTimeout(function () {
                                    if (current === -1) { current = 0; render(); }
                                }, 900);
                                io.disconnect();
                            }
                        });
                    }, { threshold: 0.45 });
                    io.observe(document.getElementById('mp-demo'));
                }
            }

            /* ---- Abas Primeiros passos (Tutor / Petshop) ---- */
            var tabs = Array.prototype.slice.call(document.querySelectorAll('.mp-tab'));
            var panels = {
                mpTabTutor: document.getElementById('mpPanelTutor'),
                mpTabShop: document.getElementById('mpPanelShop')
            };

            var selectTab = function (tab, focus) {
                tabs.forEach(function (t) {
                    var on = t === tab;
                    t.setAttribute('aria-selected', on ? 'true' : 'false');
                    t.tabIndex = on ? 0 : -1;
                    var panel = panels[t.id];
                    if (panel) panel.hidden = !on;
                });
                if (focus) tab.focus();
            };

            tabs.forEach(function (tab, idx) {
                tab.addEventListener('click', function () { selectTab(tab); });
                tab.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
                        e.preventDefault();
                        var dir = e.key === 'ArrowRight' ? 1 : -1;
                        selectTab(tabs[(idx + dir + tabs.length) % tabs.length], true);
                    }
                });
            });
        })();
    </script>

    @include('partials.logout-confirm')

</body>

</html>
