<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sobre nós - Mobipet</title>
  <meta name="description" content="Saiba como o Mobipet conecta tutores e petshops através do monitoramento em tempo real.">
  <meta name="keywords" content="petshop, monitoramento pet, banho e tosa, laravel, mobipet">

  <link href="{{ asset('assets/img/mobipet_icon.png') }}" rel="icon">
  
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">
</head>

<body class="about-page">

  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center">
            <a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a>
          </i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19) 99999-8888</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
          <h1 class="sitename">Mobipet</h1>
        </a>

         <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{route('index')}}" >Início</a></li>
              <li><a href="{{route('sobre')}}" class="active">Sobre nós</a></li>
              <li><a href="{{route('services')}}">Serviços</a></li>
              <li><a href="{{route('devs')}}">Desenvolvedores</a></li>
              @if(session()->has('cliente_id'))
              <li><a href="{{route('pets.create')}}" >Cadastrar Pet</a></li>
                <li><a href="{{route('agendamento')}}">Agendamento</a></li>
                <li>
                    <a href="{{ route('pets.index') }}" >
                        Meus Pets
                    </a>
                </li>
                <li class="dropdown">
                  
                    <a href="{{ route('perfil')}}">
                        <i class="fa-solid fa-user"></i> 
                        {{ session('cliente_nome') }}
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

    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title fw-bold">Como funciona o monitoramento?</h1>
              <p class="lead">
                O Mobipet atua como um assistente digital inteligente para os petshops, permitindo que os tutores acompanhem cada passo do atendimento com total clareza e transparência.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('index') }}">Início</a></li>
            <li class="current">Sobre nós</li>
          </ol>
        </div>
      </nav>
    </div><section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="about-content">
              <h2 class="heading-title fw-bold">A tecnologia que aproxima você do seu pet</h2>
              <p class="lead">
                Sabemos que deixar o seu melhor amigo no petshop exige confiança. Por isso, o nosso sistema foi desenvolvido para acabar com a ansiedade dos tutores e otimizar a rotina das lojas parceiras.
              </p>
              <p class="lead">
                Através da nossa plataforma Mobipet, o estabelecimento atualiza o status dos serviços em tempo real. Assim, diretamente pelo painel ou app, você fica sabendo exatamente o que o seu pet está fazendo no momento, garantindo que ele está sendo tratado com o carinho e o respeito que merece.
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="image-wrapper text-center">
              <img src="{{ asset('assets/img/image2.png') }}" class="imgbanho rounded-4 img-fluid" alt="Tutor acompanhando o status do petshop pelo sistema">
            </div>
          </div>
        </div>

        <div class="values-section" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3 class="heading-title fw-bold">O que você acompanha em tempo real?</h3>
              <p class="section-description">Dividimos os procedimentos para que você saiba o status exato do atendimento.</p>
            </div>
          </div>

          <div class="row g-4 justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
              <div class="value-item text-center">
                <div class="value-icon mb-3">
                  <i class="bi bi-water"></i>
                </div>
                <h4>1. Banho</h4>
                <p class="small text-muted">Limpeza profunda com produtos adequados.</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
              <div class="value-item text-center">
                <div class="value-icon mb-3">
                  <i class="bi bi-droplet"></i>
                </div>
                <h4>2. Hidratação</h4>
                <p class="small text-muted">Tratamento e proteção dos pelos.</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
              <div class="value-item text-center">
                <div class="value-icon mb-3">
                  <i class="bi bi-wind"></i>
                </div>
                <h4>3. Secagem</h4>
                <p class="small text-muted">Uso de sopradores e secadores silenciosos.</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
              <div class="value-item text-center">
                <div class="value-icon mb-3">
                  <i class="fa-solid fa-brush"></i>
                </div>
                <h4>4. Pelagem</h4>
                <p class="small text-muted">Escovação cuidadosa e remoção de nós.</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
              <div class="value-item text-center">
                <div class="value-icon mb-3">
                  <i class="bi bi-ear"></i>
                </div>
                <h4>5. Ouvidos</h4>
                <p class="small text-muted">Higienização e proteção contra umidade.</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="600">
              <div class="value-item text-center">
                <div class="value-icon mb-3">
                  <i class="bi bi-scissors"></i>
                </div>
                <h4>6. Unhas</h4>
                <p class="small text-muted">Corte e lixamento seguro para evitar acidentes.</p>
              </div>
            </div>
          </div></div><div class="certifications-section mt-5" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3 class="heading-title fw-bold">Compromisso com o Bem-Estar</h3>
              <p class="section-description">Apoiado por profissionais do mercado pet que buscam inovação e transparência.</p>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="certification-item">
                <img src="https://cdn.bs9.com.br/upload/dn_arquivo/2024/05/37.jpg" class="img-fluid rounded" alt="Colaborador parceiro do projeto">
              </div>
            </div>
          </div></div></div>
    </section></main>

  <footer id="footer" class="footer position-relative py-4">
    <div class="container">
      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row py-4">
          <div class="col-md-6 d-flex flex-column align-items-start">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center mb-2">
              <h1 class="sitename m-0">Mobipet</h1>
            </a>
            <p class="lead">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!</p>
          </div>
          <div class="col-md-6 d-flex flex-column align-items-md-end align-items-start">
            <p class="mb-1"><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú - SP</span></p>
            <p class="mb-1"><span><i class="bi bi-telephone"></i> (19) 99999-8888</span></p>
            <p class="mb-0"><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
    <i class="bi bi-arrow-up-short"></i>
  </a>

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

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>