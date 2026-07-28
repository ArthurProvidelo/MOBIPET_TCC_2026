<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agenda | Mobipet</title>

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
          <h1 class="hero-title">Agenda de Agendamentos</h1>
          <p class="hero-subtitle">
            Navegue por mês e dia para ver os atendimentos marcados, no estilo do Calendário do iPhone.
          </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card agendamento-card" data-aos="zoom-in" data-aos-delay="200">

              <div class="card-header">
                <div class="d-flex align-items-center gap-3">
                  <div class="header-icon">
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <div>
                    <h3 class="text-white mb-0">Agenda por Mês</h3>
                    <p class="mb-0 text-metod" style="color: rgba(255,255,255,0.7);">Selecione um mês para ver os dias com atendimentos.</p>
                  </div>
                </div>
              </div>

              <div class="card-body">

                @if (empty($agenda))

                  <div class="text-center py-5">
                    <div class="mb-3 text-muted fs-1">
                      <i class="fa-solid fa-calendar-xmark"></i>
                    </div>
                    <h5 class="text-muted fw-semibold">
                      Nenhum agendamento encontrado.
                    </h5>
                  </div>

                @else

                  <div class="months-list" id="monthsList">

                    @foreach ($agenda as $nomeMes => $mesDados)
                      @php
                        $mesSlug = \Illuminate\Support\Str::slug($nomeMes);
                        $totalMes = $mesDados['total_agendamentos'] ?? 0;
                      @endphp

                      <div class="month-card" data-month="{{ $mesSlug }}">

                        <button type="button"
                                class="month-card__header"
                                aria-expanded="false"
                                data-toggle="month"
                                data-target="month-{{ $mesSlug }}">

                          <span class="month-card__icon">
                            <i class="fa-solid fa-calendar"></i>
                          </span>

                          <span class="month-card__name">{{ $nomeMes }}</span>

                          <span class="month-card__count">
                            {{ $totalMes }} {{ $totalMes === 1 ? 'agendamento' : 'agendamentos' }}
                          </span>

                          <span class="month-card__chevron">
                            <i class="fa-solid fa-chevron-down"></i>
                          </span>
                        </button>

                        <div class="month-card__body" id="month-{{ $mesSlug }}">
                          <div class="month-card__body-inner">

                            <div class="days-list">
                              @foreach (($mesDados['dias'] ?? []) as $diaDados)
                                @php
                                  $diaSlug = $mesSlug . '-' . \Illuminate\Support\Str::slug($diaDados['data'] ?? $diaDados['dia']);
                                  $qtdDia = count($diaDados['agendamentos'] ?? []);
                                @endphp

                                <div class="day-item" data-day="{{ $diaSlug }}">

                                  <button type="button"
                                          class="day-item__header"
                                          aria-expanded="false"
                                          data-toggle="day"
                                          data-target="day-{{ $diaSlug }}">

                                    <span class="day-item__date">
                                      <span class="day-item__weekday">{{ $diaDados['dia_semana'] }}</span>
                                      <span class="day-item__number">{{ $diaDados['dia'] }}</span>
                                    </span>

                                    <span class="day-item__count">
                                      {{ $qtdDia }} {{ $qtdDia === 1 ? 'atendimento' : 'atendimentos' }}
                                    </span>

                                    <span class="day-item__chevron">
                                      <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                                  </button>

                                  <div class="day-item__body" id="day-{{ $diaSlug }}">
                                    <div class="day-item__body-inner">

                                      <div class="appointments-list">
                                        @foreach (($diaDados['agendamentos'] ?? []) as $i => $ag)
                                          @php
                                            $status = strtolower($ag['status']);
                                            $statusMap = [
                                                'agendado'  => ['label' => 'Agendado',     'classe' => 'bg-primary-subtle text-primary',   'icone' => 'fa-calendar'],
                                                'andamento' => ['label' => 'Em andamento', 'classe' => 'bg-warning-subtle text-warning-dark', 'icone' => 'fa-spinner fa-spin'],
                                                'concluido' => ['label' => 'Concluído',    'classe' => 'bg-success-subtle text-success',   'icone' => 'fa-circle-check'],
                                                'cancelado' => ['label' => 'Cancelado',    'classe' => 'bg-danger-subtle text-danger',     'icone' => 'fa-circle-xmark'],
                                            ];
                                            $statusInfo = $statusMap[$status] ?? $statusMap['agendado'];
                                          @endphp

                                          <div class="appointment-card" style="--stagger: {{ $i }}">
                                            <div class="appointment-card__time">
                                              <span class="horario-badge">{{ $ag['horario'] }}</span>
                                            </div>

                                            <div class="appointment-card__content">
                                              <div class="appointment-card__top">
                                                <span class="appointment-card__pet">
                                                  <i class="fa-solid fa-paw me-1 text-primary"></i>{{ $ag['pet'] }} - {{  $ag['especie']}}
                                                </span>
                                                <span class="badge badge-status {{ $statusInfo['classe'] }}">
                                                  <i class="fa-solid {{ $statusInfo['icone'] }} me-1"></i>{{ $statusInfo['label'] }}
                                                </span>
                                              </div>

                                              <div class="appointment-card__meta">
                                                <span class="appointment-card__meta-item">
                                                  <i class="fa-solid fa-user"></i> {{ $ag['tutor'] }}
                                                </span>
                                                <span class="appointment-card__meta-item">
                                                  <span class="servico-tag">{{ $ag['servico'] }}</span>
                                                </span>
                                                <span class="appointment-card__meta-item">
                                                  <i class="fa-solid fa-id-badge"></i> {{ $ag['funcionario'] }}
                                                </span>
                                              </div>

                                              @if (!empty($ag['observacao']))
                                                <p class="appointment-card__note">{{ $ag['observacao'] }}</p>
                                              @endif
                                            </div>
                                          </div>
                                        @endforeach
                                      </div>

                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>

                          </div>
                        </div>
                      </div>
                    @endforeach

                  </div>

                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <style>

    body{
      background: #f7f9fc;
      font-family: 'Montserrat', sans-serif;
    }

    .agendamento-section{
      padding: 180px 0 100px;
      background:
      radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
      radial-gradient(circle at bottom left, #ffffff 0%, transparent 30%);
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

    .horario-badge {
      background-color: #f8fafc;
      border: 1px solid #e2e8f0;
      padding: 6px 12px;
      border-radius: 10px;
      font-family: monospace;
      font-size: 14px;
      font-weight: 600;
      white-space: nowrap;
    }

    .servico-tag {
      background: #eff6ff;
      color: #2563eb;
      padding: 4px 12px;
      border-radius: 10px;
      font-weight: 600;
      font-size: 13px;
    }

    .badge-status {
      padding: 8px 14px;
      border-radius: 12px;
      font-size: 13px;
      font-weight: 600;
    }

    .bg-primary-subtle { background-color: #eff6ff !important; }
    .bg-warning-subtle { background-color: #fefce8 !important; }
    .bg-success-subtle { background-color: #f0fdf4 !important; }
    .bg-danger-subtle { background-color: #fef2f2 !important; }
    .text-warning-dark { color: #854d0e !important; }

    /* ==========================================================
       Accordion Mês > Dia > Agendamentos
       ========================================================== */

    .months-list{
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .month-card{
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      overflow: hidden;
      transition: box-shadow 300ms ease, border-color 300ms ease;
    }

    .month-card:hover{
      box-shadow: 0 8px 20px rgba(17,24,39,0.06);
    }

    .month-card.is-open{
      border-color: #2563eb;
      background: #ffffff;
      box-shadow: 0 12px 30px rgba(37,99,235,0.10);
    }

    .month-card__header{
      width: 100%;
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 18px 20px;
      background: transparent;
      border: none;
      cursor: pointer;
      text-align: left;
      font-family: 'Montserrat', sans-serif;
      min-height: 48px;
      transition: transform 150ms ease;
    }

    .month-card__header:active{
      transform: scale(0.98);
    }

    .month-card__icon{
      width: 36px;
      height: 36px;
      flex-shrink: 0;
      border-radius: 10px;
      background: #eff6ff;
      color: #2563eb;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .month-card__name{
      font-size: 17px;
      font-weight: 700;
      color: #111827;
      flex: 1;
    }

    .month-card__count{
      font-size: 13px;
      font-weight: 500;
      color: #6b7280;
      white-space: nowrap;
    }

    .month-card__chevron{
      color: #6b7280;
      display: flex;
      transition: transform 300ms ease;
      flex-shrink: 0;
    }

    .month-card.is-open .month-card__chevron{
      transform: rotate(180deg);
      color: #2563eb;
    }

    .month-card__body{
      max-height: 0;
      overflow: hidden;
      transition: max-height 300ms ease;
    }

    .month-card__body-inner{
      padding: 0 20px 18px;
    }

    .days-list{
      display: flex;
      flex-direction: column;
      gap: 8px;
      padding-top: 6px;
      border-top: 1px solid #eef0f3;
    }

    .day-item{
      border-radius: 14px;
      background: #f7f9fc;
      overflow: hidden;
      transition: background 250ms ease;
    }

    .day-item:first-child{ margin-top: 12px; }

    .day-item.is-open{
      background: #ffffff;
      box-shadow: 0 0 0 1px #eef0f3;
    }

    .day-item__header{
      width: 100%;
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 12px 14px;
      background: transparent;
      border: none;
      cursor: pointer;
      text-align: left;
      font-family: 'Montserrat', sans-serif;
      min-height: 48px;
      border-radius: 14px;
      transition: background 200ms ease, transform 150ms ease;
    }

    .day-item__header:hover{
      background: rgba(37,99,235,0.05);
      transform: translateY(-1px);
    }

    .day-item__header:active{
      transform: scale(0.98);
    }

    .day-item__date{
      display: flex;
      align-items: baseline;
      gap: 8px;
      min-width: 128px;
    }

    .day-item__weekday{
      font-size: 13px;
      font-weight: 500;
      color: #6b7280;
    }

    .day-item__number{
      font-size: 15px;
      font-weight: 700;
      color: #111827;
    }

    .day-item__count{
      font-size: 13px;
      color: #6b7280;
      flex: 1;
    }

    .day-item__chevron{
      color: #6b7280;
      display: flex;
      transition: transform 250ms ease;
      flex-shrink: 0;
    }

    .day-item.is-open .day-item__chevron{
      transform: rotate(180deg);
      color: #2563eb;
    }

    .day-item__body{
      max-height: 0;
      overflow: hidden;
      transition: max-height 250ms ease;
    }

    .day-item__body-inner{
      padding: 4px 12px 14px;
    }

    .appointments-list{
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .appointment-card{
      display: flex;
      gap: 14px;
      background: #ffffff;
      border: 1px solid #eef0f3;
      border-radius: 14px;
      padding: 14px 16px;
      opacity: 0;
      transform: translateY(6px);
      animation: cardAppear 320ms ease forwards;
      animation-delay: calc(var(--stagger, 0) * 55ms);
      transition: transform 200ms ease, box-shadow 200ms ease;
    }

    .appointment-card:hover{
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(17,24,39,0.07);
    }

    @keyframes cardAppear{
      to{ opacity: 1; transform: translateY(0); }
    }

    .appointment-card__time{
      flex-shrink: 0;
      padding-top: 2px;
    }

    .appointment-card__content{
      flex: 1;
      min-width: 0;
    }

    .appointment-card__top{
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      margin-bottom: 6px;
    }

    .appointment-card__pet{
      font-size: 15px;
      font-weight: 700;
      color: #111827;
    }

    .appointment-card__meta{
      display: flex;
      flex-wrap: wrap;
      gap: 6px 14px;
      margin-bottom: 4px;
      font-size: 13px;
      color: #6b7280;
      font-weight: 500;
    }

    .appointment-card__meta-item{
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .appointment-card__note{
      font-size: 12.5px;
      color: #6b7280;
      background: #f7f9fc;
      border-radius: 10px;
      padding: 8px 10px;
      margin: 6px 0 0;
      line-height: 1.4;
    }

    @media (max-width: 768px){
      .month-card__count{ display: none; }
      .day-item__date{ min-width: 96px; }
      .appointment-card{ flex-direction: column; }
    }

    @media (prefers-reduced-motion: reduce){
      *, *::before, *::after{
        animation-duration: 0.001ms !important;
        transition-duration: 0.001ms !important;
      }
    }

  </style>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <script>
    AOS.init();

    (function () {
      'use strict';

      function expandPanel(panel) {
        panel.style.maxHeight = panel.scrollHeight + 'px';
      }

      function collapsePanel(panel) {
        panel.style.maxHeight = panel.scrollHeight + 'px';
        requestAnimationFrame(function () {
          panel.style.maxHeight = '0px';
        });
      }

      document.addEventListener('DOMContentLoaded', function () {
        var monthCards = document.querySelectorAll('.month-card');

        monthCards.forEach(function (monthCard) {
          var monthHeader = monthCard.querySelector(':scope > .month-card__header');
          var monthBody = monthCard.querySelector(':scope > .month-card__body');

          monthHeader.addEventListener('click', function () {
            var isOpen = monthCard.classList.contains('is-open');

            monthCards.forEach(function (otherCard) {
              if (otherCard !== monthCard && otherCard.classList.contains('is-open')) {
                closeMonth(otherCard);
              }
            });

            isOpen ? closeMonth(monthCard) : openMonth(monthCard);
          });

          var dayItems = monthCard.querySelectorAll('.day-item');

          dayItems.forEach(function (dayItem) {
            var dayHeader = dayItem.querySelector(':scope > .day-item__header');

            dayHeader.addEventListener('click', function (event) {
              event.stopPropagation();

              var isOpenDay = dayItem.classList.contains('is-open');

              dayItems.forEach(function (otherDay) {
                if (otherDay !== dayItem && otherDay.classList.contains('is-open')) {
                  closeDay(otherDay);
                }
              });

              isOpenDay ? closeDay(dayItem) : openDay(dayItem);

              if (monthCard.classList.contains('is-open')) {
                requestAnimationFrame(function () {
                  expandPanel(monthBody);
                });
              }
            });
          });
        });

        function openMonth(monthCard) {
          var header = monthCard.querySelector(':scope > .month-card__header');
          var body = monthCard.querySelector(':scope > .month-card__body');
          monthCard.classList.add('is-open');
          header.setAttribute('aria-expanded', 'true');
          expandPanel(body);
        }

        function closeMonth(monthCard) {
          var header = monthCard.querySelector(':scope > .month-card__header');
          var body = monthCard.querySelector(':scope > .month-card__body');
          monthCard.classList.remove('is-open');
          header.setAttribute('aria-expanded', 'false');
          collapsePanel(body);

          var openDay = monthCard.querySelector('.day-item.is-open');
          if (openDay) closeDay(openDay);
        }

        function openDay(dayItem) {
          var header = dayItem.querySelector(':scope > .day-item__header');
          var body = dayItem.querySelector(':scope > .day-item__body');
          dayItem.classList.add('is-open');
          header.setAttribute('aria-expanded', 'true');
          expandPanel(body);
        }

        function closeDay(dayItem) {
          var header = dayItem.querySelector(':scope > .day-item__header');
          var body = dayItem.querySelector(':scope > .day-item__body');
          dayItem.classList.remove('is-open');
          header.setAttribute('aria-expanded', 'false');
          collapsePanel(body);
        }

        window.addEventListener('resize', function () {
          document.querySelectorAll('.month-card.is-open > .month-card__body, .day-item.is-open > .day-item__body').forEach(function (panel) {
            panel.style.maxHeight = panel.scrollHeight + 'px';
          });
        });
      });
    })();
  </script>

</body>

</html>