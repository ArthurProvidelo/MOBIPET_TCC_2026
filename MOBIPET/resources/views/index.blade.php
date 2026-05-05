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

      <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.webp" alt=""> -->
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
              <li><a href="{{route('departments')}}">Produtos</a></li>
              <li><a href="{{route('perfil')}}">Perfil</a></li>
              <li><a href="{{route('painel-controle')}}">Painel</a></li>
              
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
                  Banho <span class="highlight">&</span> Tosa
                </h1>

                <p class="hero-description text-dark" data-aos="fade-right" data-aos-delay="400">
                Seu pet está sendo monitorado com <span class="laranja"> tecnologia, cuidado, segurança e carinho.</span>
                </p>

                <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                  <div class="stat-item">
                    <h3><span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2"
                        class="purecounter"></span>+</h3>
                    <p>Anos de Experiência</p>
                  </div>
                  <div class="stat-item">
                    <h3><span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2"
                        class="purecounter"></span>+</h3>
                    <p>Funcionaidades</p>
                  </div>
                  <div class="stat-item">
                    <h3><span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2"
                        class="purecounter"></span></h3>
                    <p>Desenvolvedores</p>
                  </div>
                </div>

                <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                  <a href="{{route('agendamento')}}" class="btn btn-primary">Agendar Agora  <i class="fa-solid fa-arrow-right"></i></a>
                  <a href="{{route('sobre')}}" class="btn btn-outline">
                    <i class="fa-solid fa-angles-right"></i>
                    Conhecer nossos Serviços
                  </a>
                </div>

                <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                  <div class="emergency-icon">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="emergency-info">
                    <small>Nosso Contato</small>
                    <strong>(19)99999-8888</strong>
                  </div>
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

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
          <div class="about-content">
            <h2 class="section-heading"><b>Tecnologia e cuidado para o seu pet</b></h2>

            <p class="lead-text">
              Acompanhe em tempo real tudo o que acontece com seu pet durante o banho e tosa.
              Com a MobiPet, você tem mais segurança, transparência e tranquilidade, mesmo à distância.
            </p>

            <p>
              Nosso sistema foi desenvolvido para modernizar o atendimento em petshops, permitindo
              agendamentos digitais, notificações automáticas e monitoramento completo de cada etapa
              do serviço. Aqui, você sabe exatamente como seu pet está sendo cuidado, do início ao fim.
            </p>

            <div class="stats-grid">
              <div class="stat-item">
                <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="100"
                  data-purecounter-duration="1"></div>
                <div class="stat-label">Pets monitorados</div>
              </div>

              <div class="stat-item">
                <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="100"
                  data-purecounter-duration="1"></div>
                <div class="stat-label">% Transparência</div>
              </div>

              <div class="stat-item">
                <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="24"
                  data-purecounter-duration="1"></div>
                <div class="stat-label">Monitoramento contínuo</div>
              </div>
            </div>

            <div class="cta-section">
              <a href="{{route('sobre')}}" class="btn-primary">Ver como funciona</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
          <div class="about-visual">
            <div class="main-image">
              <img src="{{ asset('assets/img/cuidado_tecnologia.png') }}" alt="Pet sendo cuidado" class="img-pet">
            </div>

            <div class="floating-card">
              <div class="card-content">
                <div class="icon">
                  <i class="fa-regular fa-eye"></i>
                </div>
                <div class="card-text">
                  <h4>Monitoramento em tempo real</h4
                  <p>Acompanhe cada etapa do seu pet ao vivo</p>
                </div>
              </div>
            </div>

            <div class="experience-badge">
              <div class="badge-content">
                <span class="years">100%</span>
                <span class="text">Transparência no cuidado</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Home About Section -->

      <!-- Featured Departments Section -->
      <!-- Featured Departments Section -->
<section id="featured-departments" class="featured-departments section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Funcionalidades do Sistema</h2>
    <p>Conheça os principais recursos do Mobipet para monitoramento e gestão de banho e tosa</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-5">

      <div class="col-lg-6">
        <div class="specialty-card">
          <div class="specialty-content">
            <span class="specialty-label">Monitoramento</span>
            <h3>Acompanhamento em Tempo Real</h3>
            <p>Visualize cada etapa do banho e tosa do seu pet com atualizações instantâneas.</p>
            <span><i class="bi bi-check-circle-fill"></i> Atualizações ao vivo</span>
            <span><i class="bi bi-check-circle-fill"></i> Status em tempo real</span>
            <a href="{{route('agendamento')}}" class="specialty-link">Ver monitoramento</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="specialty-card">
          <div class="specialty-content">
            <span class="specialty-label">Tecnologia</span>
            <h3>Notificações Inteligentes</h3>
            <p>Receba alertas automáticos a cada etapa concluída do serviço.</p>
            <span><i class="bi bi-check-circle-fill"></i> Alertas automáticos</span>
            <span><i class="bi bi-check-circle-fill"></i> Comunicação em tempo real</span>
            <a href="{{route('sobre')}}" class="specialty-link">Ver notificações</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="department-highlight">
          <h4>Agendamento Online</h4>
          <p>Marque serviços de forma rápida e prática.</p>
          <ul>
            <li>Interface simples</li>
            <li>Disponibilidade em tempo real</li>
            <li>Confirmação automática</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="department-highlight">
          <h4>Histórico do Pet</h4>
          <p>Acompanhe todos os atendimentos realizados.</p>
          <ul>
            <li>Registro completo</li>
            <li>Consultas rápidas</li>
            <li>Dados organizados</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="department-highlight">
          <h4>Gestão para Petshops</h4>
          <p>Controle completo dos serviços e clientes.</p>
          <ul>
            <li>Controle de serviços</li>
            <li>Gestão de clientes</li>
            <li>Otimização do atendimento</li>
          </ul>
        </div>
      </div>

    </div>
    <br><br><br>

    <div class="banner-funcionamento">
  <h3>Sistema disponível em tempo integral</h3>
  <p>O Mobipet funciona 24 horas para acompanhamento e gestão.</p>
  <a href="https://wa.me/5519989432384?text=Quero%20agendar%20um%20servi%C3%A7o%20para%20meu%20pet%20%F0%9F%90%B6" class="emergency-btn">
    <i class="fa-brands fa-whatsapp"></i> Agendar
  </a>
</div>
</section>

<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">

  <div class="container section-title">
    <h2>Serviços do Mobipet</h2>
    <p>Soluções completas para o monitoramento e gestão de banho e tosa</p>
  </div>

  <div class="container">
    <div class="row g-0">

      <div class="col-lg-8">
        <div class="featured-service-main">
          <div class="service-details">
            <h2>Gestão Inteligente de Banho e Tosa</h2>
            <p>Integramos tecnologia e cuidado para oferecer mais segurança e transparência.</p>
            <a href="{{route('services')}}" class="main-cta">Explorar funcionalidades</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="services-sidebar">

          <div class="service-item">
            <h4>Monitoramento ao Vivo</h4>
            <p>Acompanhe seu pet em tempo real.</p>
          </div>

          <div class="service-item">
            <h4>Agendamento Digital</h4>
            <p>Agende serviços com facilidade.</p>
          </div>

          <div class="service-item">
            <h4>Relatórios e Controle</h4>
            <p>Acesse histórico completo dos atendimentos.</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- Find Section -->
<section class="section">

  <div class="container section-title">
    <h2>Acompanhar Atendimento</h2>
    <p>Consulte o status do seu pet em tempo real</p>
  </div>

  <div class="container text-center">
    <h3>Acompanhe seu pet</h3>
    <p>Digite o nome do pet para visualizar o andamento</p>

    <input type="text" value="Rex" readonly class="form-control mb-3">

    <button class="btn btn-primary">Acompanhar</button>

    <div class="mt-5">
      <h4>Rex</h4>
      <p><i class="fa-solid fa-square-poll-vertical"></i> Status: Banho em andamento</p>
      <p><i class="fa-solid fa-clock"></i> Tempo estimado: 20 minutos</p>
    </div>
  </div>

</section>


<!-- Call To Action -->
<section class="call-to-action section">

  <div class="container text-center">
    <h1>Mais segurança e transparência para o seu pet</h1>
    <p>Acompanhe cada etapa do atendimento com total confiança.</p>

  </div>

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