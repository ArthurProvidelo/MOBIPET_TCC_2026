{{-- =====================================================================
     MOBIPET — TRANSIÇÃO DE PÁGINA / PRELOADER OFICIAL
     Arquivo: resources/views/partials/preloader.blade.php

     Uso:
         @include('partials.preloader')   (logo após a tag <body>)

     Conceito: um círculo com a pata do Mobipet. Cada dedo da pata
     "afunda" em sequência, como uma patinha pressionando a superfície,
     enquanto a página carrega. Sem porcentagem, sem spinner, sem texto.

     Autossuficiente: HTML + CSS + JS vanilla + SVG inline.
     Não depende de main.css, main.js, estilo.css, npm ou bibliotecas.
     Namespace exclusivo: .mp-loader / #mp-loader
     ===================================================================== --}}

<style>
    /* =================================================================
       BASE
       ================================================================= */
    #mp-loader {
        --mp-primary: #175CDE;
        --mp-primary-dark: #0F3EA6;
        --mp-navy: #112344;
        --mp-light: #EAF1FE;
        --mp-soft: #DCE8FB;
        --mp-teal: #23C9B5;

        position: fixed;
        inset: 0;
        z-index: 2147483647;

        display: flex;
        align-items: center;
        justify-content: center;

        width: 100%;
        height: 100%;
        min-height: 100dvh;

        background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);

        opacity: 1;
        visibility: visible;
        pointer-events: auto;

        isolation: isolate;

        transition:
            opacity 340ms cubic-bezier(.4, 0, .2, 1),
            visibility 340ms linear;
    }

    #mp-loader.is-hidden {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    /* =================================================================
       CÍRCULO + PATA
       ================================================================= */
    #mp-loader .mp-loader__box {
        position: relative;

        opacity: 0;
        transform: translateY(10px);
        animation: mpLoaderEnter 520ms cubic-bezier(.22, 1, .36, 1) 80ms forwards;
    }

    #mp-loader.is-hidden .mp-loader__box {
        animation: mpLoaderExit 300ms cubic-bezier(.4, 0, .2, 1) forwards;
    }

    #mp-loader .mp-loader__mark {
        position: relative;
        width: 124px;
        height: 124px;
        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;
        background: #ffffff;
        box-shadow:
            0 14px 40px rgba(17, 35, 68, .10),
            inset 0 0 0 2.5px var(--mp-soft);
    }

    #mp-loader .mp-loader__paw {
        width: 58px;
        height: 58px;
        overflow: visible;
    }

    /* superfície onde os dedos afundam */
    #mp-loader .mp-loader__ground {
        fill: var(--mp-soft);
        opacity: .5;
    }

    /* palma */
    #mp-loader .mp-loader__pad {
        fill: var(--mp-primary);
    }

    /* dedos — cada um afunda na sua vez */
    #mp-loader .mp-loader__toe {
        fill: var(--mp-primary);
        transform-box: fill-box;
        transform-origin: 50% 45%;
        animation: mpToeSink 2.6s cubic-bezier(.45, 0, .3, 1) infinite;
        animation-delay: calc(var(--i) * .32s);
    }

    /* =================================================================
       ANIMAÇÕES
       ================================================================= */
    @keyframes mpLoaderEnter {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    @keyframes mpLoaderExit {
        to { opacity: 0; transform: translateY(-8px); }
    }

    @keyframes mpToeSink {
        0%           { transform: translateY(0) scale(1); fill: var(--mp-primary); }
        9%           { transform: translateY(4px) scale(1.08, .72); fill: var(--mp-primary-dark); }
        24%          { transform: translateY(0) scale(1); fill: var(--mp-primary); }
        100%         { transform: translateY(0) scale(1); fill: var(--mp-primary); }
    }

    /* =================================================================
       RESPONSIVO
       ================================================================= */
    @media (max-width: 480px) {
        #mp-loader .mp-loader__mark { width: 108px; height: 108px; }
        #mp-loader .mp-loader__paw { width: 50px; height: 50px; }
    }

    @supports (padding: max(0px)) {
        #mp-loader {
            padding:
                max(20px, env(safe-area-inset-top))
                max(20px, env(safe-area-inset-right))
                max(20px, env(safe-area-inset-bottom))
                max(20px, env(safe-area-inset-left));
        }
    }

    /* =================================================================
       REDUÇÃO DE MOVIMENTO — pata parada, apenas o fade
       ================================================================= */
    @media (prefers-reduced-motion: reduce) {
        #mp-loader {
            transition: opacity 200ms linear, visibility 200ms linear;
        }

        #mp-loader .mp-loader__box {
            animation: none;
            opacity: 1;
            transform: none;
        }

        #mp-loader.is-hidden .mp-loader__box { animation: none; }

        #mp-loader .mp-loader__toe {
            animation: none !important;
            transform: none !important;
        }
    }

    /* =================================================================
       PROTEÇÃO CONTRA PRELOADER LEGADO (#preloader do template)
       ================================================================= */
    #preloader:not(#mp-loader) { display: none !important; }
</style>

{{-- Sem JavaScript: o preloader some e o conteúdo aparece normalmente. --}}
<noscript>
    <style>#mp-loader { display: none !important; }</style>
</noscript>

<div id="mp-loader" class="mp-loader" role="status" aria-live="polite" aria-label="Carregando">
    <div class="mp-loader__box">
        <div class="mp-loader__mark">
            <svg class="mp-loader__paw" viewBox="0 0 72 72" aria-hidden="true">
                <ellipse class="mp-loader__ground" cx="36" cy="55" rx="21" ry="4" />
                <path class="mp-loader__pad"
                    d="M36 30c-10.6 0-19 7.9-19 17.4 0 6.7 4.6 10.6 11.4 10.6 3.8 0 6-1.6 7.6-1.6s3.8 1.6 7.6 1.6c6.8 0 11.4-3.9 11.4-10.6C55 37.9 46.6 30 36 30z" />
                <ellipse class="mp-loader__toe" style="--i:0" cx="16" cy="30" rx="6.6" ry="8.8" transform="rotate(-24 16 30)" />
                <ellipse class="mp-loader__toe" style="--i:1" cx="29" cy="19" rx="6.6" ry="9"  transform="rotate(-8 29 19)" />
                <ellipse class="mp-loader__toe" style="--i:2" cx="43" cy="19" rx="6.6" ry="9"  transform="rotate(8 43 19)" />
                <ellipse class="mp-loader__toe" style="--i:3" cx="56" cy="30" rx="6.6" ry="8.8" transform="rotate(24 56 30)" />
            </svg>
        </div>
    </div>
</div>

<script>
(() => {
    'use strict';

    const loader = document.getElementById('mp-loader');
    if (!loader) return;

    /* ------------------------------------------------------------------
       Configuração
       ------------------------------------------------------------------ */
    const FAILSAFE_MS = 7000;   // nunca prender o usuário
    const REVEAL_MS = 60;       // margem contra flash visual

    /* ------------------------------------------------------------------
       Estado
       ------------------------------------------------------------------ */
    let hidden = false;
    let navigating = false;
    let failsafeTimer = null;

    /* ------------------------------------------------------------------
       Esconder / mostrar
       ------------------------------------------------------------------ */
    const hide = () => {
        if (hidden) return;
        hidden = true;
        if (failsafeTimer) { clearTimeout(failsafeTimer); failsafeTimer = null; }
        loader.classList.add('is-hidden');
    };

    const show = () => {
        navigating = true;
        hidden = false;
        loader.classList.remove('is-hidden');
    };

    /* ------------------------------------------------------------------
       Carregamento inicial — assim que a página fica interativa
       ------------------------------------------------------------------ */
    const finishInitialLoad = () => window.setTimeout(() => hide(), REVEAL_MS);

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', finishInitialLoad, { once: true });
    } else {
        finishInitialLoad();
    }
    window.addEventListener('load', () => window.setTimeout(() => hide(), REVEAL_MS), { once: true });

    /* Failsafe: se algum recurso travar, some mesmo assim. */
    failsafeTimer = window.setTimeout(() => hide(), FAILSAFE_MS);

    /* ------------------------------------------------------------------
       Back / Forward / bfcache
       ------------------------------------------------------------------ */
    window.addEventListener('pageshow', (event) => {
        if (event.persisted) hide();
    });

    window.addEventListener('popstate', () => {
        navigating = false;
        show();
    });

    document.addEventListener('visibilitychange', () => {
        const nav = performance.getEntriesByType('navigation')[0];
        if (document.visibilityState === 'visible' && nav && nav.type === 'back_forward') {
            hide();
        }
    });

    /* ------------------------------------------------------------------
       Deve ignorar o link?
       ------------------------------------------------------------------ */
    const shouldIgnoreLink = (event, link) => {
        if (!link) return true;

        if (event.defaultPrevented || event.button !== 0 ||
            event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return true;

        if (link.hasAttribute('data-no-loader') || link.hasAttribute('download')) return true;

        const target = link.getAttribute('target');
        if (target && target !== '_self') return true;

        if ((link.getAttribute('rel') || '').indexOf('external') !== -1) return true;

        const href = link.getAttribute('href');
        if (!href) return true;

        const raw = href.trim().toLowerCase();
        if (raw === '#' || raw.charAt(0) === '#') return true;

        const ignoredProtocols = ['mailto:', 'tel:', 'sms:', 'whatsapp:', 'javascript:'];
        if (ignoredProtocols.some((p) => raw.startsWith(p))) return true;

        let url;
        try { url = new URL(href, window.location.href); } catch (_) { return true; }

        if (url.origin !== window.location.origin) return true;

        // Só mudança de hash na mesma página.
        if (url.pathname === window.location.pathname &&
            url.search === window.location.search &&
            url.hash !== window.location.hash) return true;

        // Mesmo endereço.
        if (url.href === window.location.href) return true;

        // Logout costuma ter confirmação própria.
        if (/\/logout(\/|$)/.test(url.pathname)) return true;

        return false;
    };

    /* ------------------------------------------------------------------
       Navegação por link — mostra a transição, não bloqueia o browser
       ------------------------------------------------------------------ */
    document.addEventListener('click', (event) => {
        const link = event.target.closest ? event.target.closest('a') : null;
        if (shouldIgnoreLink(event, link)) return;
        if (navigating) return;   // dedupe: cliques sucessivos
        show();
    }, true);

    /* ------------------------------------------------------------------
       Formulários — apenas os que realmente navegam
       ------------------------------------------------------------------ */
    document.addEventListener('submit', (event) => {
        const form = event.target;
        if (!(form instanceof HTMLFormElement)) return;
        if (form.hasAttribute('data-no-loader')) return;
        if (form.classList.contains('php-email-form')) return;   // validação inline, sem navegar

        const target = form.getAttribute('target');
        if (target && target !== '_self') return;

        if (navigating) return;
        show();
    }, true);

    /* ------------------------------------------------------------------
       Rede de segurança para redirecionamentos via JS
       ------------------------------------------------------------------ */
    window.addEventListener('beforeunload', () => {
        if (navigating) loader.classList.remove('is-hidden');
    });
})();
</script>

{{-- Monitor de conexão + registro do service worker (página offline) --}}
@include('partials.conexao')
