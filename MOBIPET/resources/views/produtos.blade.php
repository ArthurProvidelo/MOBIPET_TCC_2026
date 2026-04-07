<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mobipet</title>
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



<body class="department-details-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="mailto:contact@example.com">mobipet@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19) 9999-8888</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#!" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#!" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
            <li><a href="index.html">Início</a></li>
            <li><a href="about.html" >Sobre-nós</a></li>
            <li><a href="services.html">Serviços</a></li>
            <li><a href="doctors.html">Desenvolvedores</a></li class="bi bi-chevron-down toggle-dropdown"></i></a></li>
            </li>
            <li><a href="#">Agendamento</a></li>
            <li><a href="contact.html">Contato</a></li>
            <li><a href="{{route('produtos')}}" class="active">Produtos</a></li>
            <li><a href="#">Perfil</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

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
              <h1 class="heading-title">Produtos</h1>
              <p class="mb-0">
                Produtos seguros para uma rotina mais saudável.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li class="current">Produtos</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Department Details Section -->
    <section id="department-details" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-xl-6 col-lg-7">
            <div class="department-hero" data-aos="fade-right" data-aos-delay="200">
              <div class="badge-wrap">
                <span class="specialty-badge">Neurology</span>
              </div>
              <h1 class="department-title">Advanced Neurological Care</h1>
              <p class="department-intro">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                cubilia curae. Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>

              <div class="key-highlights">
                <div class="highlight-item">
                  <span class="highlight-number">24/7</span>
                  <span class="highlight-text">Emergency Neurology</span>
                </div>
                <div class="highlight-item">
                  <span class="highlight-number">15+</span>
                  <span class="highlight-text">Specialist Neurologists</span>
                </div>
                <div class="highlight-item">
                  <span class="highlight-number">95%</span>
                  <span class="highlight-text">Patient Satisfaction</span>
                </div>
              </div>

              <div class="action-group">
                <a href="appointment.html" class="btn-primary">Schedule Consultation</a>
                <a href="services.html" class="btn-secondary">
                  <span>View All Services</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-lg-5">
            <div class="department-visual" data-aos="fade-left" data-aos-delay="300">
              <div class="image-container">
                <img src="{{asset('assets/img/produtos_img_deitada.png')}}" alt="produtos e pets" class="img-fluid primary-image">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="services-overview" data-aos="fade-up" data-aos-delay="400">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="overview-header">
                <h3>Our Neurological Services</h3>
                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget
                  tincidunt nibh pulvinar a.</p>
              </div>
            </div>
          </div>

          <div class="row gy-4 services-grid">
            <div class="col-lg-4 col-md-6 pl-2" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item card-informacao">
                <div class="service-icon">
                  <i class="fas fa-dog"></i>
                </div>
                <h4>Rações</h4>
                <p>Cuidamos da saúde do seu pet com rações premium e natural.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="550">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fas fa-bone"></i>
                </div>
                <h4>Petiscos</h4>
                <p>Mais que um agrado, um cuidado com a saúde do seu pet.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fas fa-shapes"></i>
                </div>
                <h4>Brinquedos</h4>
                <p>Diversão garantida para o bem-estar do seu pet.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="650">
              <div class="service-item card-informacao">
                <div class="service-icon">
                  <i class="fas fa-paw"></i>
                </div>
                <h4>Acessórios</h4>
                <p>Estilo, conforto e praticidade para o seu pet.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fas fa-pump-soap"></i>
                </div>
                <h4>Higiene</h4>
                <p>Cuidado e limpeza com produtos de alta qualidade.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="750">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fas fa-bath"></i>
                </div>
                <h4>Banho e tosa </h4>
                <p>Beleza, cuidado e bem-estar em cada atendimento.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="expert-care-section" data-aos="fade-up" data-aos-delay="800">
          <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="900">
              <div class="expert-image">
                <img src="{{ asset('assets/img/produtos_img_empe.png') }}" alt="pets deitados na caminha e com produtos" class="img-fluid">
              </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="900">
              <div class="expert-content">
                <h3>Leading Neurological Expertise</h3>
                <p class="lead">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor
                  lectus nibh donec rutrum congue leo eget malesuada.</p>

                <div class="expertise-list">
                  <div class="expertise-item">
                    <i class="bi bi-check2"></i>
                    <span>Board-certified neurologists and neurosurgeons</span>
                  </div>
                  <div class="expertise-item">
                    <i class="bi bi-check2"></i>
                    <span>State-of-the-art diagnostic equipment and facilities</span>
                  </div>
                  <div class="expertise-item">
                    <i class="bi bi-check2"></i>
                    <span>Comprehensive care from diagnosis to rehabilitation</span>
                  </div>
                  <div class="expertise-item">
                    <i class="bi bi-check2"></i>
                    <span>Personalized treatment plans for every patient</span>
                  </div>
                </div>

                <div class="contact-info">
                  <div class="contact-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                      <span class="contact-label">Numero de Emergência</span>
                      <span class="contact-value">(19) 9999-8888</span>
                    </div>
                  </div>
                  <div class="contact-item">
                    <i class="bi bi-calendar-check"></i>
                    <div>
                      <span class="contact-label">Appointments</span>
                      <span class="contact-value">Segunda-Sexta: 7:00 AM - 5:00 PM</span>
                      <span class="contact-value">  Sabado: 7:00 AM - 12:00 PM</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Department Details Section -->

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
                  <span>(19) 9999-8888</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>Mobipet@gmail.com</span>
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

            <div class="col-lg-6">
              <div class="copyright">
                <p>© <span class="sitename">Mobipet</span>. All rights reserved.</p>
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

</body>

</html>