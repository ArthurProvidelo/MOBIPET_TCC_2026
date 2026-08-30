{{-- ===================================================================
     Preloader / transição entre páginas — Mobipet
     Único para todo o sistema. Inclua logo após <body> em cada view:
         @include('partials.preloader')
     Autossuficiente: não depende de main.css, main.js nem estilo.css.
     ================================================================== --}}

<style>
    .mp-loader {
        position: fixed;
        inset: 0;
        z-index: 99999;
        display: grid;
        place-items: center;
        background: #ffffff;
        opacity: 1;
        visibility: visible;
        transition: opacity .3s ease, visibility .3s ease;
    }

    .mp-loader.is-hidden {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    .mp-loader__box {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        animation: mpl-in .45s ease both;
    }

    @keyframes mpl-in {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: none; }
    }

    .mp-loader__mark {
        position: relative;
        width: 76px;
        height: 76px;
        display: grid;
        place-items: center;
    }

    .mp-loader__mark::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 50%;
        background: #eaf1fe;
    }

    .mp-loader__ring {
        position: absolute;
        inset: -9px;
        border-radius: 50%;
        border: 3px solid #dce8fb;
        border-top-color: #175cdd;
        animation: mpl-spin .8s linear infinite;
    }

    @keyframes mpl-spin {
        to { transform: rotate(360deg); }
    }

    .mp-loader__paw {
        position: relative;
        width: 34px;
        height: 34px;
        color: #175cdd;
        animation: mpl-pulse 1.4s ease-in-out infinite;
    }

    .mp-loader__paw svg {
        width: 100%;
        height: 100%;
        display: block;
        fill: currentColor;
    }

    @keyframes mpl-pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(.84); }
    }

    .mp-loader__name {
        font-family: "Montserrat", "Segoe UI", system-ui, -apple-system, sans-serif;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: .22em;
        text-transform: uppercase;
        color: #112344;
        padding-left: .22em;
    }

    .mp-loader__bar {
        width: 132px;
        height: 3px;
        border-radius: 999px;
        background: #eaf1fe;
        overflow: hidden;
    }

    .mp-loader__bar span {
        display: block;
        width: 38%;
        height: 100%;
        border-radius: 999px;
        background: #175cdd;
        animation: mpl-slide 1.15s cubic-bezier(.65, 0, .35, 1) infinite;
    }

    @keyframes mpl-slide {
        0% { transform: translateX(-140%); }
        100% { transform: translateX(360%); }
    }

    @media (prefers-reduced-motion: reduce) {
        .mp-loader__ring { animation: none; }
        .mp-loader__paw { animation: none; }
        .mp-loader__box { animation: none; }
        .mp-loader__bar span { animation: none; width: 100%; }
    }
</style>

<div id="mp-loader" class="mp-loader" role="status" aria-live="polite" aria-label="Carregando">
    <div class="mp-loader__box">
        <div class="mp-loader__mark">
            <span class="mp-loader__ring"></span>
            <span class="mp-loader__paw">
                <svg viewBox="0 0 512 512" aria-hidden="true">
                    <path d="M226.5 92.9c14.3 42.9-.3 86.2-32.6 96.8s-70.1-15.6-84.4-58.5s.3-86.2 32.6-96.8s70.1 15.6 84.4 58.5zM100.4 198.6c18.9 32.4 14.3 70.1-10.2 84.1s-59.7-.9-78.5-33.3S-2.7 179.3 21.8 165.3s59.7 .9 78.5 33.3zM69.2 401.2C121 259.9 214.6 224 256 224s135 35.9 186.8 177.2c3.6 9.7 5.2 20.1 5.2 30.5v1.6c0 25.8-20.9 46.7-46.7 46.7c-11.5 0-22.9-1.4-34-4.2l-88-22c-15.3-3.8-31.3-3.8-46.6 0l-88 22c-11.1 2.8-22.5 4.2-34 4.2C34.9 480 14 459.1 14 433.3v-1.6c0-10.4 1.6-20.8 5.2-30.5zM421.8 282.7c-24.5-14-29.1-51.7-10.2-84.1s53.9-47.3 78.5-33.3s29.1 51.7 10.2 84.1s-53.9 47.3-78.5 33.3zM310.1 189.7c-32.3-10.6-46.9-53.9-32.6-96.8s52.1-69.1 84.4-58.5s46.9 53.9 32.6 96.8s-52.1 69.1-84.4 58.5z"/>
                </svg>
            </span>
        </div>
        <div class="mp-loader__name">Mobipet</div>
        <div class="mp-loader__bar"><span></span></div>
    </div>
</div>

<script>
    (function () {
        'use strict';
        var loader = document.getElementById('mp-loader');
        if (!loader) return;

        /* Neutraliza o preloader padrão do template para não haver dois.
           Ele costuma ficar no fim do <body>, então repetimos após o DOM. */
        function killLegacy() {
            var l = document.getElementById('preloader');
            if (l && l !== loader) { l.style.display = 'none'; }
        }
        killLegacy();
        document.addEventListener('DOMContentLoaded', killLegacy);

        var failsafe;
        function hide() {
            loader.classList.add('is-hidden');
            clearTimeout(failsafe);
        }
        function show() {
            loader.classList.remove('is-hidden');
        }

        /* --- Esconder quando a página terminar de carregar --- */
        if (document.readyState === 'complete') {
            setTimeout(hide, 120);
        } else {
            window.addEventListener('load', function () { setTimeout(hide, 120); });
        }
        /* Nunca deixa a tela presa, mesmo se algum recurso travar */
        failsafe = setTimeout(hide, 6000);

        /* Voltar/avançar do cache do navegador (bfcache) */
        window.addEventListener('pageshow', function (e) { if (e.persisted) hide(); });

        /* --- Mostrar ao sair para outra página (transição contínua) --- */
        var leaving = false;
        function leave() {
            if (leaving) return;
            leaving = true;
            show();
            setTimeout(function () { leaving = false; hide(); }, 8000);
        }

        function isInternalNav(a) {
            if (!a || !a.getAttribute) return false;
            var href = a.getAttribute('href');
            if (!href || href.charAt(0) === '#') return false;
            if (/^(javascript:|mailto:|tel:|sms:|whatsapp:)/i.test(href)) return false;
            if (a.hasAttribute('download') || a.hasAttribute('data-no-loader')) return false;
            if (a.target && a.target !== '' && a.target !== '_self') return false;
            if ((a.getAttribute('rel') || '').indexOf('external') !== -1) return false;
            var url;
            try { url = new URL(a.href, location.href); } catch (_) { return false; }
            if (url.origin !== location.origin) return false;
            if (url.href.replace(/#.*$/, '') === location.href.replace(/#.*$/, '')) return false;
            if (/\/logout(\/|$)/.test(url.pathname)) return false; /* logout usa confirmação */
            return true;
        }

        document.addEventListener('click', function (e) {
            if (e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
            var a = e.target.closest ? e.target.closest('a') : null;
            if (isInternalNav(a)) leave();
        }, true);

        document.addEventListener('submit', function (e) {
            var f = e.target;
            if (!f || f.hasAttribute('data-no-loader')) return;
            if (f.classList && f.classList.contains('php-email-form')) return;
            if (f.target && f.target !== '' && f.target !== '_self') return;
            leave();
        }, true);

        /* Rede de segurança: qualquer navegação real (inclusive redirecionamento via JS) */
        window.addEventListener('beforeunload', function () { show(); });
    })();
</script>
