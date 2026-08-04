<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel de Controle | Mobipet</title>

    <meta name="description"
        content="Painel administrativo do Mobipet para gerenciamento de agendamentos, funcionários e serviços.">

    <link rel="icon" href="{{ asset('assets/img/mobipet_icon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/aos/aos.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}"
        rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('assets/css/main.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/css/estilo.css') }}"
        rel="stylesheet">

    <style>

        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #3b82f6;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;

            --text: #111827;
            --text-light: #6b7280;

            --border: #e5e7eb;

            --card-radius: 28px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;

            background:
                radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
                radial-gradient(circle at bottom left, #e0f2fe 0%, transparent 35%),
                #f8fafc;

            color: var(--text);

            overflow-x: hidden;
        }

        .main {
            padding-top: 165px;
        }

        .dashboard-hero {
            padding: 20px 0 70px;
        }

        .hero-card {
            background: white;
            border-radius: 35px;
            padding: 45px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .06);
            position: relative;
            overflow: hidden;
        }

        .hero-card::before {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            opacity: .08;
            border-radius: 50%;
            right: -130px;
            top: -150px;
        }

        .hero-card::after {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            background: linear-gradient(135deg, #1d4ed8, #38bdf8);
            opacity: .06;
            border-radius: 50%;
            left: -80px;
            bottom: -120px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 12px;
            color: #111827;
            letter-spacing: -1px;
        }

        .hero-title span {
            color: var(--primary);
        }

        .hero-description {
            font-size: 18px;
            line-height: 1.8;
            max-width: 700px;
            color: #6b7280;
            margin-bottom: 35px;
        }

        .dashboard-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #eff6ff;
            color: #2563eb;
            padding: 12px 22px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 15px;
        }

        .dashboard-badge i {
            font-size: 18px;
        }

        .hero-actions {
            margin-top: 35px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-dashboard {
            padding: 15px 28px;
            border-radius: 16px;
            font-weight: 700;
            transition: .30s;
            border: none;
        }

        .btn-dashboard-primary {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
        }

        .btn-dashboard-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(37, 99, 235, .25);
        }

        .btn-dashboard-outline {
            background: white;
            border: 2px solid #dbeafe;
            color: #2563eb;
        }

        .btn-dashboard-outline:hover {
            background: #eff6ff;
        }

        /* ===========================================================
           CARDS KPI
        =========================================================== */

        .kpi-card {
            position: relative;
            overflow: hidden;
            border: none;
            border-radius: 28px;
            padding: 32px;
            background: white;
            box-shadow: 0 18px 45px rgba(15, 23, 42, .06);
            transition: .35s;
            height: 100%;
        }

        .kpi-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(37, 99, 235, .12);
        }

        .kpi-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #2563eb, #38bdf8);
        }

        .kpi-icon {
            width: 72px;
            height: 72px;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 22px;
            color: #fff;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            box-shadow: 0 10px 25px rgba(37, 99, 235, .25);
        }

        .kpi-value {
            font-size: 42px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 8px;
            color: #111827;
        }

        .kpi-title {
            font-size: 15px;
            font-weight: 600;
            color: #6b7280;
            margin-bottom: 0;
        }

        .kpi-growth {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 18px;
            padding: 8px 14px;
            border-radius: 30px;
            background: #f0fdf4;
            color: #16a34a;
            font-size: 13px;
            font-weight: 700;
        }

        /* ===========================================================
           SEÇÕES
        =========================================================== */

        .dashboard-section {
            margin-top: 55px;
        }

        .section-title {
            font-size: 34px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 8px;
            letter-spacing: -.5px;
        }

        .section-description {
            font-size: 16px;
            color: #6b7280;
            margin-bottom: 35px;
        }

        /* ===========================================================
           CARD PADRÃO
        =========================================================== */

        .dashboard-card {
            background: #fff;
            border: none;
            border-radius: 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .05);
            overflow: hidden;
        }

        .dashboard-card-header {
            padding: 35px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }

        .dashboard-card-header h3 {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }

        .dashboard-card-header p {
            margin-top: 5px;
            margin-bottom: 0;
            opacity: .85;
            font-size: 14px;
        }

        .header-icon {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, .15);
            font-size: 28px;
        }

        /* ===========================================================
           TABELA
        =========================================================== */

        .table-dashboard {
            margin: 0;
            vertical-align: middle;
        }

        .table-dashboard thead th {
            padding: 22px;
            background: #f8fafc;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .7px;
            color: #6b7280;
            border: none;
        }

        .table-dashboard tbody td {
            padding: 24px 22px;
            border-top: 1px solid #eef2f7;
        }

        .table-dashboard tbody tr {
            transition: .25s;
        }

        .table-dashboard tbody tr:hover {
            background: #f8fbff;
        }

        .pet-avatar {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eff6ff;
            color: #2563eb;
            font-size: 22px;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .pet-info {
            display: flex;
            align-items: center;
        }

        .pet-info strong {
            display: block;
            font-size: 16px;
        }

        .pet-info small {
            color: #6b7280;
        }

        /* ===========================================================
           BADGES DE STATUS
        =========================================================== */

        .status-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .status-pendente {
            background: #fff7e6;
            color: #d97706;
            border: 1px solid #fde68a;
        }

        .status-concluido {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid #a7f3d0;
        }

        .status-cancelado {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }

        .status-andamento {
            background: #eff6ff;
            color: #2563eb;
            border: 1px solid #bfdbfe;
        }

        /* ===========================================================
           BOTÕES DE AÇÃO
        =========================================================== */

        .btn-action {
            width: 44px;
            height: 44px;
            border: none;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            transition: .30s;
            cursor: pointer;
        }

        .btn-view {
            background: #eff6ff;
            color: #2563eb;
        }

        .btn-view:hover {
            background: #2563eb;
            color: #fff;
            transform: translateY(-3px);
        }

        .btn-edit {
            background: #fef3c7;
            color: #d97706;
        }

        .btn-edit:hover {
            background: #d97706;
            color: #fff;
            transform: translateY(-3px);
        }

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
        }

        .btn-delete:hover {
            background: #dc2626;
            color: #fff;
            transform: translateY(-3px);
        }

        /* ===========================================================
           AÇÕES RÁPIDAS
        =========================================================== */

        .quick-card {
            background: #fff;
            border-radius: 24px;
            padding: 30px;
            text-align: center;
            border: 1px solid #eef2f7;
            transition: .35s;
            height: 100%;
            cursor: pointer;
        }

        .quick-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 45px rgba(37, 99, 235, .12);
            border-color: #dbeafe;
        }

        .quick-icon {
            width: 75px;
            height: 75px;
            margin: auto;
            margin-bottom: 22px;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: #fff;
            font-size: 30px;
            box-shadow: 0 12px 28px rgba(37, 99, 235, .20);
        }

        .quick-card h5 {
            font-weight: 700;
            margin-bottom: 10px;
            color: #111827;
        }

        .quick-card p {
            margin: 0;
            color: #6b7280;
            font-size: 15px;
            line-height: 1.6;
        }

        /* ===========================================================
           EMPTY STATE
        =========================================================== */

        .empty-state {
            padding: 70px 20px;
            text-align: center;
        }

        .empty-icon {
            width: 120px;
            height: 120px;
            margin: auto;
            margin-bottom: 25px;
            border-radius: 50%;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: #9ca3af;
        }

        .empty-state h4 {
            font-weight: 800;
            margin-bottom: 12px;
        }

        .empty-state p {
            max-width: 500px;
            margin: auto;
            color: #6b7280;
            line-height: 1.8;
        }

        /* ===========================================================
           FOOTER
        =========================================================== */

        .footer-dashboard {
            margin-top: 90px;
            padding: 40px 0;
            text-align: center;
            color: #94a3b8;
            font-size: 15px;
        }

        /* ===========================================================
           SCROLLBAR
        =========================================================== */

        ::-webkit-scrollbar {
            width: 9px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 50px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>

</head>

<body class="index-page">

    <!-- =========================================================
    HEADER
    ========================================================== -->
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
            style="width:50px;height:50px;position:fixed;bottom:20px;right:20px;z-index:999;font-size:24px;">

            <i class="bi bi-arrow-up-short"></i>

        </a>

        <!-- Branding -->
        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">

                <a href="{{ route('index') }}" class="logo d-flex align-items-center">
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
    ========================================================== -->

    <main class="main">

        <!-- HERO -->

        <section class="dashboard-hero py-4">

    <div class="container">

        <div class="hero-card">

            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <div>

                    <span class="dashboard-badge mb-2 d-inline-flex">
                        <i class="fa-solid fa-shield-dog me-2"></i>
                        Painel Administrativo
                    </span>

                    <h2 class="hero-title mb-2">
                        Olá, <span>{{ session('nome') }}</span> 
                    </h2>

                    <p class="hero-description mb-0">
                        Bem-vindo ao painel de controle dos funcionários. Gerencie agendamentos, serviços e acompanhe as atividades do petshop.
                    </p>

                </div>

                <div class="mt-3 mt-lg-0">

                    <a href="{{ route('funcionario.agendamentos') }}"
                        class="btn btn-dashboard btn-dashboard-primary">

                        <i class="fa-solid fa-calendar-check me-2"></i>
                        Agendamentos

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

        <!-- KPIs -->
        <section class="dashboard-section">

            <div class="container">

                <div class="row g-4">
                    <!-- ============================
                        CARD 01
                    ============================= -->

                    <div class="col-lg-3 col-md-6">

                        <div class="kpi-card">

                            <div class="kpi-icon">

                                <i class="fa-solid fa-calendar-check"></i>

                            </div>

                            <div class="kpi-value">

                                {{ $agendamentosHoje }}

                            </div>

                            <p class="kpi-title">

                                Agendamentos Hoje

                            </p>

                            <div class="kpi-growth">

                                <i class="fa-solid fa-circle-check"></i>

                                Atualizado em tempo real

                            </div>

                        </div>

                    </div>

                    <!-- ============================
                        CARD 02
                    ============================= -->

                    <div class="col-lg-3 col-md-6">

                        <div class="kpi-card">

                            <div class="kpi-icon"
                                style="background:linear-gradient(135deg,#10b981,#34d399);">

                                <i class="fa-solid fa-paw"></i>

                            </div>

                            <div class="kpi-value">

                                {{ $pets }}

                            </div>

                            <p class="kpi-title">

                                Pets Cadastrados

                            </p>

                            <div class="kpi-growth"
                                style="background:#ecfdf5;color:#059669;">

                                <i class="fa-solid fa-heart"></i>

                                Base de clientes

                            </div>

                        </div>

                    </div>

                    <!-- ============================
                        CARD 03
                    ============================= -->

                    <div class="col-lg-3 col-md-6">

                        <div class="kpi-card">

                            <div class="kpi-icon"
                                style="background:linear-gradient(135deg,#f59e0b,#fbbf24);">

                                <i class="fa-solid fa-clock"></i>

                            </div>

                            <div class="kpi-value">

                                {{ $pendentes }}

                            </div>

                            <p class="kpi-title">

                                Serviços Pendentes

                            </p>

                            <div class="kpi-growth"
                                style="background:#fff7ed;color:#ea580c;">

                                <i class="fa-solid fa-hourglass-half"></i>

                                Aguardando atendimento

                            </div>

                        </div>

                    </div>

                    <!-- ============================
                        CARD 04
                    ============================= -->

                    <div class="col-lg-3 col-md-6">

                        <div class="kpi-card">

                            <div class="kpi-icon"
                                style="background:linear-gradient(135deg,#8b5cf6,#7c3aed);">

                                <i class="fa-solid fa-users"></i>

                            </div>

                            <div class="kpi-value">

                                {{ $funcionarios }}

                            </div>

                            <p class="kpi-title">

                                Funcionários

                            </p>

                            <div class="kpi-growth"
                                style="background:#f5f3ff;color:#7c3aed;">

                                <i class="fa-solid fa-user-group"></i>

                                Equipe ativa

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- =====================================================
            ÚLTIMOS AGENDAMENTOS
        ====================================================== -->

        <section class="dashboard-section">

            <div class="container">

                <div class="dashboard-card">

                    <div class="dashboard-card-header">

                        <div>

                            <h3>

                                Últimos Agendamentos

                            </h3>

                            <p>

                                Visualize rapidamente os atendimentos mais
                                recentes do petshop.

                            </p>

                        </div>

                        <div class="header-icon">

                            <i class="fa-solid fa-calendar-days"></i>

                        </div>

                    </div>

                    <div class="card-body p-0">

                        <div class="table-responsive">

                            <table class="table table-dashboard mb-0">

                                <thead>

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

                                            <!-- PET -->
                                            <td data-label="Pet">

                                                <div class="pet-info">

                                                    <div class="pet-avatar">

                                                        <i class="fa-solid
                                                            {{ ($agendamento->pet->especie ?? '') == 'Gato'
                                                                ? 'fa-cat'
                                                                : 'fa-dog' }}">
                                                        </i>

                                                    </div>

                                                    <div>

                                                        <strong>

                                                            {{ $agendamento->pet->nome ?? '-' }}

                                                        </strong>

                                                        <small>

                                                            {{ $agendamento->pet->raca ?? 'Raça não informada' }}

                                                        </small>

                                                    </div>

                                                </div>

                                            </td>

                                            <!-- SERVIÇO -->
                                            <td data-label="Serviço">

                                                <span class="fw-semibold">

                                                    {{ $agendamento->servico->nome ?? '-' }}

                                                </span>

                                            </td>

                                            <!-- FUNCIONÁRIO -->
                                            <td data-label="Funcionário">

                                                <div class="d-flex align-items-center gap-2">

                                                    <i class="fa-solid fa-user text-primary"></i>

                                                    {{ $agendamento->funcionario->nome ?? '-' }}

                                                </div>

                                            </td>

                                            <!-- DATA -->
                                            <td data-label="Data">

                                                <strong>

                                                    {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->format('d/m/Y') }}

                                                </strong>

                                                <br>

                                                <small class="text-muted">

                                                    <i class="fa-regular fa-clock me-1"></i>

                                                    {{ $agendamento->horario }}

                                                </small>

                                            </td>

                                            <!-- STATUS -->
                                            <td data-label="Status">

                                                @if($agendamento->status_agendamento == 'Pendente')

                                                    <span class="status-badge status-pendente">

                                                        <i class="fa-solid fa-clock me-2"></i>

                                                        Pendente

                                                    </span>

                                                @elseif($agendamento->status_agendamento == 'Concluido')

                                                    <span class="status-badge status-concluido">

                                                        <i class="fa-solid fa-circle-check me-2"></i>

                                                        Concluído

                                                    </span>

                                                @elseif($agendamento->status_agendamento == 'Cancelado')

                                                    <span class="status-badge status-cancelado">

                                                        <i class="fa-solid fa-circle-xmark me-2"></i>

                                                        Cancelado

                                                    </span>

                                                @else

                                                    <span class="status-badge status-andamento">

                                                        <i class="fa-solid fa-spinner me-2"></i>

                                                        {{ $agendamento->status_agendamento }}

                                                    </span>

                                                @endif

                                            </td>

                                        </tr>

                                    @empty

                                        <tr>

                                            <td colspan="5">

                                                <div class="empty-state">

                                                    <div class="empty-icon">

                                                        <i class="fa-solid fa-calendar-xmark"></i>

                                                    </div>

                                                    <h4>

                                                        Nenhum agendamento encontrado

                                                    </h4>

                                                    <p>

                                                        Ainda não existem agendamentos cadastrados.
                                                        Quando um cliente realizar um novo agendamento,
                                                        ele aparecerá automaticamente nesta lista.

                                                    </p>

                                                </div>

                                            </td>

                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- =====================================================
        AÇÕES RÁPIDAS
        ====================================================== -->

        <section class="dashboard-section">

            <div class="container">

                <h2 class="section-title">

                    Ações Rápidas

                </h2>

                <p class="section-description">

                    Acesse rapidamente as principais funcionalidades do sistema.

                </p>

                <div class="row g-4">

                    <div class="col-lg-4 col-md-6">

                        <a href="{{ route('funcionario.agendamentos') }}"
                            class="text-decoration-none">

                            <div class="quick-card">

                                <div class="quick-icon">

                                    <i class="fa-solid fa-calendar-days"></i>

                                </div>

                                <h5>

                                    Agendamentos

                                </h5>

                                <p>

                                    Gerencie todos os atendimentos do petshop.

                                </p>

                            </div>

                        </a>

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <a href="{{ route('services.create') }}"
                            class="text-decoration-none">

                            <div class="quick-card">

                                <div class="quick-icon">

                                    <i class="fa-solid fa-scissors"></i>

                                </div>

                                <h5>

                                    Novo Serviço

                                </h5>

                                <p>

                                    Cadastre rapidamente um novo serviço para disponibilizar aos clientes.

                                </p>

                            </div>

                        </a>

                    </div>

                    <div class="col-lg-4 col-md-12">

                        <a href="{{ route('logout') }}"
                            class="text-decoration-none">

                            <div class="quick-card">

                                <div class="quick-icon"
                                    style="background:linear-gradient(135deg,#ef4444,#dc2626);">

                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>

                                </div>

                                <h5>

                                    Encerrar Sessão

                                </h5>

                                <p>

                                    Finalize sua sessão com segurança e retorne à tela de login.

                                </p>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <!-- =====================================================
    FOOTER
    ====================================================== -->

    <footer id="footer" class="footer-16 footer position-relative">


              <div class="container">


                  <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
                      <div class="row">
                          <div class="col-md-6 align-items-start">
                              <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                                  <h1 class="sitename">Mobipet</h1>
                              </a>
                              <p class="brand-description">Obrigado pela confiança. Estamos prontos para cuidar do seu
                                  melhor amigo!</p>
                          </div>
                          <div class="col-md-6 align-items-end">
                              <p><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú - SP</span>
                              </p>
                              <p><span><i class="bi bi-telephone"></i> (19)98943-2384</span></p>
                              <p><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
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

    <!-- =====================================================
    PRELOADER
    ====================================================== -->

    <div id="preloader"></div>

    <!-- =====================================================
    VLIBRAS
    ====================================================== -->

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

    <!-- =====================================================
    SCRIPTS
    ====================================================== -->

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (typeof AOS !== "undefined") {
                AOS.init({
                    duration: 900,
                    once: true,
                    easing: "ease-in-out"
                });
            }
        });
    </script>

</body>

</html>