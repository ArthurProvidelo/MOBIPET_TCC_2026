/**
* Template Name: Clinic
* Template URL: https://bootstrapmade.com/clinic-bootstrap-template/
* Updated: Jul 23 2025 with Bootstrap v5.3.7
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*
* Mobipet: reescrito para tolerar páginas que não carregam todas as libs
* (AOS, GLightbox, PureCounter, Swiper) — nenhuma falha isolada derruba o
* restante do script — e para padronizar as animações de entrada num ritmo
* suave e confortável. As animações rodam sempre (o site foi feito com
* elas); apenas a rolagem programática deixa de ser "smooth" quando o
* usuário pede menos movimento.
*/

(function () {
  "use strict";

  // Mobipet: o site foi feito com animações e elas devem rodar sempre,
  // independentemente da preferência "reduzir movimento" do sistema.
  var prefersReducedMotion = false;

  /**
   * Executa um bloco isolando erros, para uma lib ausente não travar o resto.
   */
  function safe(label, fn) {
    try {
      fn();
    } catch (err) {
      if (window.console && console.warn) {
        console.warn('[main.js] ' + label + ':', err);
      }
    }
  }

  /**
   * Aplica .scrolled ao body conforme a página rola.
   */
  function toggleScrolled() {
    const body = document.querySelector('body');
    const header = document.querySelector('#header');
    if (!body || !header) return;
    if (!header.classList.contains('scroll-up-sticky') &&
        !header.classList.contains('sticky-top') &&
        !header.classList.contains('fixed-top')) return;
    window.scrollY > 50 ? body.classList.add('scrolled') : body.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Menu mobile
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Fecha o menu mobile ao clicar num link
   */
  document.querySelectorAll('#navmenu a').forEach(function (link) {
    link.addEventListener('click', function () {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });
  });

  /**
   * Dropdowns do menu mobile
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(function (item) {
    item.addEventListener('click', function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader legado do template (o loader real entre páginas é o
   * partials/preloader.blade.php, que se cuida sozinho). Aqui só removemos
   * o elemento antigo, se existir, quando a página termina de carregar.
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', function () {
      if (preloader.parentNode) preloader.remove();
    });
    setTimeout(function () {
      if (preloader.parentNode) preloader.remove();
    }, 5000);
  }

  /**
   * Botão "voltar ao topo"
   */
  const scrollTopBtn = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (!scrollTopBtn) return;
    window.scrollY > 100 ? scrollTopBtn.classList.add('active') : scrollTopBtn.classList.remove('active');
  }

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
    });
    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
  }

  /**
   * AOS — animação de entrada, num ritmo suave e único (não repete no scroll).
   */
  function aosInit() {
    if (typeof AOS === 'undefined') {
      // Sem a lib: revela tudo que dependeria dela, para nada ficar invisível.
      document.documentElement.classList.add('no-aos');
      document.querySelectorAll('[data-aos]').forEach(function (el) {
        el.style.opacity = '1';
        el.style.transform = 'none';
      });
      return;
    }

    AOS.init({
      duration: 650,
      easing: 'ease-out-cubic',
      once: true,
      mirror: false,
      offset: 100,
      delay: 0
    });

    // Recalcula posições depois que imagens e fontes assentam o layout,
    // evitando gatilhos no lugar errado (sensação de "travado").
    window.addEventListener('load', function () { AOS.refresh(); });
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(function () { AOS.refresh(); }).catch(function () {});
    }
  }

  // Inicia cedo (DOM pronto) para não haver "flash" de conteúdo estático.
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () { safe('AOS', aosInit); });
  } else {
    safe('AOS', aosInit);
  }

  /**
   * GLightbox (opcional na página)
   */
  window.addEventListener('load', function () {
    safe('GLightbox', function () {
      if (typeof GLightbox === 'function') {
        GLightbox({ selector: '.glightbox' });
      }
    });
  });

  /**
   * PureCounter (opcional na página)
   */
  safe('PureCounter', function () {
    if (typeof PureCounter === 'function') {
      new PureCounter();
    }
  });

  /**
   * Swiper sliders (opcional na página)
   */
  function initSwiper() {
    if (typeof Swiper === 'undefined') return;
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      var configEl = swiperElement.querySelector(".swiper-config");
      if (!configEl) return;
      var config = JSON.parse(configEl.innerHTML.trim());
      if (swiperElement.classList.contains("swiper-tab") && typeof initSwiperWithCustomPagination === 'function') {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", function () { safe('Swiper', initSwiper); });

  /**
   * FAQ toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle, .faq-item .faq-header').forEach(function (faqItem) {
    faqItem.addEventListener('click', function () {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

})();
