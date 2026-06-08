<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Desenvolvedores</title>
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


<body class="doctors-page">


  <header id="header" class="header fixed-top">


    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="mailto:contact@example.com">mobipet@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19)98943-2384</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->


    <div class="branding d-flex align-items-cente">


      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
          <h1 class="sitename">Mobipet</h1>
        </a>


        <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{route('index')}}" >Início</a></li>
              <li><a href="{{route('sobre')}}">Sobre nós</a></li>
              <li><a href="{{route('services')}}">Serviços</a></li>
              <li><a href="{{route('devs')}}">Desenvolvedores</a></li>
              
              @if(session()->has('cliente_id'))
              <li><a href="{{route('pets.create')}}" >Cadastrar Pet</a></li>
                <li><a href="{{route('agendamento')}}">Agendamento</a></li>
                <li>
                    <a href="{{ route('pets.index') }}" class="active">
                        Meus Pets
                    </a>
                </li>
                <li class="dropdown">
                  
                    <a href="{{ route('perfil')}}">
                        <i class="fa-solid fa-user"></i> 
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}">
                       Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                </li>

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
            <li><a href="index.html">Inicio</a></li>
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
              <img src="assets/img/arthurbarbosa.png"
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
            <p><span><i class="bi bi-telephone"></i> (19)98943-2384</span></p>
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

</body>


</html>
