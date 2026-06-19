<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agendamentos | Mobipet</title>

  <link href="assets/img/mobipet_icon.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

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
                    <a href="mailto:mobipet@gmail.com">
                        mobipet@gmail.com
                    </a>
                </i>

                <i class="bi bi-phone d-flex align-items-center ms-4">
                    <span>(19) 98943-2384</span>
                </i>
            </div>

            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#!" class="whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="#!" class="instagram">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>

        </div>
    </div>

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
                            <a href="{{ route('agendamento') }}">
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
                            <a href="{{ route('funcionario.agendamentos') }}" class="active">
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

  <main class="main">

    <section class="agendamento-section">
      <div class="container">

        <div class="hero-agendamento text-center" data-aos="fade-up">
          <h1 class="hero-title">Lista de Agendamentos</h1>
          <p class="hero-subtitle">
            Acompanhe em tempo real a situação de todos os atendimentos cadastrados no sistema.
          </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card agendamento-card" data-aos="zoom-in" data-aos-delay="200">

              <div class="card-header">
                <div class="d-flex align-items-center gap-3">
                  <div class="header-icon">
                    <i class="fa-solid fa-rectangle-list"></i>
                  </div>
                  <div>
                    <h3 class="text-white mb-0">Agenda de Serviços</h3>
                    <p class="mb-0 text-metod" style="color: rgba(255,255,255,0.7);">Histórico e próximos atendimentos gerenciados.</p>
                  </div>
                </div>
              </div>

              <div class="card-body p-0">

                @if ($agendamentos->count())

                  <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 text-center">

                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Data</th>
                          <th>Horário</th>
                          <th>Pet</th>
                          <th>Tutor</th>
                          <th>Serviço</th>
                          <th>Funcionário</th>
                          <th>Status</th>
                          <th>Observações</th>
                        </tr>
                      </thead>

                      <tbody>

                        @foreach ($agendamentos as $agendamento)
                          <tr>

                            <td class="fw-bold text-secondary">
                              {{ $agendamento->id_agendamento }}
                            </td>

                            <td class="fw-semibold">
                              {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->format('d/m/Y') }}
                            </td>

                            <td>
                              <span class="horario-badge">
                                {{ substr($agendamento->horario, 0, 5) }}
                              </span>
                            </td>

                            <td class="fw-semibold text-dark">
                              <i class="fa-solid fa-paw me-1 text-primary"></i> {{ $agendamento->pet->nome ?? '-' }}
                            </td>

                            <td>
                              {{ $agendamento->pet->cliente->nome ?? '-' }}
                            </td>

                            <td>
                              <span class="servico-tag">
                                {{ $agendamento->servico->nome ?? '-' }}
                              </span>
                            </td>

                            <td>
                              {{ $agendamento->funcionario->nome ?? '-' }}
                            </td>

                            <td>

                              @php
                                $status = strtoupper($agendamento->status_agendamento);
                              @endphp

                              @if ($status == 'AGENDADO')
                                <span class="badge badge-status bg-primary-subtle text-primary">
                                  <i class="fa-solid fa-calendar me-1"></i> Agendado
                                </span>
                              @elseif($status == 'EM ANDAMENTO')
                                <span class="badge badge-status bg-warning-subtle text-warning-dark">
                                  <i class="fa-solid fa-spinner fa-spin me-1"></i> Em andamento
                                </span>
                              @elseif($status == 'CONCLUIDO')
                                <span class="badge badge-status bg-success-subtle text-success">
                                  <i class="fa-solid fa-circle-check me-1"></i> Concluído
                                </span>
                              @elseif($status == 'CANCELADO')
                                <span class="badge badge-status bg-danger-subtle text-danger">
                                  <i class="fa-solid fa-circle-xmark me-1"></i> Cancelado
                                </span>
                              @else
                                <span class="badge badge-status bg-secondary-subtle text-secondary">
                                  {{ $agendamento->status_agendamento }}
                                </span>
                              @endif

                            </td>

                            <td class="text-start text-muted text-truncate" style="max-width: 180px;" title="{{ $agendamento->observacao }}">
                              <small>{{ $agendamento->observacao ?? '-' }}</small>
                            </td>

                          </tr>
                        @endforeach

                      </tbody>

                    </table>
                  </div>
                @else
                  <div class="text-center py-5">
                    <div class="mb-3 text-muted fs-1">
                      <i class="fa-solid fa-calendar-xmark"></i>
                    </div>
                    <h5 class="text-muted fw-semibold">
                      Nenhum agendamento encontrado.
                    </h5>
                  </div>
                @endif

              </div> 
            </div> 
          </div> 
        </div> 
      </div>
    </section>
  </main>

  <footer id="footer"
          class="footer-16 footer position-relative">

    <div class="container">

      <div class="footer-main"
           data-aos="fade-up"
           data-aos-delay="100">

        <div class="row">

          <div class="col-md-6 align-items-start">

            <a href="{{ route('index') }}"
               class="logo d-flex align-items-center">

              <h1 class="sitename">
                Mobipet
              </h1>

            </a>

            <p class="brand-description">
              Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!
            </p>

          </div>

          <div class="col-md-6 align-items-end">

            <p>
              <span>
                <i class="bi bi-geo-alt"></i>
                Rua Bela Vista, 100 - Centro, Tambaú - SP
              </span>
            </p>

            <p>
              <span>
                <i class="bi bi-telephone"></i>
                (19)9999-8888
              </span>
            </p>

            <p>
              <span>
                <i class="bi bi-envelope"></i>
                mobipet@gmail.com
              </span>
            </p>

          </div>

        </div>

      </div>

    </div>

  </footer>

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
    }

    /* Estilizações Adicionais Próprias da Tabela */
    .table thead th {
      background-color: #f8fafc;
      color: #475569;
      font-weight: 700;
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 0.5px;
      padding: 20px;
      border-bottom: 2px solid #e2e8f0;
    }

    .table tbody tr {
      transition: 0.2s;
    }

    .table tbody tr:hover {
      background: #f1f5f9 !important;
      transform: scale(1.002);
    }

    .table tbody td {
      padding: 20px;
      font-size: 15px;
      color: #334155;
      border-bottom: 1px solid #f1f5f9;
    }

    .horario-badge {
      background-color: #f8fafc;
      border: 1px solid #e2e8f0;
      padding: 6px 12px;
      border-radius: 10px;
      font-family: monospace;
      font-size: 14px;
      font-weight: 600;
    }

    .servico-tag {
      background: #eff6ff;
      color: #2563eb;
      padding: 6px 14px;
      border-radius: 10px;
      font-weight: 600;
      font-size: 14px;
    }

    .badge-status {
      padding: 8px 14px;
      border-radius: 12px;
      font-size: 13px;
      font-weight: 600;
    }

    /* Cores Suaves (Subtle) para Status modernos */
    .bg-primary-subtle { background-color: #eff6ff !important; }
    .bg-warning-subtle { background-color: #fefce8 !important; }
    .bg-success-subtle { background-color: #f0fdf4 !important; }
    .bg-danger-subtle { background-color: #fef2f2 !important; }
    .text-warning-dark { color: #854d0e !important; }

    @media(max-width: 992px){
      .hero-title{
        font-size: 38px;
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
    }

  </style>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <script>
    AOS.init();
  </script>

</body>

</html>