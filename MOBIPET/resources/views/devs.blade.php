<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Desenvolvedores</title>
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


</head>

<body class="doctors-page">

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
            <li><a href="{{route('devs')}}" class="active" >Desenvolvedores</a></li></li class="bi bi-chevron-down toggle-dropdown"></i></a></li>
            <li><a href="{{route('agendamento')}}" >Agendamento</a></li>
            <li><a href="{{route('contact')}}">Contato</a></li>
           <li><a href="{{route('departments')}}">Departamento</a></li>
            <li><a href="">Perfil</a></li>
                  
            </li>
              </ul>
            </li>
            
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
               A página de desenvolvedores apresenta a equipe responsável pela criação e manutenção do site. Formada por alunos do curso do SENAI há dois anos, 
               o grupo reúne conhecimentos técnicos em programação, design e desenvolvimento web. Ao longo desse período, os estudantes vêm adquirindo experiência prática, 
               trabalhando de forma colaborativa e aplicando boas práticas para entregar soluções eficientes e inovadoras.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li class="current">Desenvolvedores</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="300">

        <div class="row gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="300">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Marcus Johnson" class="img-fluid">
                <div class="doctor-overlay">
                </div>
              </div>
              <div class="doctor-content">
                <h4>Arthur Barbosa</h4>
                <span class="specialty">Desenvolvedor Front-end</span>
                <p>
                Responsável pela interface do usuário, focando em usabilidade, design e 
                experiência visual do sistema.</p>
                <div class="doctor-meta">
                  <div class="experience">
                    <i class="bi bi-award"></i>
                  </div>
                </div>
                <a href="" class="btn-appointment">SESI/SENAI</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

            <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="300">

        <div class="row gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Marcus Johnson" class="img-fluid">
                <div class="doctor-overlay">
                </div>
              </div>
              <div class="doctor-content">
                <h4>Arthur Providello</h4>
                <span class="specialty">Desenvolvedor Full Stack</span>
                <p>
               Trabalha tanto no front-end quanto no back-end, contribuindo em diversas etapas do desenvolvimento.</p>
                <div class="doctor-meta">
                  <div class="experience">
                    <i class="bi bi-award"></i>
                  </div>
                </div>
                <a href="" class="btn-appointment">SESI/SENAI</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

       
         <section id="doctors" class="doctors section">


      <div class="container" data-aos="fade-up" data-aos-delay="300">

        <div class="row gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Marcus Johnson" class="img-fluid">
                <div class="doctor-overlay">
                </div>
              </div>
              <div class="doctor-content">
                <h4>Kaila Silva</h4>
                <span class="specialty">Desenvolvedor Back-end</span>
                <p>
              Atua na lógica do sistema, integração com banco de dados e funcionamento interno da aplicação.</p>
                <div class="doctor-meta">
                  <div class="experience">
                    <i class="bi bi-award"></i>
                  </div>
                </div>
                <a href="" class="btn-appointment">SESI/SENAI</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->


 <section id="doctors" class="doctors section">



      <div class="container" data-aos="fade-up" data-aos-delay="300">

        <div class="row gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Marcus Johnson" class="img-fluid">
                <div class="doctor-overlay">
                </div>
              </div>
              <div class="doctor-content">
                <h4>Kauan Ferreira</h4>
                <span class="specialty">Desenvolvedor Front-end</span>
                <p>
              Responsável pela interface do usuário, focando em usabilidade, design e experiência visual do sistema.</p>
                <div class="doctor-meta">
                  <div class="experience">
                    <i class="bi bi-award"></i>
                  </div>
                </div>
                <a href="" class="btn-appointment">SESI/SENAI</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->



           <section id="doctors" class="doctors section">


  <div class="container" data-aos="fade-up" data-aos-delay="300">

        <div class="row gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Marcus Johnson" class="img-fluid">
                <div class="doctor-overlay">
                </div>
              </div>
              <div class="doctor-content">
                <h4>Lorena Thomaz</h4>
                <span class="specialty">Desenvolvedor Front-end</span>
                <p>
              Responsável pela interface do usuário, focando em usabilidade, design e experiência visual do sistema.</p>
                <div class="doctor-meta">
                  <div class="experience">
                    <i class="bi bi-award"></i>
                  </div>
                </div>
                <a href="" class="btn-appointment">SESI/SENAI</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->


               <section id="doctors" class="doctors section">



           <div class="container" data-aos="fade-up" data-aos-delay="300">

        <div class="row gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Marcus Johnson" class="img-fluid">
                <div class="doctor-overlay">
                </div>
              </div>
              <div class="doctor-content">
                <h4>Maria Fernanda Galdino </h4>
                <span class="specialty">Desenvolvedor Back-end</span>
                <p>
           Atua na lógica do sistema, integração com banco de dados e funcionamento interno da aplicação.</p>
                <div class="doctor-meta">
                  <div class="experience">
                    <i class="bi bi-award"></i>
                  </div>
                </div>
                <a href="" class="btn-appointment">SESI/SENAI</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

         

        </div>

      </div>

    </section><!-- /Doctors Section -->

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
                  <span>(19)9999-8888</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>mobipet@gmail.com</span>
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