  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Página inicial</title>
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
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">
    

  </head>

  <body class="index-page">

    <header id="header" class="header fixed-top">

      <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                href="mailto:contact@example.com">mobipet@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+19 99999-8888</span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div><!-- End Top Bar -->

      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
      </a>

      <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
          <a href="{{route('index')}}" class="logo d-flex align-items-center">
            <h1 class="sitename">Mobipet</h1>
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{route('index')}}" class="active">Início</a></li>
              <li><a href="{{route('sobre')}}">Sobre nós</a></li>
              <li><a href="{{route('services')}}">Serviços</a></li>
              <li><a href="{{route('devs')}}">Desenvolvedores</a></li>
              <li><a href="{{route('agendamento')}}">Agendamento</a></li>
              <li><a href="{{route('contact')}}">Contato</a></li>
              <li><a href="{{route('perfil')}}">Perfil</a></li>
              
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

        </div>

      </div>

    </header>

    <main class="main">

      <!-- Hero Section -->
      <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero-content">
                

                <h1 class="banho-tosa" data-aos="fade-right" data-aos-delay="300">
                  Monitoramento <br><span class="highlight">&</span> Qualidade
                </h1>

                <p class="hero-description text-dark fw-bold" data-aos="fade-right" data-aos-delay="400">
                Agende banho, tosa e consultas em segundos, <span class="laranja fw-bold"> e acompanhe tudo em tempo real pelo app.</span>
                </p>

                <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                  <div class="stat-item">
                    <h3><span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2.5"
                        class="purecounter"></span>+</h3>
                    <p>Funcionaidades</p>
                  </div>
                  <div class="stat-item">
                    <h3><span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2"
                        class="purecounter"></span></h3>
                    <p>Desenvolvedores</p>
                  </div>
                  <div class="stat-item">
                    <h3><span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1.4"
                        class="purecounter"></span></h3>
                    <p>Anos de Experiência</p>
                  </div>
                </div>

                <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                  <a href="{{route('agendamento')}}" class="btn btn-primary">Agendar Agora  <i class="fa-solid fa-arrow-right"></i></a>
                  <a href="{{route('sobre')}}" class="btn btn-outline">
                    <i class="fa-solid fa-angles-right"></i>
                    Conhecer nossos Serviços
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="hero-visual" data-aos="fade-left" data-aos-delay="400" style="margin-top: 100px">
                <div class="main-image">
                  <img src="{{asset('assets/img/pet_sendo_cuidado.png')}}" alt="pet recebendo cuidados" class="img-chowchow">
                  
                <div class="background-elements">
                  <div class="element element-1"></div>
                  <div class="element element-2"></div>
                  <div class="element element-3"></div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section><!-- /Hero Section -->

      <!-- Home About Section -->
      <section id="home-about" class="home-about section">
        <div class="container">
          <div class="row align-items-center gy-5">

            <!-- TEXTO -->
            <div class="col-lg-12">
              <div class="about-content">
                <h2 class="section-heading fw-bold">
                  Tecnologia e cuidado para o seu pet
                </h2>

                <p class="lead-text">
                  Acompanhe em tempo real tudo o que acontece com seu pet
                  durante as etapas do petshop com transparência e segurança.
                </p>

                <p>
                  O Mobipet moderniza o atendimento dos petshops através
                  de monitoramento inteligente, notificações automáticas
                  e agendamento digital.
                </p>

                <!-- ESTATÍSTICAS -->
                <div class="stats-grid">

                  <div class="stat-item">
                    <div class="stat-number">100+</div>
                    <div class="stat-label">
                      Pets Monitorados
                    </div>
                  </div>

                  <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">
                      Transparência
                    </div>
                  </div>

                  <div class="stat-item">
                    <div class="stat-number">24h</div>
                    <div class="stat-label">
                      Sistema Online
                    </div>
                  </div>

                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

      </section>
 <!-- /Home About Section -->

      <!-- Featured Departments Section -->

<!-- BENEFÍCIOS -->
<section class="py-5 bg-light">

  <div class="container">

    <div class="text-center mb-5">

      <h2 class="fw-bold display-5">
        Tudo que seu petshop precisa
      </h2>

      <p class="text-secondary">
        Tecnologia inteligente para transformar a experiência do banho e tosa.
      </p>

    </div>

    <div class="row g-4">

      <!-- CARD -->
      <div class="col-lg-4">

        <div class="feature-card h-100">

          <div class="feature-icon bg-primary">
            <i class="bi bi-camera-video-fill"></i>
          </div>

          <h4 class="fw-bold mt-4">
            Monitoramento ao vivo
          </h4>

          <p class="text-secondary">
            Acompanhe cada etapa do atendimento do seu pet em tempo real,
            garantindo mais transparência, segurança e tranquilidade.
          </p>

        </div>

      </div>

      <!-- CARD -->
      <div class="col-lg-4">

        <div class="feature-card h-100">

          <div class="feature-icon bg-success">
            <i class="bi bi-calendar-check-fill"></i>
          </div>

          <h4 class="fw-bold mt-4">
            Agendamento Inteligente
          </h4>

         <p class="text-secondary">
            Organize agendamentos, horários e serviços de forma prática,
            evitando atrasos, conflitos e melhorando a rotina do petshop.
        </p>

        </div>

      </div>

      <!-- CARD -->
      <div class="col-lg-4">

        <div class="feature-card h-100">

          <div class="feature-icon bg-dark">
            <i class="bi bi-graph-up-arrow"></i>
          </div>

          <h4 class="fw-bold mt-4">
            Gestão Completa
          </h4>

          <p class="text-secondary">
            Gerencie clientes, pets, agendamentos e todo o fluxo de atendimento
            do petshop em um único sistema.
          </p>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- CTA -->
<section class="cta-section py-5">

  <div class="container">

    <div class="cta-card text-center">

      <h2 class="display-5 fw-bold mb-4 text-white">
        Mais segurança para o tutor.
        Mais organização para o petshop.
      </h2>

     <p class="lead text-light mb-5">
        Transforme a experiência do seu amigo no petshop com tecnologia.
      </p>

      <a href="https://wa.me/5519999999999"
         class="btn btn-success btn-lg rounded-pill px-5 py-3 shadow">
         <i class="fa-brands fa-whatsapp"></i>
         Agendar pelo WhatsApp
      </a>
    </div>
  </div>

</section>

<!-- CSS -->
<style>

body{
  background: #f7f9fc;
}

.hero-modern{
  background:
  radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
  radial-gradient(circle at bottom left, #dcfce7 0%, transparent 30%);
}

.dashboard-card{
  border: 1px solid #e5e7eb;
  backdrop-filter: blur(10px);
}

.online-badge{
  position: absolute;
  top: 20px;
  right: 20px;
  background: #22c55e;
  color: white;
  padding: 10px 18px;
  border-radius: 999px;
  font-size: 14px;
  font-weight: 600;
}

.timeline-area{
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.timeline-item{
  display: flex;
  align-items: center;
  gap: 15px;
  color: #6b7280;
  font-weight: 500;
}

.timeline-item i{
  font-size: 22px;
}

.timeline-item.completed{
  color: #22c55e;
}

.timeline-item.active{
  color: #2563eb;
}

.tempo-card{
  background: linear-gradient(135deg,#2563eb,#1d4ed8);
  border-radius: 30px;
  padding: 25px;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.feature-card{
  background: white;
  border-radius: 35px;
  padding: 40px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.08);
  transition: 0.4s;
}

.feature-card:hover{
  transform: translateY(-12px);
}

.feature-icon{
  width: 90px;
  height: 90px;
  border-radius: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.feature-icon i{
  color: white;
  font-size: 35px;
}

.cta-card{
  background: linear-gradient(135deg,#111827,#1f2937);
  padding: 80px 40px;
  border-radius: 40px;
}

.progress{
  border-radius: 20px;
}

.progress-bar{
  background: linear-gradient(90deg,#2563eb,#3b82f6);
}

</style>

   <footer id="footer" class="footer-16 footer position-relative">


    <div class="container">


      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-6 align-items-start">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
          <h1 class="sitename">Mobipet</h1>
        </a>
            <p class="brand-description">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!</p>
          </div>
          <div class="col-md-6 align-items-end">
            <p><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú - SP</span></p>
            <p><span><i class="bi bi-telephone"></i> (19)9999-8888</span></p>
            <p><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
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

</section>

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