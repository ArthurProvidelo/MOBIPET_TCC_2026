<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Serviços</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">

</head>

<body class="services-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="mailto:contact@example.com">mobipet@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19)99999-8888</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Mobipet</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{route('index')}}" >Início</a></li>
            <li><a href="{{route('sobre')}}">Sobre nós</a></li>
            <li><a href="{{route('services')}}" class="active">Serviços</a></li>
            <li><a href="{{route('devs')}}">Desenvolvedores</a></li>
            <li><a href="{{route('agendamento')}}">Agendamento</a></li>
            <li><a href="{{route('contact')}}">Contato</a></li>
            <li><a href="{{route('departments')}}">Produtos</a></li>
            <li><a href="{{route('perfil')}}">Perfil</a></li>

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
              <h1 class="heading-title">Serviços</h1>
              <p class="mb-0">
               Oferecer cuidado dedicado ao seu pet é a essência do nosso serviço.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Início</a></li>
            <li class="current">Serviços</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/banho_servicos.png" alt="Cardiology Services" class="banho_servicos">
                <div class="service-overlay">
                  <i class="fa-solid fa-shower"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Banho</h3>
                <p>Banho profissional que garante conforto, limpeza e carinho em cada detalhe.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Produtos de qualidade</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Cuidado e carinho</span>
                </div>            
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/hidratacao_servicos.png" alt="Neurology Services" class="hidratacao_servicos">
                <div class="service-overlay">
                 <i class="fa-solid fa-bottle-droplet"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Hidratação</h3>
                <p>Cuidado intensivo que devolve vida e brilho à pelagem do seu pet.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Tecnologia e carinho para restaurar a beleza natural da pelagem.</span>
                </div>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/secagem_servicos.png" alt="Orthopedics Services" class="secagem_servicos">
                <div class="service-overlay">
                  <i class="fa-solid fa-wind"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Secagem</h3>
                <p>Secagem cuidadosa e eficiente para garantir conforto, saúde e bem-estar ao seu pet.
                </p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Rápido </span>
                  <span class="feature-item"><i class="fas fa-check"></i> Eficaz</span>
                </div>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/escova_servicos.png" alt="Pediatrics Services" class="escova">
                <div class="service-overlay">
                  <i class="fa-solid fa-brush"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Escova na pelagem</h3>
                <p>Cuidado diário com escovação para pelos mais macios e sem nós.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Cuidado</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Amor</span>
                </div>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/limpeza_servicos.png" alt="Emergency Services" class="limpeza">
                <div class="service-overlay">
                  <i class="fa-solid fa-ear-listen"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Limpeza de ouvidos</h3>
                <p>Limpeza segura e eficiente para o conforto do seu melhor amigo.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i>Higienização auricular que previne desconfortos e mantém o bem-estar.</span>
                </div>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/corte_servicos.png" alt="Laboratory Services" class="corte">
                <div class="service-overlay">
                  <i class="fa-solid fa-scissors"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Corte de unhas</h3>
                <p>Corte de unhas feito com técnica, calma e carinho.
                </p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Corte de unhas com precisão e segurança para o conforto do seu pet.</span>
                </div>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

  </main>

  <footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-start">

          <div class="col-lg-5">
            <div class="brand-section">
              <a href="index.html" class="logo d-flex align-items-center mb-4">
                <span class="sitename">Mobipet</span>
              </a>
              <p class="brand-description">Agradecemos a sua atenção e confiança em nossos serviços.</p>

              <div class="contact-info mt-5">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>Rua Bela Vista, 100 - Centro, Tambaú - SP</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                  <span>(19)99999-8888</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>mobipet@gmail.com</span>
                </div>
              </div>
            </div>
          </div>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="bottom-content" data-aos="fade-up" data-aos-delay="300">
          <div class="row align-items-center">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you've purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>