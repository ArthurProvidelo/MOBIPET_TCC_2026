{{-- ===================================================================
     Footer "Estação de cuidados" — Mobipet
     Único para todo o sistema. Inclua logo após </main> em cada view:
         @include('partials.footer')
     Autossuficiente: traz o próprio <style>, o widget VLibras e o
     botão "voltar ao topo". Respeita prefers-reduced-motion.
     ================================================================== --}}

<style>
    /* ===========================================================
       FOOTER MOBIPET — prefixo mpf-
       Transição suave da página para o fundo escuro + água com luz
       (caustics), bolhas de sabão subindo, trilha de patinhas e a
       marca com brilho. Tudo CSS + um IO minúsculo.
       =========================================================== */
    .mpf {
        --mpf-bg1: #0f1b34;
        --mpf-bg2: #16264a;
        --mpf-accent: #175cdd;
        --mpf-accent-bright: #4f8cff;
        --mpf-green: #22c55e;
        --mpf-ink: #ffffff;
        --mpf-muted: rgba(255, 255, 255, .64);
        --mpf-faint: rgba(255, 255, 255, .42);
        --mpf-line: rgba(255, 255, 255, .12);
        --mpf-ease: cubic-bezier(.22, .61, .36, 1);

        position: relative;
        isolation: isolate;
        overflow: hidden;
        border: 0;
        margin-top: 0;
        padding: 150px 0 30px;
        /* topo funde com a cor clara da página e escurece devagar
           até o azul profundo — sem borda, sem onda */
        background:
            linear-gradient(180deg,
                #f6f8fd 0,
                rgba(233, 238, 249, .55) 38px,
                rgba(20, 32, 60, 0) 190px),
            linear-gradient(172deg, var(--mpf-bg1) 0%, var(--mpf-bg2) 100%);
        color: var(--mpf-muted);
        font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
        font-size: 15px;
    }

    /* luz de água atravessando o fundo (caustics) */
    .mpf::before {
        content: "";
        position: absolute;
        inset: -25%;
        z-index: 0;
        pointer-events: none;
        background:
            radial-gradient(38% 30% at 18% 26%, rgba(79, 140, 255, .12), transparent 70%),
            radial-gradient(34% 26% at 78% 58%, rgba(120, 190, 255, .09), transparent 72%),
            radial-gradient(30% 40% at 52% 92%, rgba(34, 197, 94, .06), transparent 72%);
        filter: blur(22px);
        animation: mpf-caustics 26s ease-in-out infinite alternate;
    }

    @keyframes mpf-caustics {
        0% { transform: translate3d(-3%, -2%, 0) scale(1); }
        100% { transform: translate3d(4%, 3%, 0) scale(1.16); }
    }

    /* leve vinheta para dar profundidade */
    .mpf::after {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background: radial-gradient(120% 80% at 50% 120%, transparent 55%, rgba(0, 0, 0, .28) 100%);
    }

    .mpf h6,
    .mpf .mpf__logo-text {
        font-family: "Montserrat", sans-serif;
    }

    /* ---------- revelação no scroll ---------- */
    .mpf--anim [data-mpf-reveal] {
        opacity: 0;
        transform: translateY(20px);
        filter: blur(5px);
        transition: opacity .7s var(--mpf-ease), transform .7s var(--mpf-ease), filter .7s ease;
        transition-delay: calc(var(--d, 0) * 1ms);
    }

    .mpf--anim [data-mpf-reveal].mpf-in {
        opacity: 1;
        transform: none;
        filter: blur(0);
    }

    /* ---------- bolhas de sabão subindo ---------- */
    .mpf__bubbles {
        position: absolute;
        inset: 0;
        z-index: 1;
        overflow: hidden;
        pointer-events: none;
    }

    .mpf__bubbles span {
        position: absolute;
        bottom: -80px;
        left: var(--x);
        width: var(--s);
        height: var(--s);
        border-radius: 50%;
        /* interior quase invisível + aro fino iridescente = parede de sabão */
        background:
            radial-gradient(circle at 30% 27%, rgba(255, 255, 255, .30) 0%, rgba(255, 255, 255, .05) 14%, transparent 24%),
            radial-gradient(circle at 72% 78%, rgba(150, 190, 255, .10) 0%, transparent 32%),
            radial-gradient(circle at 50% 50%, transparent 56%, rgba(255, 255, 255, .04) 72%, rgba(180, 165, 255, .12) 84%, rgba(160, 225, 255, .16) 92%, rgba(255, 255, 255, .22) 97%, transparent 100%);
        box-shadow:
            inset 0 0 5px rgba(255, 255, 255, .14),
            inset 3px -3px 7px rgba(120, 170, 255, .10),
            0 0 5px rgba(255, 255, 255, .04);
        opacity: 0;
        animation: mpf-rise var(--d) linear var(--delay) infinite;
    }

    /* brilho especular da bolha */
    .mpf__bubbles span::after {
        content: "";
        position: absolute;
        top: 13%;
        left: 17%;
        width: 34%;
        height: 34%;
        border-radius: 50%;
        background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, .75), rgba(255, 255, 255, .18) 52%, transparent 72%);
    }

    /* algumas bolhas "estouram" no fim do trajeto */
    .mpf__bubbles span:nth-child(4n)::before {
        content: "";
        position: absolute;
        inset: -2px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, .35);
        opacity: 0;
        animation: mpf-pop var(--d) linear var(--delay) infinite;
    }

    @keyframes mpf-pop {
        0%, 86% { opacity: 0; transform: scale(.6); }
        90% { opacity: .5; transform: scale(1); }
        97% { opacity: 0; transform: scale(1.9); }
        100% { opacity: 0; }
    }

    /* sobe balançando (S-curve) e cresce um tico */
    @keyframes mpf-rise {
        0% { transform: translateY(0) translateX(0) scale(.5); opacity: 0; }
        10% { opacity: .5; }
        35% { transform: translateY(calc(-.35 * var(--rise))) translateX(calc(var(--drift) * .55)) scale(.9); }
        55% { opacity: .34; transform: translateY(calc(-.55 * var(--rise))) translateX(calc(var(--drift) * -.35)) scale(1); }
        80% { opacity: .22; }
        100% { transform: translateY(calc(-1 * var(--rise))) translateX(var(--drift)) scale(1.06); opacity: 0; }
    }

    .mpf__inner {
        position: relative;
        z-index: 5;
    }

    /* ---------- trilha de patinhas caminhando ---------- */
    .mpf__pawtrail {
        position: absolute;
        top: 150px;
        right: 3%;
        display: flex;
        gap: 10px;
        z-index: 5;
        pointer-events: none;
    }

    .mpf__pawtrail i {
        font-size: 19px;
        color: rgba(255, 255, 255, .16);
        opacity: 0;
        transform: rotate(var(--r, 0deg));
        animation: mpf-paw 3.6s ease-in-out infinite;
        animation-delay: calc(var(--p) * .42s);
    }

    .mpf__pawtrail i:nth-child(odd) { --r: -20deg; }
    .mpf__pawtrail i:nth-child(even) { --r: 14deg; margin-top: 15px; }

    @keyframes mpf-paw {
        0%, 68%, 100% { opacity: 0; }
        14%, 44% { opacity: 1; }
    }

    /* ---------- layout ---------- */
    .mpf__top {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: clamp(2rem, 8vw, 6rem);
        padding-bottom: 44px;
        border-bottom: 1px solid var(--mpf-line);
        position: relative;
    }

    /* linha de "superfície da água" no divisor */
    .mpf__top::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -1px;
        height: 1px;
        width: 42%;
        background: linear-gradient(90deg, transparent, var(--mpf-accent-bright), transparent);
        animation: mpf-surface 6s ease-in-out infinite;
    }

    @keyframes mpf-surface {
        0%, 100% { transform: translateX(-10%); opacity: .3; }
        50% { transform: translateX(160%); opacity: .9; }
    }

    @media (max-width: 991px) {
        .mpf__top { grid-template-columns: 1fr; }
    }

    /* ---------- marca ---------- */
    .mpf__logo {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        text-decoration: none;
    }

    .mpf__logo-mark {
        position: relative;
        width: 46px;
        height: 46px;
        display: grid;
        place-items: center;
        border-radius: 14px;
        background: linear-gradient(135deg, var(--mpf-accent), #1d4ed8);
        color: #fff;
        font-size: 20px;
        box-shadow: 0 10px 24px -8px rgba(23, 92, 221, .7);
        transition: transform .4s cubic-bezier(.34, 1.56, .64, 1);
    }

    .mpf__logo-mark::after {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 18px;
        border: 2px solid rgba(79, 140, 255, .5);
        opacity: 0;
        animation: mpf-ring 2.8s ease-out infinite;
    }

    @keyframes mpf-ring {
        0% { transform: scale(.8); opacity: .7; }
        100% { transform: scale(1.45); opacity: 0; }
    }

    .mpf__logo:hover .mpf__logo-mark {
        transform: rotate(-12deg) scale(1.08);
    }

    .mpf__logo-text {
        font-size: 30px;
        font-weight: 600;
        letter-spacing: -.02em;
        background: linear-gradient(100deg, #fff 0%, #fff 38%, var(--mpf-accent-bright) 50%, #fff 62%, #fff 100%);
        background-size: 220% 100%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: mpf-shimmer 5s ease-in-out infinite;
    }

    @keyframes mpf-shimmer {
        0%, 100% { background-position: 120% 0; }
        50% { background-position: -20% 0; }
    }

    .mpf__tagline {
        margin: 18px 0;
        max-width: 340px;
        line-height: 1.7;
        font-size: 15px;
    }

    .mpf__status {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        font-size: 13px;
        font-weight: 600;
        color: #d7e6ff;
        background: rgba(79, 140, 255, .12);
        border: 1px solid rgba(79, 140, 255, .28);
        padding: 7px 14px;
        border-radius: 999px;
        animation: mpf-breathe 4s ease-in-out infinite;
    }

    @keyframes mpf-breathe {
        0%, 100% { box-shadow: 0 0 0 0 rgba(79, 140, 255, 0); }
        50% { box-shadow: 0 0 22px -4px rgba(79, 140, 255, .38); }
    }

    .mpf__status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--mpf-green);
        animation: mpf-pulse 2s infinite;
    }

    @keyframes mpf-pulse {
        0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, .55); }
        70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
        100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }

    .mpf__contact {
        list-style: none;
        margin: 24px 0 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 13px;
    }

    .mpf__contact li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 14px;
        transition: transform .25s var(--mpf-ease), color .25s ease;
    }

    .mpf__contact li:hover {
        transform: translateX(4px);
        color: #fff;
    }

    .mpf__contact i {
        color: var(--mpf-accent-bright);
        font-size: 15px;
        margin-top: 3px;
        flex: none;
        transition: transform .3s ease;
    }

    .mpf__contact li:hover i {
        transform: scale(1.25) translateY(-1px);
    }

    /* ---------- colunas de navegação ---------- */
    .mpf__nav {
        display: flex;
        flex-wrap: wrap;
        gap: clamp(2rem, 6vw, 4.5rem);
        align-content: start;
    }

    .mpf__nav .mpf__col {
        min-width: 140px;
    }

    @media (max-width: 991px) {
        .mpf__top { gap: 2.5rem; }
    }

    .mpf__col h6 {
        position: relative;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: #fff;
        margin: 0 0 20px;
        padding-bottom: 10px;
    }

    .mpf__col h6::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 22px;
        height: 2px;
        border-radius: 2px;
        background: linear-gradient(90deg, var(--mpf-accent-bright), transparent);
        transition: width .3s var(--mpf-ease);
    }

    .mpf__col:hover h6::after {
        width: 40px;
    }

    .mpf__col nav {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    .mpf__col nav a {
        position: relative;
        width: fit-content;
        color: var(--mpf-muted);
        font-size: 14px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 9px;
        transition: color .25s ease, padding-left .25s ease, text-shadow .25s ease;
    }

    .mpf__col nav a::before {
        content: "";
        position: absolute;
        left: -14px;
        top: 50%;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--mpf-accent-bright);
        transform: translateY(-50%) scale(0);
        transition: transform .25s var(--mpf-ease);
    }

    .mpf__col nav a:hover {
        color: #fff;
        padding-left: 14px;
        text-shadow: 0 0 14px rgba(79, 140, 255, .5);
    }

    .mpf__col nav a:hover::before {
        transform: translateY(-50%) scale(1);
    }

    /* ---------- base ---------- */
    .mpf__bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
        padding-top: 26px;
    }

    .mpf__bottom p {
        margin: 0;
        font-size: 13px;
        color: var(--mpf-faint);
    }

    .mpf__bottom p b {
        color: #fff;
        font-weight: 600;
    }

    .mpf__legal {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
    }

    .mpf__legal a {
        font-size: 12px;
        color: var(--mpf-faint);
        text-decoration: none;
        transition: color .25s ease;
    }

    .mpf__legal a:hover { color: var(--mpf-accent-bright); }

    .mpf__legal .mpf__credits {
        padding-left: 18px;
        border-left: 1px solid var(--mpf-line);
        color: var(--mpf-accent-bright);
    }

    @media (max-width: 991px) {
        .mpf__pawtrail { display: none; }
    }

    @media (max-width: 767px) {
        .mpf { padding-top: 128px; }
        .mpf__bottom { justify-content: center; text-align: center; }
    }

    @media (prefers-reduced-motion: reduce) {
        .mpf *,
        .mpf *::before,
        .mpf *::after {
            animation-duration: .001ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: .15s !important;
        }

        .mpf::before,
        .mpf__bubbles,
        .mpf__pawtrail,
        .mpf__top::after { display: none; }

        .mpf--anim [data-mpf-reveal] {
            opacity: 1 !important;
            transform: none !important;
            filter: none !important;
        }

        .mpf__logo-text {
            background: none;
            color: #fff;
            -webkit-text-fill-color: #fff;
        }
    }
</style>

<footer id="footer" class="mpf">

    {{-- bolhas de banho subindo --}}
    <div class="mpf__bubbles" aria-hidden="true">
        <span style="--x:5%;--s:12px;--d:10s;--delay:0s;--rise:470px;--drift:24px"></span>
        <span style="--x:12%;--s:20px;--d:13s;--delay:2s;--rise:500px;--drift:-18px"></span>
        <span style="--x:19%;--s:8px;--d:8s;--delay:4s;--rise:440px;--drift:16px"></span>
        <span style="--x:27%;--s:16px;--d:12s;--delay:1s;--rise:490px;--drift:-28px"></span>
        <span style="--x:35%;--s:10px;--d:9s;--delay:3s;--rise:460px;--drift:20px"></span>
        <span style="--x:44%;--s:24px;--d:15s;--delay:0.5s;--rise:520px;--drift:-14px"></span>
        <span style="--x:52%;--s:9px;--d:8.5s;--delay:5s;--rise:450px;--drift:26px"></span>
        <span style="--x:60%;--s:14px;--d:11s;--delay:2.5s;--rise:480px;--drift:-22px"></span>
        <span style="--x:68%;--s:18px;--d:13.5s;--delay:1.5s;--rise:505px;--drift:18px"></span>
        <span style="--x:76%;--s:8px;--d:8s;--delay:4.5s;--rise:440px;--drift:-16px"></span>
        <span style="--x:84%;--s:15px;--d:12s;--delay:3.5s;--rise:490px;--drift:22px"></span>
        <span style="--x:91%;--s:11px;--d:10s;--delay:0.8s;--rise:465px;--drift:-24px"></span>
        <span style="--x:96%;--s:22px;--d:14s;--delay:2.2s;--rise:515px;--drift:14px"></span>
        <span style="--x:40%;--s:7px;--d:7.5s;--delay:6s;--rise:430px;--drift:-12px"></span>
        <span style="--x:3%;--s:9px;--d:9.5s;--delay:3.2s;--rise:455px;--drift:18px"></span>
        <span style="--x:9%;--s:6px;--d:7s;--delay:5.5s;--rise:425px;--drift:-14px"></span>
        <span style="--x:16%;--s:14px;--d:11.5s;--delay:1.8s;--rise:485px;--drift:22px"></span>
        <span style="--x:23%;--s:10px;--d:9s;--delay:4.8s;--rise:460px;--drift:-20px"></span>
        <span style="--x:31%;--s:19px;--d:13s;--delay:0.3s;--rise:505px;--drift:16px"></span>
        <span style="--x:38%;--s:8px;--d:8s;--delay:2.7s;--rise:445px;--drift:-18px"></span>
        <span style="--x:48%;--s:13px;--d:10.5s;--delay:3.9s;--rise:475px;--drift:24px"></span>
        <span style="--x:56%;--s:17px;--d:12.5s;--delay:1.2s;--rise:495px;--drift:-16px"></span>
        <span style="--x:64%;--s:7px;--d:7.5s;--delay:5.2s;--rise:430px;--drift:20px"></span>
        <span style="--x:72%;--s:21px;--d:14.5s;--delay:2.9s;--rise:515px;--drift:-22px"></span>
        <span style="--x:80%;--s:9px;--d:8.5s;--delay:4.2s;--rise:450px;--drift:14px"></span>
        <span style="--x:88%;--s:12px;--d:10s;--delay:1.6s;--rise:470px;--drift:-18px"></span>
        <span style="--x:94%;--s:8px;--d:8s;--delay:5.8s;--rise:440px;--drift:16px"></span>
        <span style="--x:66%;--s:6px;--d:7s;--delay:3.4s;--rise:420px;--drift:-12px"></span>
        <span style="--x:7%;--s:16px;--d:12.5s;--delay:6.5s;--rise:500px;--drift:20px"></span>
        <span style="--x:29%;--s:6px;--d:6.5s;--delay:7s;--rise:415px;--drift:-10px"></span>
        <span style="--x:50%;--s:20px;--d:14s;--delay:4.4s;--rise:520px;--drift:-18px"></span>
        <span style="--x:83%;--s:7px;--d:7s;--delay:6.2s;--rise:430px;--drift:14px"></span>
    </div>

    {{-- trilha de patinhas --}}
    <div class="mpf__pawtrail" aria-hidden="true">
        <i class="fa-solid fa-paw" style="--p:0"></i>
        <i class="fa-solid fa-paw" style="--p:1"></i>
        <i class="fa-solid fa-paw" style="--p:2"></i>
        <i class="fa-solid fa-paw" style="--p:3"></i>
        <i class="fa-solid fa-paw" style="--p:4"></i>
        <i class="fa-solid fa-paw" style="--p:5"></i>
    </div>

    <div class="container mpf__inner">

        <div class="mpf__top">

            <div class="mpf__brand" data-mpf-reveal style="--d:0">
                <a href="{{ route('index') }}" class="mpf__logo">
                    <span class="mpf__logo-mark"><i class="fa-solid fa-paw"></i></span>
                    <span class="mpf__logo-text">Mobipet</span>
                </a>

                <p class="mpf__tagline">
                    Agende banho, tosa e consultas em segundos e acompanhe cada etapa do
                    atendimento do seu pet em tempo real.
                </p>

                <span class="mpf__status">
                    <span class="mpf__status-dot"></span>
                    Sistema online &middot; atendimento monitorado ao vivo
                </span>

                <ul class="mpf__contact">
                    <li><i class="bi bi-geo-alt"></i><span>Rua Bela Vista, 100 - Centro, Tambaú - SP</span></li>
                    <li><i class="bi bi-telephone"></i><span>(19) 98943-2384</span></li>
                    <li><i class="bi bi-envelope"></i><span>mobipet@gmail.com</span></li>
                </ul>
            </div>

            <div class="mpf__nav">

                <div class="mpf__col" data-mpf-reveal style="--d:80">
                    <h6>Navegação</h6>
                    <nav>
                        <a href="{{ route('index') }}">Início</a>
                        <a href="{{ route('sobre') }}">Sobre nós</a>
                        <a href="{{ route('services') }}">Serviços</a>
                        <a href="{{ route('devs') }}">Desenvolvedores</a>
                    </nav>
                </div>

                <div class="mpf__col" data-mpf-reveal style="--d:160">
                    <h6>Minha conta</h6>
                    <nav>
                        @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                            <a href="{{ route('agendamento') }}">Agendamento</a>
                            <a href="{{ route('pets.index') }}">Meus Pets</a>
                            <a href="{{ route('pets.create') }}">Cadastrar Pet</a>
                            <a href="{{ route('perfil') }}">Meu Perfil</a>
                        @elseif(session()->has('id') && session('nivel_acesso') == 'ADMIN')
                            <a href="{{ route('painel-controle') }}">Painel</a>
                            <a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a>
                            <a href="{{ route('funcionario') }}">Cadastrar Funcionário</a>
                            <a href="{{ route('services.create') }}">Cadastrar Serviço</a>
                            <a href="{{ route('perfil') }}">Perfil</a>
                        @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                            <a href="{{ route('painel-controle') }}">Painel</a>
                            <a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a>
                            <a href="{{ route('services.create') }}">Cadastrar Serviço</a>
                            <a href="{{ route('perfil') }}">Perfil</a>
                        @else
                            <a href="{{ route('login') }}">Entrar</a>
                            <a href="{{ route('cadastro') }}">Criar conta</a>
                        @endif
                    </nav>
                </div>

            </div>
        </div>

        <div class="mpf__bottom" data-mpf-reveal style="--d:0">
            <p>&copy; {{ date('Y') }} <b>Mobipet</b>. Todos os direitos reservados.</p>
            <div class="mpf__legal">
                <a href="{{ route('devs') }}" class="mpf__credits">Feito pela equipe Mobipet</a>
            </div>
        </div>

    </div>

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

    <script>
        (function () {
            var footer = document.getElementById('footer');
            if (!footer) return;

            /* Revelação progressiva das colunas ao entrar na tela */
            footer.classList.add('mpf--anim');

            var items = footer.querySelectorAll('[data-mpf-reveal]');
            if ('IntersectionObserver' in window && items.length) {
                var io = new IntersectionObserver(function (entries) {
                    entries.forEach(function (en) {
                        if (en.isIntersecting) {
                            en.target.classList.add('mpf-in');
                            io.unobserve(en.target);
                        }
                    });
                }, { threshold: 0.2, rootMargin: '0px 0px -6% 0px' });
                items.forEach(function (el) { io.observe(el); });
            } else {
                items.forEach(function (el) { el.classList.add('mpf-in'); });
            }
        })();
    </script>

</footer>
