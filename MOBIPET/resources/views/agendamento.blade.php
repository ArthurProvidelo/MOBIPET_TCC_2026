<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mobipet</title>
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
  <link href="assets/vendor/swiper/swiper-bjundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/estilo.css">


</head>

<body class="appointment-page">

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
            <li><a href="{{route('services')}}">Serviços</a></li>
            <li><a href="{{route('devs')}}">Desenvolvedores</a></li>
            <li><a href="{{route('agendamento')}}" class="active">Agendamento</a></li>
            <li><a href="{{route('contact')}}">Contato</a></li>
            <li><a href="{{route('departments')}}">Produtos</a></li>
            <li><a href="">Perfil</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
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
              <h1 class="heading-title">Agendamentos</h1>
              <p class="mb-0">
                Ficamos à disposição para agendar no melhor horário para você.
              </p>
            </div>
          </div>
</div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Início</a></li>
            <li class="current">Agendamentos</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Appointmnet Section -->
    <section id="appointmnet" class="appointmnet section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="booking-wrapper">
              <div class="booking-header text-center" data-aos="fade-up" data-aos-delay="200">
                <h2>Agendamento</h2>
                <p>Estamos à disposição para oferecer o melhor atendimento possível.</p>
              </div>

              <div class="booking-steps" data-aos="fade-up" data-aos-delay="300">
                <div class="step">
                  <div class="step-icon">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="step-content">
                    <h4>Data</h4>
                   
                  </div>
                </div>
                <div class="step">
                  <div class="step-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="step-content">
                    <h4>Horário</h4>
                  
                  </div>
                </div>
                <div class="step">
                  <div class="step-icon">
                    <i class="bi bi-person-check"></i>
                  </div>
                  <div class="step-content">
                    <h4>Confirmação</h4>
                  </div>
                </div>
              </div>

              <div class="appointment-form" data-aos="fade-up" data-aos-delay="400">
                <form action="forms/book-appointment.php" method="post" class="php-email-form">
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Nome" required="">
                    </div>
                    <div class="col-md-6">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="col-md-6">
                      <input type="tel" name="phone" class="form-control" placeholder="Telefone" required="">
                    </div>
                    <div class="col-md-6">
                      <select name="department" class="form-select" required="">
                        <option value="">Selecione o profissional</option>
                        <option value="general">Maria</option>
                        <option value="cardiology">Yasmin</option>
                        <option value="neurology">Pedro</option>
                        <option value="orthopedics">Kauan</option>
                        <option value="pediatrics">Rafaela</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <input type="date" name="date" class="form-control" required="">
                    </div>
                    <div class="col-md-6">
                      <select name="doctor" class="form-select" required="">
                        <option value="">Selecione o serviço</option>
                        <option value="dr-sarah-johnson">Banho</option>
                        <option value="dr-michael-chen">Hidratação</option>
                        <option value="dr-emily-davis">Secagem</option>
                        <option value="dr-robert-smith">Escova na pelagem</option>
                        <option value="dr-lisa-brown">Limpeza de ouvidos</option>
                        <option value="dr-david-wilson">Corte de unhas</option>
                        <option value="dr-david-wilson">Banho + Hidratação</option>
                        <option value="dr-david-wilson">Banho + Escova</option>
                        <option value="dr-david-wilson">Banho + Tosa</option>
                        <option value="dr-david-wilson">Banho + Limpeza de ouvidos</option>
                        <option value="dr-david-wilson">Banho + Corte de unhas</option>
                        <option value="dr-david-wilson">Limpeza de ouvidos + Corte de unhas</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <textarea name="message" class="form-control" rows="4"
                        placeholder="Adicione uma observação exemplo: Alergias, etc... (opcional)"></textarea>
                    </div>
                    <div class="col-12">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your appointment has been scheduled. Thank you!</div>
                      <button type="submit" class="btn-book">Agendar</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="emergency-info" data-aos="fade-up" data-aos-delay="500">
                <p><i class="bi bi-exclamation-triangle"></i> Contate-nos no caso de problemas<strong>(19)99999-8888</strong>
              resolvemos na hora!</p>
              </div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Appointmnet Section -->

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
              <p class="brand-description">Será um prazer atendê-lo(a) no horário agendado.</p>

              <div class="contact-info mt-5">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>Rua das Palmeiras, 245 – Jardim Primavera, Campinas – SP, 13045-678</span>
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
          <div class="col-lg-7">
            <div class="footer-nav-wrapper">
              <div class="row">

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

   <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
     <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>