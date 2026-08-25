<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agendamento | Mobipet</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <!-- =========================================================
  HEADER
  ========================================================= -->

  <header id="header" class="header fixed-top">

    <!-- Top Bar -->
   

    <!-- Scroll Top -->
    <a href="#"
       id="scroll-top"
       class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
       style="width: 50px;
              height: 50px;
              position: fixed;
              bottom: 20px;
              right: 20px;
              z-index: 999;
              font-size: 24px;">

        <i class="bi bi-arrow-up-short"></i>

    </a>

    <!-- Branding -->
    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}"
               class="logo d-flex align-items-center">

                <h1 class="sitename">
                    Mobipet
                </h1>

            </a>

            <nav id="navmenu" class="navmenu">

                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            Início
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('sobre') }}">
                            Sobre nós
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}">
                            Serviços
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('devs') }}">
                            Desenvolvedores
                        </a>
                    </li>

                    {{-- CLIENTE --}}
                    @if(session()->has('id') && session('nivel_acesso') == 'USUARIO')

                        <li>
                            <a href="{{ route('pets.create') }}">
                                Cadastrar Pet
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('agendamento') }}" class="active">
                                Agendamento
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('pets.index') }}">
                                Meus Pets
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('perfil') }}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                Sair
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                    {{-- FUNCIONÁRIO --}}
                    @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')

                        <li>
                            <a href="{{ route('painel-controle') }}">
                                Painel
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('funcionario.agendamentos') }}">
                                Agendamentos
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('perfil') }}">
                                Perfil
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                Sair
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                    {{-- VISITANTE --}}
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

  <!-- =========================================================
  MAIN
  ========================================================= -->

  <main class="main">

    <section class="agendamento-section">
      <div class="container">

        <div class="hero-agendamento text-center" data-aos="fade-up">
          <h1 class="hero-title">Agende o atendimento do seu pet</h1>
          <p class="hero-subtitle">
            Mais praticidade, segurança e monitoramento completo para acompanhar cada etapa do atendimento.
          </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="card agendamento-card" data-aos="zoom-in" data-aos-delay="200">

              <div class="card-header">
                <div class="d-flex align-items-center gap-3">
                  <div class="header-icon">
                    <i class="fa-solid fa-paw"></i>
                  </div>
                  <div>
                    <h3 class="text-white">Agendamento</h3>
                    <p class="mb-0 text-metod">Preencha os dados abaixo para realizar o atendimento.</p>
                  </div>
                </div>
              </div>

              <div class="card-body">

                <form action="{{ route('agendamento.store') }}" method="POST">
                  @csrf

                  <p class="required-note">
                    <span class="required-mark">*</span> Todos os campos são obrigatórios
                  </p>

                  <div class="section-title mt-3">
                    <i class="fa-solid fa-dog"></i>
                    <span class="mt-3">Dados do Pet</span>
                  </div>

                  <div class="row mt-2">
                    <div class="col-md-6 mb-4">
                      <label>Nome do Pet <span class="required-mark">*</span></label>
                      @if($pets->count() > 0)
                        <select name="fk_id_pet" class="form-control" required>
                          <option value="">Selecione um pet</option>
                          @foreach($pets as $pet)
                            <option value="{{ $pet->id_pet }}">{{ $pet->nome }}</option>
                          @endforeach
                        </select>
                      @else
                        <div class="alert alert-warning">Você ainda não possui pets cadastrados.</div>
                        <a href="{{ route('pets.create') }}" class="btn btn-primary">
                          <i class="fa-solid fa-paw me-2"></i>Cadastrar Pet
                        </a>
                      @endif
                    </div>
                  </div>

                  <div class="section-title mt-5">
                    <i class="fa-solid fa-scissors"></i>
                    <span>Serviço</span>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label>Profissional <span class="required-mark">*</span></label>
                      <select name="fk_id_funcionario" class="form-control" required>
                        <option value="">Selecione</option>
                        @foreach($funcionarios as $funcionario)
                          <option value="{{ $funcionario->id_funcionario }}">{{ $funcionario->nome }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label>Serviço <span class="required-mark">*</span></label>
                      <select name="fk_id_servico" class="form-control" required>
                        <option value="">Selecione</option>
                        @foreach($servicos as $servico)
                          <option value="{{ $servico->id_servico }}">{{ $servico->nome }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div> <div class="section-title mt-5">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Agendamento</span>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label>Data <span class="required-mark">*</span></label>
                      <input type="date" name="data_agendamento" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label>Hora <span class="required-mark">*</span></label>
                      <input type="time" name="horario" class="form-control" required>
                    </div>
                  </div>

                  <div class="section-title mt-5">
                    <i class="fa-solid fa-note-sticky"></i>
                    <span>Observações</span>
                  </div>

                  <div class="mb-4">
                    <label>Observações <span class="required-mark">*</span></label>
                    <textarea name="observacoes" class="form-control" rows="5" placeholder="Digite alguma observação, alergia..." required></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary btn-agendar w-100">
                    <i class="fa-solid fa-calendar-check me-2"></i>Confirmar Agendamento
                  </button>

                </form>

              </div> </div> </div> </div> </div>
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
  CSS
  ========================================================= -->

  <style>

    body{
      background: #f7f9fc;
      font-family: 'Montserrat', sans-serif;
    }

    .agendamento-section{
      padding: 180px 0 100px;
      background:
      radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
      radial-gradient(circle at bottom left, #dcfce7 0%, transparent 30%);
      min-height: 100vh;
    }

    .hero-agendamento{
      margin-bottom: 60px;
    }

    .hero-title{
      font-size: 52px;
      font-weight: 800;
      color: #111827;
      margin-bottom: 20px;
    }

    .hero-subtitle{
      font-size: 18px;
      color: #6b7280;
      max-width: 700px;
      margin: auto;
    }

    .badge-mobipet{
      background: linear-gradient(135deg,#2563eb,#1d4ed8);
      color: white;
      padding: 14px 28px;
      border-radius: 999px;
      font-size: 15px;
      font-weight: 600;
    }

    .agendamento-card{
      border: none;
      border-radius: 35px;
      overflow: hidden;
      background: white;
      box-shadow: 0 15px 50px rgba(0,0,0,0.08);
    }

    .agendamento-card .card-header{
      background: linear-gradient(135deg,#2563eb,#1d4ed8);
      padding: 35px;
      border: none;
      color: white;
    }

    .header-icon{
      width: 70px;
      height: 70px;
      background: rgba(255,255,255,0.15);
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header-icon i{
      font-size: 28px;
      color: white;
    }

    .card-header h3{
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .card-body{
      padding: 50px;
    }

    .section-title{
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 25px;
      font-size: 22px;
      font-weight: 700;
      color: #111827;
    }

    .section-title i{
      width: 45px;
      height: 45px;
      background: linear-gradient(135deg,#2563eb,#3b82f6);
      color: white;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
    }

    label{
      font-weight: 600;
      margin-bottom: 10px;
      color: #374151;
    }

    .required-mark{
      color: #dc2626;
      font-weight: 700;
    }

    .required-note{
      font-size: 14px;
      color: #6b7280;
      margin-bottom: 25px;
    }

    .form-control{
      height: 58px;
      border-radius: 18px;
      border: 1px solid #d1d5db;
      padding: 15px 20px;
      font-size: 15px;
      transition: 0.3s;
      box-shadow: none !important;
    }

    textarea.form-control{
      height: auto;
      border-radius: 22px;
      padding-top: 18px;
    }

    .form-control:focus{
      border-color: #2563eb;
      box-shadow: 0 0 0 5px rgba(37,99,235,0.12) !important;
    }

    .btn-agendar{
      height: 65px;
      border-radius: 20px;
      border: none;
      font-size: 18px;
      font-weight: 700;
      background: linear-gradient(135deg,#2563eb,#1d4ed8);
      transition: 0.4s;
      margin-top: 10px;
    }

    .btn-agendar:hover{
      transform: translateY(-4px);
      box-shadow: 0 15px 30px rgba(37,99,235,0.25);
    }

    .alert-success{
      border-radius: 18px;
      border: none;
      background: #dcfce7;
      color: #166534;
      padding: 18px;
      font-weight: 600;
    }

    @media(max-width: 992px){

      .hero-title{
        font-size: 38px;
      }

      .card-body{
        padding: 35px;
      }

    }

    @media(max-width: 768px){

      .agendamento-section{
        padding-top: 150px;
      }

      .hero-title{
        font-size: 32px;
      }

      .hero-subtitle{
        font-size: 16px;
      }

      .card-body{
        padding: 25px;
      }

    }

  </style>

  <!-- =========================================================
  JS
  ========================================================= -->

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <script>
    AOS.init();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function exibeSweetAlert(icone, titulo, texto) {
      Swal.fire({
        title: titulo,
        text: texto,
        icon: icone
      });
    }
  </script>

  @if (session('success'))
    <script>
      exibeSweetAlert("success", "Agendamento concluído", '{{ session('success') }}')
    </script>
  @endif

  @if ($errors->any())
    <script>
      exibeSweetAlert('error', 'Erro!', '{{ implode('|', $errors->all()) }}')
    </script>
  @endif

  @include('partials.logout-confirm')

</body>

</html>