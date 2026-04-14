<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>contato - MobiPet</title>
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
  <link rel="stylesheet" href="assets/css/estilo.css">

  <!-- =======================================================
  * Template Name: Clinic
  * Template URL: https://bootstrapmade.com/clinic-bootstrap-template/
  * Updated: Jul 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="contact-page">
    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

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
          <h1 class="sitename">MobiPet</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{route('index')}}" >Início</a></li>
            <li><a href="{{route('sobre')}}">Sobre nós</a></li>
            <li><a href="{{route('services')}}">Serviços</a></li>
            <li><a href="{{route('devs')}}">Desenvolvedores</a></li></li class="bi bi-chevron-down toggle-dropdown"></i></a></li>
            <li><a href="{{route('agendamento')}}">Agendamento</a></li>
            <li><a href="{{route('contact')}}"class="active">Contato</a></li>
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
              <h1 class="heading-title">Contato</h1>
              <p class="mb-0">
         Estamos sempre prontos para cuidar do seu melhor amigo com carinho e dedicação.
         Fale com a gente pelos nossos canais de atendimento ou venha nos visitar. 
             Será um prazer receber você e seu pet!
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li class="current">Contato</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5">
          <div class="col-lg-5">
            <div class="contact-info-wrapper">
              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="100">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Localização</h3>
                  <p>Rua Bela Vista, 100 - Centro, Tambaú - SP</p>
                </div>
              </div>

              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
                <div class="info-icon">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="info-content">
                  <h3>Email</h3>
                  <p>mobipet@gmail.com</p>
                </div>
              </div>

              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <div class="info-content">
                  <h3>Horário de funcionamento</h3>
                  <p>Seg - Sex: 8:00 - 17:00</p>
                  <p>Sabádo: 8:00 - 14:00</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form-card" data-aos="fade-up" data-aos-delay="200">
              <h2>Mande sua dúvida!</h2>
              <p class="mb-4">
              Tem dúvidas ou quer saber mais? Entre em contato conosco e nossa equipe retornará em breve.</p>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-4">
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required="">
                  </div>

                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                      required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                      required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" id="message" placeholder="Mensagem" rows="6"
                      required=""></textarea>
                  </div>

                  <div class="col-12">
                    <div class="loading">Carregando...</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Sua mensagem foi enviada, em breve retornaremos!</div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-submit">Enviar</button>
                  </div>
                </div>
              </form>
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

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-start">

          

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

            <div class="col-lg-6">
              <div class="copyright">
                <p>© <span class="sitename">MobiPet</span>.</p>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="legal-links">
                <a href="#!">Privacy Policy</a>
                <a href="#!">Terms of Service</a>
                <a href="#!">Cookie Policy</a>
                
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

</html>