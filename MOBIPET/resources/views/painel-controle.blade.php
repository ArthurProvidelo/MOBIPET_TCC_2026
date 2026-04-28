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

  <div class="topbar d-flex align-items-center dark-background">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"><a href="#">mobipet@gmail.com</a></i>
        <i class="bi bi-phone ms-4"><span>(19) 99999-8888</span></i>
      </div>
    </div>
  </div>

  <div class="branding d-flex align-items-center">
    <div class="container d-flex justify-content-between">
      <h1 class="sitename">Mobipet</h1>

      <nav class="navmenu">
        <ul>
          <li><a href="{{route('index')}}">Início</a></li>
          <li><a href="{{route('agendamento')}}">Agendamentos</a></li>
          <li><a href="{{route('produtos')}}">Produtos</a></li>
          <li><a href="{{route('perfil')}}">Perfil</a></li>
        </ul>
      </nav>
    </div>
  </div>

</header>

<main class="main">

  <!-- HEADER DO DASHBOARD -->
  <section class="section" style="padding-top:120px">
    <div class="container d-flex justify-content-between align-items-center">
      <div>
        <h2 class="fw-bold">Painel de Controle</h2>
        <p class="section-subtitle">Visão geral do seu petshop em tempo real</p>
      </div>

      <a href="{{route('agendamento')}}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo Agendamento
      </a>
    </div>
  </section>

  <!-- KPIs -->
  <section class="section pt-0">
    <div class="container">
      <div class="row g-4">

        <div class="col-lg-3 col-md-6">
          <div class="dashboard-card text-center">
            <div class="dashboard-icon"><i class="bi bi-calendar-check"></i></div>
            <h3>12</h3>
            <p class="section-subtitle">Agendamentos hoje</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="dashboard-card text-center">
            <div class="dashboard-icon"><i class="bi bi-heart"></i></div>
            <h3>58</h3>
            <p class="section-subtitle">Pets cadastrados</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="dashboard-card text-center">
            <div class="dashboard-icon"><i class="bi bi-clock"></i></div>
            <h3>5</h3>
            <p class="section-subtitle">Em atendimento</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="dashboard-card text-center">
            <div class="dashboard-icon"><i class="bi bi-cash-stack"></i></div>
            <h3>R$ 1.250</h3>
            <p class="section-subtitle">Faturamento do dia</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ATENDIMENTOS -->
  <section class="section pt-0">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Atendimentos em andamento</h4>
        <a href="#" class="btn btn-outline-primary btn-sm">Ver todos</a>
      </div>

      <div class="table-responsive table-modern">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th>Pet</th>
              <th>Serviço</th>
              <th>Status</th>
              <th>Tempo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Rex</strong></td>
              <td>Banho</td>
              <td><span class="badge bg-warning">Em andamento</span></td>
              <td>20 min</td>
            </tr>
            <tr>
              <td><strong>Luna</strong></td>
              <td>Tosa</td>
              <td><span class="badge bg-success">Finalizado</span></td>
              <td>45 min</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- AÇÕES RÁPIDAS -->
  <section class="section pt-0">
    <div class="container">

      <h4 class="fw-bold mb-3">Ações rápidas</h4>

      <div class="row g-3">

        <div class="col-lg-4">
          <a href="{{route('agendamento')}}" class="quick-action d-block text-center">
            <i class="bi bi-plus-circle fs-4"></i>
            <p class="mt-2 mb-0">Novo Agendamento</p>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="{{route('produtos')}}" class="quick-action d-block text-center">
            <i class="bi bi-box fs-4"></i>
            <p class="mt-2 mb-0">Produtos</p>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="{{route('perfil')}}" class="quick-action d-block text-center">
            <i class="bi bi-person fs-4"></i>
            <p class="mt-2 mb-0">Perfil</p>
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