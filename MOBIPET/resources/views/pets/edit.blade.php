<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Editar Pet | Mobipet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/mobipet_icon.png" rel="icon">

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
    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a>
                </i>
                <i class="bi bi-phone d-flex align-items-center ms-4">
                    <span>(19) 98943-2384</span>
                </i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

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
                        <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                        <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                        <li><a href="{{ route('pets.index') }}" class="active">Meus Pets</a></li>
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
          <h1 class="hero-title">Atualizar Dados do seu Pet</h1>
          <p class="hero-subtitle">
            Mantenha as informações do seu companheiro em dia para garantir a melhor experiência nos próximos atendimentos.
          </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9 col-md-11">
            <div class="card agendamento-card" data-aos="zoom-in" data-aos-delay="200">

              <!-- Card Header -->
              <div class="card-header">
                <div class="d-flex align-items-center gap-3">
                  <div class="header-icon-edit">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </div>
                  <div>
                    <h3 class="text-white">Editar Dados de {{ $pet->nome }}</h3>
                    <p class="mb-0 text-metod">Altere os campos necessários nos blocos de informação abaixo.</p>
                  </div>
                </div>
              </div>

              <!-- Card Body -->
              <div class="card-body">
                <form action="{{ route('pets.update', $pet->id_pet) }}" method="POST">
                  @csrf
                  @method('PUT')

                  <!-- SEÇÃO 1: DADOS PRINCIPAIS -->
                  <div class="section-title mt-2">
                    <i class="fa-solid fa-signature"></i>
                    <span>Identificação do Pet</span>
                  </div>

                  <div class="mb-4">
                    <label>Qual é o nome dele(a)?</label>
                    <input type="text" name="nome" class="form-control" value="{{ $pet->nome }}" placeholder="Ex: Thor, Mel, Pipoca..." required>
                  </div>

                  <!-- SEÇÃO 2: SELEÇÃO DE ESPÉCIE -->
                  <div class="mb-4">
                    <label class="d-block mb-3">Espécie</label>
                    <div class="row g-3">
                      <div class="col-6">
                        <input type="radio" class="btn-check" name="especie" id="especie_cao" value="Cão" {{ $pet->especie == 'Cão' || $pet->especie == 'Cachorro' ? 'checked' : '' }} required>
                        <label class="btn btn-outline-custom w-100 py-3 rounded-4 d-flex flex-column align-items-center gap-2" for="especie_cao">
                          <i class="fa-solid fa-dog fa-2x"></i>
                          <span class="fw-bold small">Cão</span>
                        </label>
                      </div>
                      <div class="col-6">
                        <input type="radio" class="btn-check" name="especie" id="especie_gato" value="Gato" {{ $pet->especie == 'Gato' ? 'checked' : '' }}>
                        <label class="btn btn-outline-custom w-100 py-3 rounded-4 d-flex flex-column align-items-center gap-2" for="especie_gato">
                          <i class="fa-solid fa-cat fa-2x"></i>
                          <span class="fw-bold small">Gato</span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <!-- SEÇÃO 3: CARACTERÍSTICAS -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label>Qual a Raça?</label>
                      <input type="text" name="raca" class="form-control" value="{{ $pet->raca }}" placeholder="Ex: Poodle, Vira-lata..." required>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label>Data de Nascimento <span class="text-muted fw-normal small">(Opcional)</span></label>
                      <input type="date" name="data_nascimento" class="form-control" value="{{ $pet->data_nascimento }}">
                    </div>
                  </div>

                  <!-- SEÇÃO 4: CONFIGURAÇÃO DE PORTE -->
                  <div class="mb-4">
                    <label class="d-block mb-3">Qual o Porte dele(a)?</label>
                    <div class="segmented-control p-1 rounded-4 d-flex" role="group">
                      <input type="radio" class="btn-check" name="porte" id="porte_p" value="Pequeno" {{ $pet->porte == 'Pequeno' ? 'checked' : '' }}>
                      <label class="btn segment-item w-100 py-3 fw-semibold rounded-3 small" for="porte_p">Pequeno</label>

                      <input type="radio" class="btn-check" name="porte" id="porte_m" value="Médio" {{ $pet->porte == 'Médio' ? 'checked' : '' }}>
                      <label class="btn segment-item w-100 py-3 fw-semibold rounded-3 small" for="porte_m">Médio</label>

                      <input type="radio" class="btn-check" name="porte" id="porte_g" value="Grande" {{ $pet->porte == 'Grande' ? 'checked' : '' }}>
                      <label class="btn segment-item w-100 py-3 fw-semibold rounded-3 small" for="porte_g">Grande</label>
                    </div>
                  </div>

                  <hr class="my-5 opacity-25">

                  <!-- CONTROLES DE ENVIO -->
                  <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-md-4 order-2 order-md-1">
                      <a href="{{ route('pets.index') }}" class="btn-voltar d-flex align-items-center justify-content-center gap-2">
                        Cancelar e voltar
                      </a>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                      <button type="submit" class="btn btn-warning btn-salvar w-100 mt-0">
                        <i class="fa-solid fa-floppy-disk me-2"></i>Salvar Alterações
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
  <footer id="footer" class="footer-16 footer position-relative">
    <div class="container">
      <div class="footer-main py-5" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-md-6 d-flex flex-column align-items-start">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center mb-3">
              <h1 class="sitename mb-0">Mobipet</h1>
            </a>
            <p class="brand-description text-secondary">
              Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!
            </p>
          </div>
          <div class="col-md-6 d-flex flex-column align-items-md-end justify-content-center text-secondary">
            <p class="mb-2"><span><i class="bi bi-geo-alt me-2"></i>Rua Bela Vista, 100 - Centro, Tambaú - SP</span></p>
            <p class="mb-2"><span><i class="bi bi-telephone me-2"></i>(19) 98943-2384</span></p>
            <p class="mb-0"><span><i class="bi bi-envelope me-2"></i>mobipet@gmail.com</span></p>
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
  </footer>

  <!-- =========================================================
  CSS INTERNO (Premium Identity System)
  ========================================================= -->
  <style>
    body {
      background: #f7f9fc;
      font-family: 'Montserrat', sans-serif;
    }

    .agendamento-section {
      padding: 180px 0 100px;
      background:
      radial-gradient(circle at top right, #fef3c7 0%, transparent 30%),
      radial-gradient(circle at bottom left, #dbeafe 0%, transparent 30%);
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
      background: linear-gradient(135deg, #f59e0b, #d97706);
      padding: 35px;
      border: none;
      color: white;
    }

    .header-icon-edit {
      width: 65px;
      height: 65px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header-icon-edit i {
      font-size: 26px;
      color: white;
    }

    .card-header h3 {
      font-size: 26px;
      font-weight: 700;
      margin-bottom: 4px;
    }

    .text-metod {
      color: rgba(255, 255, 255, 0.85) !important;
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
      background: linear-gradient(135deg, #f59e0b, #fbbf24);
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

    .form-control {
      height: 58px;
      border-radius: 18px;
      border: 1px solid #d1d5db;
      background-color: #f9fafb;
      padding: 15px 20px;
      font-size: 15px;
      transition: 0.3s;
      box-shadow: none !important;
    }

    .form-control:focus {
      border-color: #f59e0b;
      background-color: #fff;
      box-shadow: 0 0 0 5px rgba(245, 158, 11, 0.12) !important;
    }

    /* CUSTOM RADIO BUTTONS (Espécie) */
    .btn-outline-custom {
      border: 1px solid #d1d5db;
      color: #4b5563;
      background-color: #f9fafb;
      transition: 0.3s;
    }

    .btn-outline-custom:hover {
      background-color: #f3f4f6;
      border-color: #b45309;
      color: #b45309;
    }

    .btn-check:checked + .btn-outline-custom {
      background-color: rgba(245, 158, 11, 0.08);
      color: #b45309;
      border-color: #f59e0b;
      box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.1) !important;
    }

    /* SEGMENTED CONTROL (Porte) */
    .segmented-control {
      background: #f3f4f6;
      border: 1px solid #e5e7eb;
    }

    .segment-item {
      border: none !important;
      color: #4b5563;
      background: transparent;
      transition: 0.25s;
    }

    .segment-item:hover {
      color: #1f2937;
    }

    .btn-check:checked + .segment-item {
      background-color: #ffffff !important;
      color: #d97706 !important;
      font-weight: 700 !important;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06) !important;
    }

    /* ACTION BUTTONS */
    .btn-salvar {
      height: 60px;
      border-radius: 18px;
      border: none;
      font-size: 16px;
      font-weight: 700;
      background: linear-gradient(135deg, #f59e0b, #d97706);
      color: white !important;
      transition: 0.4s;
    }

    .btn-salvar:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 25px rgba(217, 119, 6, 0.3);
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

  <!-- VLibras Plugin -->
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

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
</body>

</html>