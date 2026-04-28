<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sobre nós</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/mobipet_icon.png" rel="icon">
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

<body class="about-page">

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
            <li><a href="{{route('sobre')}}" class="active">Sobre nós</a></li>
            <li><a href="{{route('services')}}">Serviços</a></li>
            <li><a href="{{route('devs')}}">Desenvolvedores</a></li></li class="bi bi-chevron-down toggle-dropdown"></i></a></li>
            <li><a href="{{route('agendamento')}}">Agendamento</a></li>
            <li><a href="{{route('contact')}}">Contato</a></li>
            <li><a href="{{route('produtos')}}">Produtos</a></li>
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
              <h1 class="heading-title">Como funciona nossos atendimentos?</h1>
              <p class="mb-0">
                Trabalhamos com um atendimento profissional e humanizado, priorizando a segurança,
                 a saúde e o bem-estar do seu pet em todas as etapas do serviço.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Início</a></li>
            <li class="current">Sobre-nós</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row align-items-center">

  <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
    <div class="about-content">
      <h2>Acompanhe todos os detalhes pelo vidro</h2>

      <p class="lead">
        Nosso atendimento é realizado de forma cuidadosa e transparente, 
        permitindo que você acompanhe cada etapa do processo com total confiança.
      </p>

      <p>
        Cuidado, higiene e bem-estar para o seu pet em cada detalhe.
      </p>
    </div>
  </div>

  <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
    <div class="image-wrapper">
      <img src="assets/img/image2.png" class="imgbanho" alt="Pet shop atendimento">
    </div>
  </div>

</div>

        <div class="values-section" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3>Conheça as etapas do banho</h3>
              <p class="section-description">Excelência em banho e tosa com segurança e dedicação.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-water"></i>
                </div>
                <h4>Banho</h4>
              </div>
            </div>

            <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-droplet"></i>
                </div>
                <h4>Hidratação</h4>
              </div>
            </div>

            <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-wind"></i>
                </div>
                <h4>Secagem</h4>
              </div>
            </div>

            <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="value-item">
                <div class="value-icon">
                  <i class="fa-solid fa-brush"></i>
                </div>
                <h4>Escova na pelagem</h4>
              </div>
            </div>

            <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-ear"></i>
                </div>
                <h4>Limpeza de ouvidos</h4>
              </div>
            </div>

            <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-scissors"></i>
                </div>
                <h4>Corte de unhas</h4>
              </div>
            </div>
          </div><!-- End Values Row -->
        </div><!-- End Values Section -->
        

        <div class="certifications-section" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3>Colaboradores</h3>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="certification-item">
                <img src="https://cdn.bs9.com.br/upload/dn_arquivo/2024/05/37.jpg" class="img-fluid" alt="Healthcare certification">
              </div>
            </div>
          </div><!-- End Certifications Row -->
        </div><!-- End Certifications Section -->

      </div>

    </section><!-- /About Section -->

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
              <p class="brand-description">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!</p>

              <div class="contact-info mt-5">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>Rua Bela Vista, 100 - Centro, Tambaú - SP</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                  <span> (19)9999-8888</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>mobipet@gmail.com</span>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-5">
            <div class="brand-section">
              <img src="assets/img/gemini.jpg" class="gemini" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="bottom-content" data-aos="fade-up" data-aos-delay="300">
          <div class="row align-items-center">

            <div class="col-lg-6">
              <div class="legal-links">
                <div class="credits">
                </div>
              </div>
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
  <a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
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

</body>

</html>