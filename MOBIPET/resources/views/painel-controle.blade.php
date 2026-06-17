<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel - Mobipet</title>

  <link href="{{asset('assets/img/mobipet_icon.png')}}" rel="icon">

  <!-- CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <style>
    .dashboard-card {
      border-radius: 16px;
      padding: 25px;
      background: white;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      transition: 0.3s;
    }

    .dashboard-card:hover {
      transform: translateY(-5px);
    }

    .dashboard-icon {
      font-size: 28px;
      margin-bottom: 10px;
      color: #0d6efd;
    }

    .section-subtitle {
      color: #6c757d;
      font-size: 14px;
    }

    .table-modern {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    .quick-action {
      border-radius: 12px;
      padding: 18px;
      border: 1px solid #eee;
      transition: 0.2s;
    }

    .quick-action:hover {
      background: #f8f9fa;
      transform: scale(1.02);
    }

    body {
  font-family: 'Roboto', sans-serif;
}

h1, h2, h3, h4, h5 {
  font-family: 'Montserrat', sans-serif;
}

p, span, small {
  font-family: 'Lato', sans-serif;
}
  </style>

</head>

<body class="starter-page-page">

<!-- HEADER (PADRÃO DO SEU SISTEMA) -->
<header id="header" class="header fixed-top">

    <!-- Top Bar -->
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
                            <a href="{{ route('painel-controle') }}" class="active">
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

<main class="main">

    <!-- HEADER DO DASHBOARD -->
    <section class="section" style="padding-top:120px">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">

            <div>
                <h2 class="fw-bold">
                    Bem-vindo, {{ session('nome') }}
                </h2>

                <p class="section-subtitle">
                    Acompanhe os agendamentos e o funcionamento do petshop em tempo real.
                </p>
            </div>

            <a href="{{ route('funcionario.agendamentos') }}"
               class="btn btn-primary">

                <i class="bi bi-calendar-check"></i>
                Ver Agendamentos

            </a>

        </div>
    </section>

    <!-- KPIs -->
    <section class="section pt-0">
        <div class="container">

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card text-center">

                        <div class="dashboard-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>

                        <h3>{{ $agendamentosHoje }}</h3>

                        <p class="section-subtitle">
                            Agendamentos Hoje
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card text-center">

                        <div class="dashboard-icon">
                            <i class="bi bi-heart"></i>
                        </div>

                        <h3>{{ $pets }}</h3>

                        <p class="section-subtitle">
                            Pets Cadastrados
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card text-center">

                        <div class="dashboard-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>

                        <h3>{{ $pendentes }}</h3>

                        <p class="section-subtitle">
                            Pendentes
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card text-center">

                        <div class="dashboard-icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <h3>{{ $funcionarios }}</h3>

                        <p class="section-subtitle">
                            Funcionários
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ÚLTIMOS AGENDAMENTOS -->
    <section class="section pt-0">

        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h4 class="fw-bold mb-0">
                    Últimos Agendamentos
                </h4>

            </div>

            <div class="table-responsive table-modern">

                <table class="table align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Pet</th>
                            <th>Serviço</th>
                            <th>Funcionário</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($ultimosAgendamentos as $agendamento)

                            <tr>

                                <td>
                                    <strong>
                                        {{ $agendamento->pet->nome ?? '-' }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $agendamento->servico->nome ?? '-' }}
                                </td>

                                <td>
                                    {{ $agendamento->funcionario->nome ?? '-' }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->format('d/m/Y') }}
                                    <br>
                                    <small class="text-muted">
                                        {{ $agendamento->horario }}
                                    </small>
                                </td>

                                <td>

                                    @if($agendamento->status_agendamento == 'Pendente')

                                        <span class="badge bg-warning">
                                            Pendente
                                        </span>

                                    @elseif($agendamento->status_agendamento == 'Concluido')

                                        <span class="badge bg-success">
                                            Concluído
                                        </span>

                                    @else

                                        <span class="badge bg-primary">
                                            {{ $agendamento->status_agendamento }}
                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5" class="text-center py-5">

                                    <i class="bi bi-calendar-x fs-1 d-block mb-3"></i>

                                    Nenhum agendamento encontrado.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </section>

    <!-- AÇÕES RÁPIDAS -->
    <section class="section pt-0">

        <div class="container">

            <h4 class="fw-bold mb-4">
                Ações Rápidas
            </h4>

            <div class="row g-3">

                <div class="col-lg-4">

                    <a href="{{ route('funcionario.agendamentos') }}"
                       class="quick-action d-block text-center">

                        <i class="bi bi-calendar-check fs-3"></i>

                        <p class="mt-2 mb-0">
                            Gerenciar Agendamentos
                        </p>

                    </a>

                </div>

                <div class="col-lg-4">

                    <a href="{{ route('services.create') }}"
                       class="quick-action d-block text-center">

                        <i class="bi bi-scissors fs-3"></i>

                        <p class="mt-2 mb-0">
                            Cadastrar Serviço
                        </p>

                    </a>

                </div>

                <div class="col-lg-4">

                    <a href="{{ route('logout') }}"
                       class="quick-action d-block text-center">

                        <i class="bi bi-box-arrow-right fs-3"></i>

                        <p class="mt-2 mb-0">
                            Encerrar Sessão
                        </p>

                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

<!-- FOOTER -->
<footer class="footer text-center">
  <div class="container">
    <p>© 2026 Mobipet</p>
  </div>
</footer>

<!-- JS -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>