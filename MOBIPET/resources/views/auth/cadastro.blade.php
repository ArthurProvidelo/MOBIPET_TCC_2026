<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cadastro - Mobipet</title>
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

<body class="inner-page" style="background-color: #f7f9fc;">

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

              @if(session()->has('cliente_id'))
              <li><a href="{{route('pets.create')}}" class="active" >Cadastrar Pet</a></li>
                <li><a href="{{route('agendamento')}}">Agendamento</a></li>
                <li>
                    <a href="{{ route('pets.index') }}" >
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

  <main class="main" style="margin-top: 140px; min-height: 75vh;">
    
    <div class="container py-5" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
                
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-white" style="font-family: 'Roboto', sans-serif;">
                    
                    <div class="card-header text-white text-center py-4 border-0" style="background-color: #497baf !important;">
                      <div class="position-absolute top-50 start-50 translate-middle opacity-10" style="font-size: 7rem; color: #fff; pointer-events: none;">
                        <i class="fa-solid fa-user-plus"></i>
                      </div>
                      <div class="position-relative z-index-1">
                        <h2 class="h3 fw-bold text-white mb-1" style="font-family: 'Montserrat', sans-serif; letter-spacing: -0.5px;">
                          Crie sua Conta
                        </h2>
                        <p class="text-white-50 small mb-0 fw-medium">Venha fazer parte da família Mobipet</p>
                      </div>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        @if($errors->any())
                            <div class="alert alert-danger border-0 shadow-sm rounded-3 p-3 mb-4 small" role="alert">
                                <ul class="mb-0 ps-3">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('cadastro.salvar') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">Nome Completo</label>
                                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="fa-solid fa-user small"></i></span>
                                    <input type="text" name="nome" class="form-control p-2.5 border-light-subtle shadow-none" placeholder="Seu nome completo" value="{{ old('nome') }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">CPF (Apenas números)</label>
                                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                        <span class="input-group-text bg-light border-light-subtle text-muted"><i class="fa-solid fa-id-card small"></i></span>
                                        <input type="text" name="cpf" maxlength="11" class="form-control p-2.5 border-light-subtle shadow-none" placeholder="Ex: 12345678901" value="{{ old('cpf') }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">Telefone</label>
                                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                        <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-telephone"></i></span>
                                        <input type="text" name="telefone" class="form-control p-2.5 border-light-subtle shadow-none" placeholder="(19) 99999-8888" value="{{ old('telefone') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">Endereço Residencial</label>
                                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-geo-alt"></i></span>
                                    <input type="text" name="endereco" class="form-control p-2.5 border-light-subtle shadow-none" placeholder="Rua, Número, Bairro - Cidade" value="{{ old('endereco') }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">E-mail</label>
                                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control p-2.5 border-light-subtle shadow-none" placeholder="seuemail@exemplo.com" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold text-secondary small text-uppercase" style="letter-spacing: 0.5px;">Senha</label>
                                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-lock"></i></span>
                                    <input type="password" name="senha" class="form-control p-2.5 border-light-subtle shadow-none" placeholder="Crie uma senha segura" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2.5 fw-semibold rounded-pill shadow-sm dynamic-btn border-0" style="background-color: #497baf  !important;">
                                <i class="bi bi-check-circle me-1"></i> Finalizar Cadastro
                            </button>

                            <div class="text-center mt-4">
                                <p class="text-secondary small mb-0">Já possui uma conta?</p>
                                <a href="{{ route('login') }}" class="fw-bold text-decoration-none" style="color: #3061cb;">Entrar no sistema</a>
                            </div>

                        </form>

                    </div>
                </div>
                
            </div>
        </div>
    </div>

  </main>

  <style>
    .dynamic-btn {
      transition: transform 0.2s ease, filter 0.2s ease;
    }
    .dynamic-btn:hover {
      transform: translateY(-1px);
      filter: brightness(1.15);
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

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
    <i class="bi bi-arrow-up-short"></i>
  </a>

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