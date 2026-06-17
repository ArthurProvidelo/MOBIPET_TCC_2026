<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Meus Pets | Mobipet</title>
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

        <!-- Topo da Página -->
        <div class="hero-agendamento text-center" data-aos="fade-up">
          <h1 class="hero-title">Meus Companheiros</h1>
          <p class="hero-subtitle">
            Gerencie os dados dos seus pets cadastrados, acompanhe históricos ou adicione novos membros à família.
          </p>
          <div class="mt-4">
            <a href="{{ route('pets.create') }}" class="btn btn-primary px-4 py-3 rounded-3 fw-bold shadow-sm" style="transition: 0.3s; background: linear-gradient(135deg, #2563eb, #1d4ed8); border:none;">
              <i class="fa-solid fa-plus me-2"></i> Cadastrar Novo Pet
            </a>
          </div>
        </div>

        <!-- Grid de Pets / Listagem -->
        <div class="row justify-content-center">
          <div class="col-lg-10">

            <!-- Mensagem de Sucesso (se houver no sistema) -->
            @if(session('success'))
              <div class="alert alert-success border-0 rounded-4 p-3 shadow-sm mb-4 d-flex align-items-center gap-3" data-aos="fade-up">
                <i class="fa-solid fa-circle-check fs-4 text-success"></i>
                <span class="fw-semibold">{{ session('success') }}</span>
              </div>
            @endif

            <div class="card agendamento-card" data-aos="zoom-in" data-aos-delay="200">
              
              <!-- Card Header -->
              <div class="card-header">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                  <div class="d-flex align-items-center gap-3">
                    <div class="header-icon-list">
                      <i class="fa-solid fa-list-ul"></i>
                    </div>
                    <div>
                      <h3 class="text-white">Pets Cadastrados</h3>
                      <p class="mb-0 text-metod">Confira abaixo a listagem completa dos seus animais.</p>
                    </div>
                  </div>
                  <span class="badge bg-white text-primary px-3 py-2 rounded-pill fw-bold fs-6">
                    {{ count($pets ?? []) }} {{ count($pets ?? []) == 1 ? 'Pet' : 'Pets' }}
                  </span>
                </div>
              </div>

              <!-- Card Body -->
              <div class="card-body p-0">
                @if(isset($pets) && count($pets) > 0)
                  <div class="table-responsive">
                    <table class="table table-custom mb-0">
                      <thead>
                        <tr>
                          <th class="ps-4">Nome</th>
                          <th>Espécie</th>
                          <th>Raça</th>
                          <th>Porte</th>
                          <th>Nascimento</th>
                          <th class="text-end pe-4">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pets as $pet)
                          <tr>
                            <td class="ps-4">
                              <div class="d-flex align-items-center gap-3">
                                <div class="pet-avatar-mini">
                                  <i class="fa-solid {{ $pet->especie == 'Gato' ? 'fa-cat' : 'fa-dog' }}"></i>
                                </div>
                                <span class="fw-bold text-dark fs-5">{{ $pet->nome }}</span>
                              </div>
                            </td>
                            <td>
                              <span class="badge badge-especie px-3 py-2 rounded-pill fw-semibold">
                                {{ $pet->especie }}
                              </span>
                            </td>
                            <td class="text-secondary fw-medium">{{ $pet->raca }}</td>
                            <td>
                              <span class="badge bg-light text-dark border px-2.5 py-1.5 rounded-3 fw-semibold small">
                                {{ $pet->porte }}
                              </span>
                            </td>
                            <td class="text-secondary small fw-medium">
                              {{ $pet->data_nascimento ? date('d/m/Y', strtotime($pet->data_nascimento)) : 'Não informada' }}
                            </td>
                            <td class="text-end pe-4">
                              <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('pets.edit', $pet->id_pet) }}" class="btn btn-action btn-edit-pet" title="Editar Pet">
                                  <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('pets.destroy', $pet->id_pet) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover este pet permanentemente?')">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-action btn-delete-pet" title="Excluir Pet">
                                    <i class="fa-solid fa-trash-can"></i>
                                  </button>
                                </form>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                @else
                  <!-- Estado Vazio (Nenhum Pet Cadastrado) -->
                  <div class="text-center py-5 px-4">
                    <div class="empty-state-icon mb-4 mx-auto">
                      <i class="fa-solid fa-paw"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2">Nenhum pet por aqui ainda</h4>
                    <p class="text-secondary mb-4 max-width-auto mx-auto" style="max-width: 450px;">
                      Cadastre seu primeiro pet para poder agendar serviços de banho e tosa e acompanhar o status em tempo real.
                    </p>
                    <a href="{{ route('pets.create') }}" class="btn btn-primary px-4 py-2.5 rounded-3 fw-bold">
                      Cadastrar meu primeiro pet
                    </a>
                  </div>
                @endif
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
      radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
      radial-gradient(circle at bottom left, #e0f2fe 0%, transparent 30%);
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

    .header-icon-list {
      width: 65px;
      height: 65px;
      background: rgba(255, 255, 255, 0.15);
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
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

    /* CUSTOM TABLE DESIGN */
    .table-custom {
      vertical-align: middle;
    }

    .table-custom thead th {
      background-color: #f8fafc;
      color: #4b5563;
      font-weight: 700;
      text-transform: uppercase;
      font-size: 12px;
      letter-spacing: 0.5px;
      padding: 20px 15px;
      border-bottom: 1px solid #e2e8f0;
    }

    .table-custom tbody tr {
      transition: background-color 0.2s;
    }

    .table-custom tbody tr:hover {
      background-color: #f8fafc;
    }

    .table-custom tbody td {
      padding: 22px 15px;
      border-bottom: 1px solid #f1f5f9;
    }

    /* MINI AVATAR GENERATOR */
    .pet-avatar-mini {
      width: 48px;
      height: 48px;
      background-color: rgba(37, 99, 235, 0.1);
      color: #2563eb;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
    }

    .badge-especie {
      background-color: #eff6ff;
      color: #1e40af;
      border: 1px solid #bfdbfe;
    }

    /* ACTION BUTTONS EFFECT */
    .btn-action {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      transition: 0.2s ease;
      border: none;
    }

    .btn-edit-pet {
      background-color: #fef3c7;
      color: #d97706;
    }

    .btn-edit-pet:hover {
      background-color: #d97706;
      color: white;
    }

    .btn-delete-pet {
      background-color: #fee2e2;
      color: #dc2626;
    }

    .btn-delete-pet:hover {
      background-color: #dc2626;
      color: white;
    }

    /* EMPTY STATE */
    .empty-state-icon {
      width: 90px;
      height: 90px;
      background: #f3f4f6;
      color: #9ca3af;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 38px;
    }

    @media(max-width: 992px) {
      .hero-title { font-size: 38px; }
    }

    @media(max-width: 768px) {
      .agendamento-section { padding-top: 150px; }
      .hero-title { font-size: 32px; }
      .hero-subtitle { font-size: 16px; }
      .table-custom thead { display: none; }
      .table-custom tbody tr { 
        display: block; 
        border-bottom: 2px solid #e2e8f0; 
        padding: 15px 10px;
      }
      .table-custom tbody td { 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        padding: 10px 5px;
        border: none;
        text-align: right;
      }
      .table-custom tbody td:first-child {
        justify-content: center;
        padding-bottom: 15px;
      }
      .table-custom tbody td::before {
        content: attr(data-label);
        font-weight: 700;
        color: #4b5563;
        float: left;
        text-transform: uppercase;
        font-size: 12px;
      }
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