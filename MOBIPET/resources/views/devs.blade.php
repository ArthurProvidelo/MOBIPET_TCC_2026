<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Desenvolvedores | Mobipet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilo.css">

</head>


<body class="doctors-page">


  <header id="header" class="header fixed-top">

    <!-- Top Bar -->
    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="mailto:mobipet@gmail.com">
                        mobipet@gmail.com
                    </a>
                </i>

                <i class="bi bi-phone d-flex align-items-center ms-4">
                    <span>(19) 98943-2384</span>
                </i>
            </div>

            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#!" class="whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="#!" class="instagram">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>

        </div>
    </div>

    <!-- Scroll Top -->
    <a href="#"
       id="scroll-top"
       class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
       style="width: 50px;
              height: 50px;
              position: fixed;
              bottom: 20px;
              right: 20px;
              z-index: 999;
              font-size: 24px;">

        <i class="bi bi-arrow-up-short"></i>

    </a>

    <!-- Branding -->
    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}"
               class="logo d-flex align-items-center">

                <h1 class="sitename">
                    Mobipet
                </h1>

            </a>

            <nav id="navmenu" class="navmenu">

                <ul>

                    <li>
                        <a href="{{ route('index') }}">
                            Início
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('sobre') }}">
                            Sobre nós
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}">
                            Serviços
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('devs') }}" class="active">
                            Desenvolvedores
                        </a>
                    </li>

                    {{-- CLIENTE --}}
                    @if(session()->has('id') && session('nivel_acesso') == 'USUARIO')

                        <li>
                            <a href="{{ route('pets.create') }}">
                                Cadastrar Pet
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('agendamento') }}">
                                Agendamento
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('pets.index') }}">
                                Meus Pets
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('perfil') }}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                Sair
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                    {{-- FUNCIONÁRIO --}}
                    @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')

                        <li>
                            <a href="{{ route('painel-controle') }}">
                                Painel
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('funcionario.agendamentos') }}">
                                Agendamentos
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('perfil') }}">
                                Perfil
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                Sair
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                    {{-- VISITANTE --}}
                    @else

                        <li>
                            <a href="{{ route('login') }}">
                                Entrar
                            </a>
                        </li>

                    @endif

                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

            </nav>

        </div>

    </div>

</header>


  <main class="main">


    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Desenvolvedores</h1>
              <p class="mb-0">
               A página de desenvolvedores apresenta a equipe responsável pela criação e manutenção do site, formada por alunos do SENAI com experiência em programação, design e desenvolvimento web. Ao longo de dois anos, o grupo vem adquirindo prática e trabalhando em equipe para criar soluções eficientes e inovadoras.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li>
                <a href="{{ route('index') }}">
                    Início
                </a>      
            <li class="current">Desenvolvedores</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

<section id="doctors" class="doctors section">

  <div class="container" data-aos="fade-up">

    <div class="swiper developers-slider">

      <div class="swiper-wrapper">

        <!-- Arthur Barbosa -->
        <div class="swiper-slide">
          <div class="doctor-card">

            <div class="doctor-image">
              <img src="assets/img/arthur_novo.png"
                   alt="Arthur Barbosa"
                   class="profile-photo">
            </div>

            <div class="doctor-content">
              <h4>Arthur Barbosa</h4>
              <span class="specialty">
                Desenvolvedor Front-end
              </span>

              <p>
                Responsável pela interface do usuário.
              </p>
            </div>

          </div>
        </div>

        <!-- Arthur Providelo -->
        <div class="swiper-slide">
          <div class="doctor-card">

            <div class="doctor-image">
              <img src="assets/img/arthurprovidelo.png"
                   alt="Arthur Providelo"
                   class="profile-photo">
            </div>

            <div class="doctor-content">
              <h4>Arthur Providelo</h4>
              <span class="specialty">
                Desenvolvedor Full Stack
              </span>

              <p>
                Atua no front-end e back-end.
              </p>
            </div>

          </div>
        </div>

        <!-- Kaila -->
        <div class="swiper-slide">
          <div class="doctor-card">

            <div class="doctor-image">
              <img src="assets/img/kailasilva.png"
                   alt="Kaila Silva"
                   class="profile-photo">
            </div>

            <div class="doctor-content">
              <h4>Kaila Silva</h4>
              <span class="specialty">
                Desenvolvedor Back-end
              </span>

              <p>
                Integração com banco de dados.
              </p>
            </div>

          </div>
        </div>

        <!-- Kauan -->
        <div class="swiper-slide">
          <div class="doctor-card">

            <div class="doctor-image">
              <img src="assets/img/kauanferreira.png"
                   alt="Kauan Ferreira"
                   class="profile-photo">
            </div>

            <div class="doctor-content">
              <h4>Kauan Ferreira</h4>
              <span class="specialty">
                Desenvolvedor Front-end
              </span>

              <p>
                Focado em usabilidade e design.
              </p>
            </div>

          </div>
        </div>

        <!-- Lorena -->
        <div class="swiper-slide">
          <div class="doctor-card">

            <div class="doctor-image">
              <img src="assets/img/lorenaprofissional.png"
                   alt="Lorena Thomaz"
                   class="profile-photo">
            </div>

            <div class="doctor-content">
              <h4>Lorena Thomaz</h4>
              <span class="specialty">
                Desenvolvedor Front-end
              </span>

              <p>
                Experiência visual do sistema.
              </p>
            </div>

          </div>
        </div>

        <!-- Maria -->
        <div class="swiper-slide">
          <div class="doctor-card">

            <div class="doctor-image">
              <img src="assets/img/mariafernanda.png"
                   alt="Maria Fernanda"
                   class="profile-photo">
            </div>

            <div class="doctor-content">
              <h4>Maria Fernanda Galdino</h4>
              <span class="specialty">
                Desenvolvedor Back-end
              </span>

              <p>
                Funcionamento interno da aplicação.
              </p>
            </div>

          </div>
        </div>

      </div>

      <!-- Botões -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <!-- Paginação -->
      <div class="swiper-pagination"></div>

    </div>

  </div>

</section>

        </div>


      </div>


    </section><!-- /Doctors Section -->


  </main>


  <style>
    /* ---------- Footer criativo ---------- */
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

    .footer-status {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        color: #16a34a;
        background: rgba(34, 197, 94, 0.12);
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 22px;
    }

    .footer-status .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #22c55e;
        animation: statusPulse 2s infinite;
    }

    @keyframes statusPulse {
        0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.5); }
        70% { box-shadow: 0 0 0 8px rgba(34, 197, 94, 0); }
        100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }

    .footer-16 .contact-info {
        margin-top: 24px;
    }

    .footer-16 .footer-social .social-link.whatsapp i {
        color: #25d366;
    }

    .footer-16 .footer-social .social-link.instagram i {
        background: linear-gradient(45deg, #f9ce34, #ee2a7b, #6228d7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .footer-16 .footer-bottom .legal-links .credits i {
        color: #ef4444;
        margin: 0 2px;
    }

    .footer-16 .footer-bottom .copyright p {
        color: rgba(255, 255, 255, 0.85);
    }

    .footer-16 .footer-bottom .copyright p .sitename {
        color: #fff;
    }

    .footer-16 .footer-bottom .legal-links a {
        color: rgba(255, 255, 255, 0.85);
    }

    .footer-16 .footer-bottom .legal-links a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .footer-16 .footer-bottom .legal-links .credits {
        color: rgba(255, 255, 255, 0.7);
        border-left-color: rgba(255, 255, 255, 0.3);
    }

    .footer-16 .footer-bottom .legal-links .credits a {
        color: #fff;
        font-weight: 600;
    }
  </style>

  <footer id="footer" class="footer-16 footer position-relative">

    <div class="footer-badge">
        <i class="fa-solid fa-paw"></i>
    </div>

    <div class="container">

      <div class="footer-main row gy-5 justify-content-between align-items-start" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-5 brand-section">

          <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <h1 class="sitename">Mobipet</h1>
          </a>

          <div class="contact-info">
            <div class="contact-item">
              <i class="bi bi-geo-alt"></i>
              <span>Rua Bela Vista, 100 - Centro, Tambaú - SP</span>
            </div>
            <div class="contact-item">
              <i class="bi bi-telephone"></i>
              <span>(19) 98943-2384</span>
            </div>
            <div class="contact-item">
              <i class="bi bi-envelope"></i>
              <span>mobipet@gmail.com</span>
            </div>
          </div>

        </div>

        <div class="col-lg-6 footer-nav-wrapper">
          <div class="row">

            <div class="col-6 nav-column">
              <h6>Navegação</h6>
              <nav class="footer-nav">
                <a href="{{ route('index') }}">Início</a>
                <a href="{{ route('sobre') }}">Sobre nós</a>
                <a href="{{ route('services') }}">Serviços</a>
                <a href="{{ route('devs') }}">Desenvolvedores</a>
              </nav>
            </div>

            <div class="col-6 nav-column">
              <h6>Minha Conta</h6>
              <nav class="footer-nav">
                @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                  <a href="{{ route('agendamento') }}">Agendamento</a>
                  <a href="{{ route('pets.index') }}">Meus Pets</a>
                  <a href="{{ route('pets.create') }}">Cadastrar Pet</a>
                  <a href="{{ route('perfil') }}">Meu Perfil</a>
                @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                  <a href="{{ route('painel-controle') }}">Painel</a>
                  <a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a>
                  <a href="{{ route('perfil') }}">Perfil</a>
                @else
                  <a href="{{ route('login') }}">Entrar</a>
                  <a href="{{ route('cadastro') }}">Criar conta</a>
                @endif
              </nav>
            </div>

          </div>
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

  </footer>


  <!-- Scroll Top -->
  <a href="#!" id="scroll-top" class="scroll-top"><i
      class="bi bi-arrow-up-short"></i></a>


  <!-- Preloader -->
  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- Swiper JS -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const swiper = new Swiper(".developers-slider", {

    loop: true,
    speed: 800,
    spaceBetween: 30,
    grabCursor: true,

    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {

      0: {
        slidesPerView: 1
      },

      768: {
        slidesPerView: 2
      },

      1200: {
        slidesPerView: 3
      }

    }

  });

});
</script>

    @include('partials.logout-confirm')

</body>


</html>
