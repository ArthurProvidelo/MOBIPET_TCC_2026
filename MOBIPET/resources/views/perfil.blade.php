<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meu Perfil | Mobipet</title>

  <link href="assets/img/mobipet_icon.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">
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

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

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
                        <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
                        <li><a href="{{ route('perfil') }}" class="active"><i class="fa-solid fa-user"></i></a></li>
                        <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

                    {{-- FUNCIONÁRIO --}}
                    @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                        <li><a href="{{ route('painel-controle') }}">Painel</a></li>
                        <li><a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a></li>
                        <li><a href="{{ route('perfil') }}" class="active">Perfil</a></li>
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

  <main class="main">
    <section class="agendamento-section">
      <div class="container">

        <div class="hero-agendamento text-center" data-aos="fade-up">
          <h1 class="hero-title">Gerencie seu Perfil</h1>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="card agendamento-card" data-aos="zoom-in" data-aos-delay="200">

              <div class="card-header">
                <div class="d-flex align-items-center gap-3">
                  <div class="header-icon">
                    <i class="fa-solid fa-user-gear"></i>
                  </div>
                  <div>
                    <h3 class="text-white">Meu Perfil</h3>
                    <p class="mb-0 text-metod">Altere as informações abaixo e clique em salvar.</p>
                  </div>
                </div>
              </div>

              <div class="card-body">

                @if(session('success'))
                  <div class="alert alert-success mb-4">
                    <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                  </div>
                @endif

                <form action="{{ route('perfil.update') }}" method="POST">
                  @csrf
                  @method('PUT')

                  <div class="section-title mt-3">
                    <i class="fa-solid fa-id-card"></i>
                    <span>Dados do Tutor</span>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label>Nome Completo</label>
                      <input type="text" name="nome" class="form-control" value="{{ $cliente->nome }}" required>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label>E-mail</label>
                      <input type="email" name="email" class="form-control" value="{{ $cliente->email }}" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label>Telefone</label>
                      <input type="text" name="telefone" class="form-control" value="{{ $cliente->telefone }}" required>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label>Endereço</label>
                      <input type="text" name="endereco" class="form-control" value="{{ $cliente->endereco }}" required>
                    </div>
                  </div>

                  <div class="text-center mt-2 mb-5">
                    <button type="submit" class="btn btn-primary btn-agendar w-100">
                      <i class="fa-solid fa-floppy-disk me-2"></i>Salvar Alterações
                    </button>
                  </div>
                </form>

                <?php
                  if(session('nivel_acesso') == 'USUARIO'){
                ?>
                <div class="section-title mt-5">
                  <i class="fa-solid fa-paw"></i>
                  <span>Meus Pets</span>
                </div>

                <div class="table-responsive mt-3 mb-4">
                  <table class="table table-hover align-middle custom-table">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>Espécie</th>
                        <th>Raça</th>
                        <th>Porte</th>
                        <th>Data Nascimento</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($pets as $pet)
                        <tr>
                          <td class="fw-bold text-dark">{{ $pet->nome }}</td>
                          <td><span class="badge bg-light text-dark border">{{ $pet->especie }}</span></td>
                          <td>{{ $pet->raca }}</td>
                          <td>{{ $pet->porte }}</td>
                          <td>{{ \Carbon\Carbon::parse($pet->data_nascimento)->format('d/m/Y') }}</td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="5" class="text-center text-muted py-4">
                            <i class="fa-solid fa-circle-info me-2"></i>Nenhum pet cadastrado até o momento.
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>

                <div class="text-center mt-4">
                  <a href="{{ route('pets.create') }}" class="btn btn-outline-primary btn-add-pet w-100 d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-plus"></i> Cadastrar Novo Pet
                  </a>
                </div>

              </div>

              <?php } ?>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>

  <footer id="footer" class="footer-16 footer position-relative">
    <div class="container">
      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-6 align-items-start">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
              <h1 class="sitename">Mobipet</h1>
            </a>
            <p class="brand-description">
              Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!
            </p>
          </div>
          <div class="col-md-6 align-items-end">
            <p><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú - SP</span></p>
            <p><span><i class="bi bi-telephone"></i> (19)9999-8888</span></p>
            <p><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

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
      margin-bottom: 60px;
    }

    .hero-title {
      font-size: 52px;
      font-weight: 800;
      color: #111827;
      margin-bottom: 20px;
    }

    .hero-subtitle {
      font-size: 18px;
      color: #6b7280;
      max-width: 700px;
      margin: auto;
    }

    .agendamento-card {
      border: none;
      border-radius: 35px;
      overflow: hidden;
      background: white;
      box-shadow: 0 15px 50px rgba(0,0,0,0.08);
    }

    .agendamento-card .card-header {
      background: linear-gradient(135deg,#2563eb,#1d4ed8);
      padding: 35px;
      border: none;
      color: white;
    }

    .header-icon {
      width: 70px;
      height: 70px;
      background: rgba(255,255,255,0.15);
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header-icon i {
      font-size: 28px;
      color: white;
    }

    .card-header h3 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .card-body {
      padding: 50px;
    }

    .section-title {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 25px;
      font-size: 22px;
      font-weight: 700;
      color: #111827;
    }

    .section-title i {
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

    label {
      font-weight: 600;
      margin-bottom: 10px;
      color: #374151;
    }

    .form-control {
      height: 58px;
      border-radius: 18px;
      border: 1px solid #d1d5db;
      padding: 15px 20px;
      font-size: 15px;
      transition: 0.3s;
      box-shadow: none !important;
    }

    .form-control:focus {
      border-color: #2563eb;
      box-shadow: 0 0 0 5px rgba(37,99,235,0.12) !important;
    }

    .btn-agendar {
      height: 65px;
      border-radius: 20px;
      border: none;
      font-size: 18px;
      font-weight: 700;
      background: linear-gradient(135deg,#2563eb,#1d4ed8);
      transition: 0.4s;
      margin-top: 10px;
    }

    .btn-agendar:hover {
      transform: translateY(-4px);
      box-shadow: 0 15px 30px rgba(37,99,235,0.25);
    }

    .btn-add-pet {
      height: 58px;
      border-radius: 18px;
      font-size: 16px;
      font-weight: 700;
      border: 2px dashed #2563eb;
      color: #2563eb;
      background: transparent;
      transition: 0.3s;
    }

    .btn-add-pet:hover {
      background: rgba(37,99,235,0.05);
      color: #1d4ed8;
      border-color: #1d4ed8;
      transform: translateY(-2px);
    }

    .custom-table th {
      background-color: #f8fafc;
      color: #475569;
      font-weight: 700;
      padding: 16px;
      border-bottom: 2px solid #e2e8f0;
    }

    .custom-table td {
      padding: 16px;
      color: #64748b;
    }

    .alert-success {
      border-radius: 18px;
      border: none;
      background: #dcfce7;
      color: #166534;
      padding: 18px;
      font-weight: 600;
    }

    @media(max-width: 992px){
      .hero-title{ font-size: 38px; }
      .card-body{ padding: 35px; }
    }

    @media(max-width: 768px){
      .agendamento-section{ padding-top: 150px; }
      .hero-title{ font-size: 32px; }
      .hero-subtitle{ font-size: 16px; }
      .card-body{ padding: 25px; }
    }
  </style>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>