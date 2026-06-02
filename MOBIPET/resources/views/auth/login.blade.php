<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - Mobipet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets/img/mobipet_icon.png" rel="icon">
  
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body class="inner-page">

  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19)99999-8888</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
          <h1 class="sitename">Mobipet</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{route('index')}}">Início</a></li>
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

  <main class="main" style="margin-top: 120px;">
    
    <div class="container py-5" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-md-5">
                
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden" style="font-family: 'Roboto', sans-serif;">
                    
                    <div class="card-body p-4 p-md-5">

                        <h2 class="text-center mb-4 fw-bold text-dark" style="font-family: 'Montserrat', sans-serif;">
                            Login
                        </h2>

                        @if(session('erro'))
                            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-4 p-3 mb-4" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('erro') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login.autenticar') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted rounded-start-3"><i class="bi bi-envelope"></i></span>
                                    <input type="email" 
                                           name="email" 
                                           class="form-control rounded-end-3 p-2.5 border-light-subtle shadow-none" 
                                           placeholder="seuemail@exemplo.com" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted rounded-start-3"><i class="bi bi-lock"></i></span>
                                    <input type="password" 
                                           name="senha" 
                                           class="form-control rounded-end-3 p-2.5 border-light-subtle shadow-none" 
                                           placeholder="Sua senha" required>
                                </div>
                            </div>

                            <button class="btn btn-primary w-100 py-2.5 fw-semibold rounded-pill shadow-sm transition-all" style="background: linear-gradient(90deg, #3061cb 0%, #031437 100%) !important; border: 0;">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
                            </button>

                            <div class="text-center mt-4">
                                <p class="text-secondary small mb-0">Não tem uma conta?</p>
                                <a href="{{ route('cadastro') }}" class="fw-bold text-decoration-none" style="color: #3061cb;">Cadastre-se aqui</a>
                            </div>

                            <button class="btn btn-primary w-100 py-2.5 fw-semibold rounded-pill shadow-sm transition-all">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
                            </button>

                        </form>

                    </div>

                </div>
                
            </div>
        </div>
    </div>

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
            <p><span><i class="bi bi-telephone"></i> (19)9999-8888</span></p>
            <p><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
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

  <a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>