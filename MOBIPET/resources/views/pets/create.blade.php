<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cadastrar Pet | Mobipet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS Files -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">
</head>

<body class="index-page">

  <!-- =========================================================
  HEADER
  ========================================================= -->
  <header id="header" class="header fixed-top">
    <!-- Top Bar -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Branding -->
    <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <h1 class="sitename">Mobipet</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('index') }}">Início</a></li>
                    <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
                    <li><a href="{{ route('services') }}">Serviços</a></li>
                    <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

                    {{-- CLIENTE --}}
                    @if(session()->has('id') && session('nivel_acesso') == 'USUARIO')
                        <li><a href="{{ route('pets.create') }}" class="active">Cadastrar Pet</a></li>
                        <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                        <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
                        <li><a href="{{ route('perfil') }}"><i class="fa-solid fa-user"></i></a></li>
                        <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

                    {{-- FUNCIONÁRIO --}}
                    @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                        <li><a href="{{ route('painel-controle') }}">Painel</a></li>
                        <li><a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a></li>
                        <li><a href="{{ route('perfil') }}">Perfil</a></li>
                        <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                    @else
                        <li><a href="{{ route('login') }}">Entrar</a></li>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
  </header>

  <!-- =========================================================
  MAIN CONTENT
  ========================================================= -->
  <main class="main">
    <section class="agendamento-section">
      <div class="container">

        <div class="hero-agendamento text-center" data-aos="fade-up">
          <h1 class="hero-title">Adicionar Companheiro</h1>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9 col-md-11">
            <div class="card agendamento-card" data-aos="zoom-in" data-aos-delay="200">

              <!-- Card Header -->
              <div class="card-header">
                <div class="d-flex align-items-center gap-3">
                  <div class="header-icon">
                    <i class="fa-solid fa-paw"></i>
                  </div>
                  <div>
                    <h3 class="text-white">Novo Pet</h3>
                    <p class="mb-0 text-metod">Preencha os campos abaixo para concluir o registro.</p>
                  </div>
                </div>
              </div>

              <!-- Card Body -->
              <div class="card-body">
                <form action="{{ route('pets.store') }}" method="POST">
                  @csrf

                  <!-- SEÇÃO: IDENTIFICAÇÃO -->
                  <div class="section-title mt-2">
                    <i class="fa-solid fa-file-signature"></i>
                    <span>Informações Básicas</span>
                  </div>

                  <div class="mb-4">
                    <label>Nome do Pet</label>
                    <input type="text" name="nome" class="form-control" placeholder="Ex: Thor, Mel, Max..." value="{{ old('nome') }}" required>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label>Espécie</label>
                      <input type="text" name="especie" class="form-control" placeholder="Ex: Cão, Gato, Coelho..." value="{{ old('especie') }}" required>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label>Raça</label>
                      <input type="text" name="raca" class="form-control" placeholder="Ex: Poodle, Vira-lata, Persa..." value="{{ old('raca') }}" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label>Porte</label>
                      <select name="porte" class="form-select form-control">
                        <option {{ old('porte') == 'Pequeno' ? 'selected' : '' }}>Pequeno</option>
                        <option {{ old('porte') == 'Médio' ? 'selected' : '' }}>Médio</option>
                        <option {{ old('porte') == 'Grande' ? 'selected' : '' }}>Grande</option>
                      </select>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label>Data de Nascimento</label>
                      <input type="date" name="data_nascimento" class="form-control" max="{{ date('Y-m-d') }}" value="{{ old('data_nascimento') }}" required>
                    </div>
                  </div>

                  <hr class="my-5 opacity-25">

                  <!-- AÇÕES / BOTÕES -->
                  <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-md-4 order-2 order-md-1">
                      <a href="{{ route('pets.index') }}" class="btn-voltar d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-solid fa-arrow-left"></i> Voltar
                      </a>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                      <button type="submit" class="btn btn-primary btn-agendar w-100 mt-0">
                        <i class="fa-solid fa-circle-check me-2"></i>Concluir Cadastro
                      </button>
                    </div>
                  </div>

                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
  </main>

  <!-- =========================================================
  FOOTER
  ========================================================= -->
  <style>
    /* ---------- Footer criativo ---------- */
    .footer-16 {
        position: relative;
        overflow: visible;
        padding-bottom: 90px;
    }

    .footer-16 .footer-main {
        margin-bottom: 0;
    }

    .footer-16::before {
        content: "";
        position: absolute;
        top: -1px;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--accent-color), #22c55e, var(--accent-color), transparent);
        background-size: 200% 100%;
        animation: footerGradientMove 6s linear infinite;
    }

    @keyframes footerGradientMove {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }

    .footer-badge {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--accent-color), #1d4ed8);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(23, 92, 221, 0.35);
        z-index: 2;
        transition: transform 0.4s ease;
    }

    .footer-badge i {
        color: #fff;
        font-size: 26px;
    }

    .footer-badge:hover {
        transform: translate(-50%, -50%) rotate(-15deg) scale(1.1);
    }

    .footer-16 .brand-section {
        max-width: 380px;
    }

    .footer-status {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        color: #16a34a;
        background: rgba(34, 197, 94, 0.12);
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 22px;
    }

    .footer-status .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #22c55e;
        animation: statusPulse 2s infinite;
    }

    @keyframes statusPulse {
        0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.5); }
        70% { box-shadow: 0 0 0 8px rgba(34, 197, 94, 0); }
        100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }

    .footer-16 .contact-info {
        margin-top: 24px;
    }

    .footer-16 .footer-social .social-link.whatsapp i {
        color: #25d366;
    }

    .footer-16 .footer-social .social-link.instagram i {
        background: linear-gradient(45deg, #f9ce34, #ee2a7b, #6228d7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .footer-16 .footer-bottom .legal-links .credits i {
        color: #ef4444;
        margin: 0 2px;
    }

    .footer-16 .footer-bottom .copyright p {
        color: rgba(255, 255, 255, 0.85);
    }

    .footer-16 .footer-bottom .copyright p .sitename {
        color: #fff;
    }

    .footer-16 .footer-bottom .legal-links a {
        color: rgba(255, 255, 255, 0.85);
    }

    .footer-16 .footer-bottom .legal-links a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .footer-16 .footer-bottom .legal-links .credits {
        color: rgba(255, 255, 255, 0.7);
        border-left-color: rgba(255, 255, 255, 0.3);
    }

    .footer-16 .footer-bottom .legal-links .credits a {
        color: #fff;
        font-weight: 600;
    }
  </style>

  <footer id="footer" class="footer-16 footer position-relative">

    <div class="footer-badge">
        <i class="fa-solid fa-paw"></i>
    </div>

    <div class="container">

      <div class="footer-main row gy-5 justify-content-between align-items-start" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-5 brand-section">

          <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <h1 class="sitename">Mobipet</h1>
          </a>

          <div class="contact-info">
            <div class="contact-item">
              <i class="bi bi-geo-alt"></i>
              <span>Rua Bela Vista, 100 - Centro, Tambaú - SP</span>
            </div>
            <div class="contact-item">
              <i class="bi bi-telephone"></i>
              <span>(19) 98943-2384</span>
            </div>
            <div class="contact-item">
              <i class="bi bi-envelope"></i>
              <span>mobipet@gmail.com</span>
            </div>
          </div>

        </div>

        <div class="col-lg-6 footer-nav-wrapper">
          <div class="row">

            <div class="col-6 nav-column">
              <h6>Navegação</h6>
              <nav class="footer-nav">
                <a href="{{ route('index') }}">Início</a>
                <a href="{{ route('sobre') }}">Sobre nós</a>
                <a href="{{ route('services') }}">Serviços</a>
                <a href="{{ route('devs') }}">Desenvolvedores</a>
              </nav>
            </div>

            <div class="col-6 nav-column">
              <h6>Minha Conta</h6>
              <nav class="footer-nav">
                @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                  <a href="{{ route('agendamento') }}">Agendamento</a>
                  <a href="{{ route('pets.index') }}">Meus Pets</a>
                  <a href="{{ route('pets.create') }}">Cadastrar Pet</a>
                  <a href="{{ route('perfil') }}">Meu Perfil</a>
                @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                  <a href="{{ route('painel-controle') }}">Painel</a>
                  <a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a>
                  <a href="{{ route('perfil') }}">Perfil</a>
                @else
                  <a href="{{ route('login') }}">Entrar</a>
                  <a href="{{ route('cadastro') }}">Criar conta</a>
                @endif
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- =========================================================
  CSS INTERNO (Padrão Identidade Mobipet)
  ========================================================= -->
  <style>
    body {
      background: #f7f9fc;
      font-family: 'Montserrat', sans-serif;
    }

    .agendamento-section {
      padding: 180px 0 100px;
      background:
      radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
      radial-gradient(circle at bottom left, #dcfce7 0%, transparent 30%);
      min-height: 100vh;
    }

    .hero-agendamento {
      margin-bottom: 50px;
    }

    .hero-title {
      font-size: 52px;
      font-weight: 800;
      color: #111827;
      margin-bottom: 20px;
      letter-spacing: -1px;
    }

    .hero-subtitle {
      font-size: 18px;
      color: #6b7280;
      max-width: 650px;
      margin: auto;
      line-height: 1.6;
    }

    .agendamento-card {
      border: none;
      border-radius: 35px;
      overflow: hidden;
      background: white;
      box-shadow: 0 15px 50px rgba(0,0,0,0.06);
    }

    .agendamento-card .card-header {
      background: linear-gradient(135deg, #2563eb, #1d4ed8);
      padding: 35px;
      border: none;
      color: white;
    }

    .header-icon {
      width: 65px;
      height: 65px;
      background: rgba(255, 255, 255, 0.15);
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header-icon i {
      font-size: 26px;
      color: white;
    }

    .card-header h3 {
      font-size: 26px;
      font-weight: 700;
      margin-bottom: 4px;
    }

    .text-metod {
      color: rgba(255, 255, 255, 0.8) !important;
      font-size: 14px;
    }

    .card-body {
      padding: 50px;
    }

    .section-title {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 30px;
      font-size: 20px;
      font-weight: 700;
      color: #111827;
    }

    .section-title i {
      width: 42px;
      height: 42px;
      background: linear-gradient(135deg, #2563eb, #3b82f6);
      color: white;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
    }

    label {
      font-weight: 600;
      margin-bottom: 10px;
      color: #374151;
      font-size: 15px;
    }

    .form-control, .form-select {
      height: 58px;
      border-radius: 18px;
      border: 1px solid #d1d5db;
      background-color: #f9fafb;
      padding: 15px 20px;
      font-size: 15px;
      transition: 0.3s;
      box-shadow: none !important;
    }

    .form-control:focus, .form-select:focus {
      border-color: #2563eb;
      background-color: #fff;
      box-shadow: 0 0 0 5px rgba(37, 99, 235, 0.12) !important;
    }

    .btn-agendar {
      height: 60px;
      border-radius: 18px;
      border: none;
      font-size: 16px;
      font-weight: 700;
      background: linear-gradient(135deg, #2563eb, #1d4ed8);
      color: white;
      transition: 0.4s;
    }

    .btn-agendar:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 25px rgba(37, 99, 235, 0.25);
    }

    .btn-voltar {
      height: 60px;
      border-radius: 18px;
      border: 1px solid #d1d5db;
      font-size: 16px;
      font-weight: 600;
      color: #4b5563;
      background: #fff;
      transition: 0.3s;
      text-decoration: none;
    }

    .btn-voltar:hover {
      background: #f3f4f6;
      color: #1f2937;
    }

    @media(max-width: 992px) {
      .hero-title { font-size: 38px; }
      .card-body { padding: 35px; }
    }

    @media(max-width: 768px) {
      .agendamento-section { padding-top: 150px; }
      .hero-title { font-size: 32px; }
      .hero-subtitle { font-size: 16px; }
      .card-body { padding: 25px; }
    }
  </style>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true
            });
        }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if ($errors->any())
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Erro',
        text: '{{ implode('|', $errors->all()) }}'
      });
    </script>
  @endif

    @include('partials.logout-confirm')

</body>

</html>