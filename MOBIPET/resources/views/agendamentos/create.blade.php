<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agendamento | Mobipet</title>
  <meta name="description" content="Agende banho, tosa e outros atendimentos para o seu pet na Mobipet.">
  <meta name="keywords" content="agendamento mobipet, agendar atendimento pet, banho e tosa">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo_favicon_transparent.png') }}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">

  <style>
    /* ===========================================================
       AGENDAMENTO — MOBIPET  ·  isolado (prefixo pt-)
       mesmo sistema tipográfico/visual de devs.blade.php, das telas
       de recuperação de senha (rs-/rd-) e do cadastro/edição de pet.
       =========================================================== */
    .pt-page {
      --pt-accent: #175cdd;
      --pt-accent-dark: #0f47b3;
      --pt-accent-soft: #eaf1fe;
      --pt-ink: #0f1b34;
      --pt-body: #4a5568;
      --pt-muted: #8794a7;
      --pt-line: #e6ecf5;
      --pt-bg: #f7f9ff;
      --pt-radius: 26px;
      --pt-radius-sm: 14px;
      --pt-shadow-sm: 0 10px 30px -14px rgba(15, 27, 52, .2);
      --pt-shadow: 0 40px 90px -40px rgba(23, 92, 221, .4);

      font-family: "Roboto", system-ui, -apple-system, "Segoe UI", sans-serif;
      color: var(--pt-body);
    }

    .pt-page h1,
    .pt-page h2,
    .pt-page h3,
    .pt-page h4 {
      font-family: "Montserrat", sans-serif;
      color: var(--pt-ink);
      letter-spacing: -0.022em;
      line-height: 1.12;
    }

    /* Barra de progresso de rolagem (padrão do site) */
    .pt-progress {
      position: fixed;
      top: 0;
      left: 0;
      height: 3px;
      width: 0;
      background: linear-gradient(90deg, var(--pt-accent), #4ade80);
      z-index: 1100;
      transition: width .12s linear;
    }

    /* Rótulo de seção */
    .pt-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      font-family: "Lato", sans-serif;
      font-weight: 700;
      font-size: .78rem;
      letter-spacing: .16em;
      text-transform: uppercase;
      color: var(--pt-accent);
      margin-bottom: 14px;
    }

    .pt-eyebrow::before {
      content: "";
      width: 26px;
      height: 2px;
      background: currentColor;
    }

    .pt-eyebrow .pt-idx {
      color: var(--pt-muted);
    }

    /* =========================================================
       FUNDO / HERO
       ========================================================= */
    .pt-hero {
      padding: 170px 0 100px;
      background:
        radial-gradient(circle at top right, #dbeafe 0%, transparent 30%),
        radial-gradient(circle at bottom left, #dcfce7 0%, transparent 30%),
        var(--pt-bg);
      min-height: 100vh;
    }

    .pt-wrap {
      width: min(880px, 92%);
      margin-inline: auto;
    }

    .pt-hero-head {
      text-align: center;
      max-width: 640px;
      margin: 0 auto 44px;
    }

    .pt-h1 {
      font-size: clamp(2rem, 4.4vw, 2.9rem);
      font-weight: 800;
      margin: 0 0 14px;
    }

    .pt-lead {
      font-size: 1.02rem;
      color: var(--pt-muted);
      line-height: 1.65;
      margin: 0;
    }

    /* =========================================================
       ALERTAS
       ========================================================= */
    .pt-alert {
      border-radius: var(--pt-radius-sm);
      border: none;
      padding: 16px 18px;
      font-size: .92rem;
      margin-bottom: 22px;
    }

    /* =========================================================
       CARD / FORMULÁRIO
       ========================================================= */
    .pt-card {
      background: #fff;
      border-radius: var(--pt-radius);
      box-shadow: var(--pt-shadow);
      padding: clamp(28px, 5vw, 54px);
    }

    .pt-required-note {
      font-family: "Lato", sans-serif;
      font-size: .85rem;
      color: var(--pt-muted);
      margin-bottom: 28px;
    }

    .pt-required-mark {
      color: #dc2626;
      font-weight: 700;
    }

    .pt-section-title {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 24px;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--pt-ink);
    }

    .pt-section-title:not(:first-of-type) {
      margin-top: 34px;
    }

    .pt-section-title i {
      width: 42px;
      height: 42px;
      flex-shrink: 0;
      background: linear-gradient(135deg, var(--pt-accent), #3b82f6);
      color: #fff;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
    }

    .pt-page label {
      font-family: "Lato", sans-serif;
      font-weight: 700;
      font-size: .72rem;
      letter-spacing: .06em;
      text-transform: uppercase;
      color: var(--pt-muted);
      margin-bottom: 8px;
      display: inline-block;
    }

    .pt-page .form-control,
    .pt-page .form-select {
      min-height: 56px;
      border-radius: 16px;
      border: 1px solid var(--pt-line);
      background-color: var(--pt-bg);
      padding: 14px 18px;
      font-size: .96rem;
      color: var(--pt-ink);
      transition: border-color .25s ease, box-shadow .25s ease, background-color .25s ease;
      box-shadow: none !important;
    }

    .pt-page textarea.form-control {
      min-height: auto;
    }

    .pt-page .form-control:focus,
    .pt-page .form-select:focus {
      border-color: var(--pt-accent);
      background-color: #fff;
      box-shadow: 0 0 0 4px var(--pt-accent-soft) !important;
    }

    .pt-page .invalid-feedback {
      font-family: "Lato", sans-serif;
      font-weight: 600;
      font-size: .82rem;
      text-transform: none;
      letter-spacing: 0;
    }

    /* =========================================================
       BOTÕES (sistema consistente — padrão devs / rs / rd)
       ========================================================= */
    .pt-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
      font-size: .96rem;
      padding: 15px 28px;
      border-radius: 999px;
      border: 1.5px solid transparent;
      text-decoration: none;
      cursor: pointer;
      transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease, border-color .2s ease;
    }

    .pt-btn--primary {
      background: var(--pt-accent);
      color: #fff;
      box-shadow: 0 18px 34px -16px rgba(23, 92, 221, .75);
    }

    .pt-btn--primary:hover {
      background: var(--pt-accent-dark);
      color: #fff;
      transform: translateY(-3px);
    }

    .pt-btn--ghost {
      background: transparent;
      color: var(--pt-ink);
      border-color: var(--pt-line);
    }

    .pt-btn--ghost:hover {
      border-color: var(--pt-accent);
      color: var(--pt-accent);
      transform: translateY(-3px);
    }

    .pt-btn--block {
      width: 100%;
      margin-top: 14px;
    }

    .pt-divider {
      border: none;
      border-top: 1px solid var(--pt-line);
      margin: 38px 0 30px;
    }

    /* =========================================================
       RESPONSIVO
       ========================================================= */
    @media (max-width: 768px) {
      .pt-hero {
        padding-top: 140px;
      }

      .pt-card {
        border-radius: 20px;
      }
    }

    /* Mobipet: animações sempre ativas (bloqueio de reduce desligado de propósito). */
    @media (prefers-reduced-motion: reduce) and (max-width: 1px) {

      .pt-page *,
      .pt-page *::before,
      .pt-page *::after {
        animation: none !important;
        transition: none !important;
      }
    }
  </style>

</head>

<body class="index-page">

    @include('partials.preloader')

  <div class="pt-progress" id="ptProgress"></div>

  <!-- =========================================================
  HEADER
  ========================================================= -->

  <header id="header" class="header fixed-top">

    <a href="#" id="scroll-top"
       class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
       style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <h1 class="sitename">Mobipet</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @include('partials.nav-user')
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>

  </header>

  <!-- =========================================================
  MAIN
  ========================================================= -->

  <main class="main pt-page">

    <section class="pt-hero">
      <div class="pt-wrap">

        <div class="pt-hero-head" data-aos="fade-up">
          <span class="pt-eyebrow" style="justify-content:center;"><span class="pt-idx">Atendimento</span> · Novo agendamento</span>
          <h1 class="pt-h1">Agende o atendimento do seu pet</h1>
          <p class="pt-lead">
            Mais praticidade, segurança e monitoramento completo para acompanhar cada etapa do atendimento.
          </p>
        </div>

        @if ($errors->any())
          <div class="pt-alert alert alert-danger shadow-sm" data-aos="fade-up">
            <ul class="mb-0 ps-3">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="pt-card" data-aos="zoom-in" data-aos-delay="100">

          <form action="{{ route('agendamento.store') }}" method="POST">
            @csrf

            <p class="pt-required-note">
              <span class="pt-required-mark">*</span> Todos os campos são obrigatórios
            </p>

            <div class="pt-section-title">
              <i class="fa-solid fa-dog"></i>
              <span>Dados do pet</span>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <label>Nome do pet <span class="pt-required-mark">*</span></label>
                @if($pets->count() > 0)
                  <select name="fk_id_pet" class="form-select @error('fk_id_pet') is-invalid @enderror" required>
                    <option value="">Selecione um pet</option>
                    @foreach($pets as $pet)
                      <option value="{{ $pet->id_pet }}" @selected(old('fk_id_pet') == $pet->id_pet)>{{ $pet->nome }}</option>
                    @endforeach
                  </select>
                  @error('fk_id_pet')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                @else
                  <div class="pt-alert alert alert-warning mb-3">Você ainda não possui pets cadastrados.</div>
                  <a href="{{ route('pets.create') }}" class="pt-btn pt-btn--primary">
                    <i class="fa-solid fa-paw"></i> Cadastrar pet
                  </a>
                @endif
              </div>
            </div>

            <div class="pt-section-title">
              <i class="fa-solid fa-scissors"></i>
              <span>Serviço</span>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <label>Profissional <span class="pt-required-mark">*</span></label>
                <select name="fk_id_funcionario" class="form-select @error('fk_id_funcionario') is-invalid @enderror" required>
                  <option value="">Selecione</option>
                  @foreach($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id_funcionario }}" @selected(old('fk_id_funcionario') == $funcionario->id_funcionario)>{{ $funcionario->nome }}</option>
                  @endforeach
                </select>
                @error('fk_id_funcionario')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6 mb-4">
                <label>Serviço <span class="pt-required-mark">*</span></label>
                <select name="fk_id_servico" class="form-select @error('fk_id_servico') is-invalid @enderror" required>
                  <option value="">Selecione</option>
                  @foreach($servicos as $servico)
                    <option value="{{ $servico->id_servico }}" @selected(old('fk_id_servico') == $servico->id_servico)>{{ $servico->nome }}</option>
                  @endforeach
                </select>
                @error('fk_id_servico')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="pt-section-title">
              <i class="fa-solid fa-calendar-days"></i>
              <span>Data e horário</span>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <label>Data <span class="pt-required-mark">*</span></label>
                <input type="date" name="data_agendamento"
                       value="{{ old('data_agendamento') }}"
                       min="{{ date('Y-m-d') }}"
                       class="form-control @error('data_agendamento') is-invalid @enderror" required>
                @error('data_agendamento')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6 mb-4">
                <label>Hora <span class="pt-required-mark">*</span></label>
                <input type="time" name="horario"
                       value="{{ old('horario') }}"
                       class="form-control @error('horario') is-invalid @enderror" required>
                @error('horario')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="pt-section-title">
              <i class="fa-solid fa-note-sticky"></i>
              <span>Observações</span>
            </div>

            <div class="mb-2">
              <label>Observações <span class="pt-required-mark">*</span></label>
              <textarea name="observacoes" class="form-control @error('observacoes') is-invalid @enderror" rows="5"
                        placeholder="Digite alguma observação, alergia..." required>{{ old('observacoes') }}</textarea>
              @error('observacoes')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <hr class="pt-divider">

            <button type="submit" class="pt-btn pt-btn--primary pt-btn--block">
              <i class="fa-solid fa-calendar-check"></i> Confirmar agendamento
            </button>

          </form>

        </div>

      </div>
    </section>
  </main>

  @include('partials.footer')

  <div id="preloader"></div>

  <!-- =========================================================
  JS
  ========================================================= -->

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof AOS === 'undefined') return;
      AOS.init({ duration: 650, easing: 'ease-out-cubic', once: true, offset: 100 });
    });
  </script>

  <!-- Barra de progresso de rolagem -->
  <script>
    (function () {
      var bar = document.getElementById('ptProgress');
      if (!bar) return;
      function update() {
        var h = document.documentElement;
        var max = h.scrollHeight - h.clientHeight;
        var pct = max > 0 ? (h.scrollTop || document.body.scrollTop) / max * 100 : 0;
        bar.style.width = pct + '%';
      }
      document.addEventListener('scroll', update, { passive: true });
      window.addEventListener('resize', update);
      update();
    })();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if (session('success'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Agendamento concluído',
        text: @json(session('success'))
      });
    </script>
  @endif

  @include('partials.logout-confirm')

</body>

</html>
