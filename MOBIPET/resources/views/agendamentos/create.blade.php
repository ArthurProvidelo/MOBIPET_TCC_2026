<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agendamento - Mobipet</title>

  <!-- Favicons -->
  <link href="assets/img/mobipet_icon.png" rel="icon">

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

    <!-- TOPBAR -->
    <div class="topbar d-flex align-items-center dark-background">

      <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">

          <i class="bi bi-envelope d-flex align-items-center">
            <a href="mailto:mobipet@gmail.com">
              mobipet@gmail.com
            </a>
          </i>

          <i class="bi bi-phone d-flex align-items-center ms-4">
            <span>+19 99999-8888</span>
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

    <!-- NAVBAR -->
    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="{{route('index')}}"
           class="logo d-flex align-items-center text-decoration-none">

          <h1 class="sitename">
            Mobipet
          </h1>

        </a>

        <nav id="navmenu" class="navmenu">

          <ul>

            <li>
              <a href="{{route('index')}}">
                Início
              </a>
            </li>

            <li>
              <a href="{{route('sobre')}}">
                Sobre nós
              </a>
            </li>

            <li>
              <a href="{{route('services')}}">
                Serviços
              </a>
            </li>

            <li>
              <a href="{{route('devs')}}">
                Desenvolvedores
              </a>
            </li>

            <li>
              <a href="{{route('agendamento')}}"
                 class="active">
                Agendamento
              </a>
            </li>

            <li>
              <a href="{{route('contact')}}">
                Contato
              </a>
            </li>

            <li>
              <a href="{{route('perfil')}}">
                Perfil
              </a>
            </li>

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

    <!-- =========================================================
    SECTION AGENDAMENTO
    ========================================================= -->

    <section class="agendamento-section">

      <div class="container">

        <!-- HERO -->
        <div class="hero-agendamento text-center"
             data-aos="fade-up">

          <span class="badge badge-mobipet mb-4">
            Plataforma Inteligente
          </span>

          <h1 class="hero-title">
            Agende o atendimento do seu pet
          </h1>

          <p class="hero-subtitle">
            Mais praticidade, segurança e monitoramento
            completo para acompanhar cada etapa do atendimento.
          </p>

        </div>

        <!-- CARD -->
        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="card agendamento-card"
                 data-aos="zoom-in"
                 data-aos-delay="200">

              <!-- HEADER -->
              <div class="card-header">

                <div class="d-flex align-items-center gap-3">

                  <div class="header-icon">
                    <i class="fa-solid fa-paw"></i>
                  </div>

                  <div>

                    <h3>
                      Agendamento Mobipet
                    </h3>

                    <p class="mb-0">
                      Preencha os dados abaixo para realizar o atendimento.
                    </p>

                  </div>

                </div>

              </div>

              <!-- BODY -->
              <div class="card-body">

                <!-- ALERT -->
                @if(session('success'))

                  <div class="alert alert-success">

                    {{ session('success') }}

                  </div>

                @endif

                <!-- FORM -->
                <form action="{{ route('agendamento.store') }}"
                      method="POST">

                  @csrf
                  <!-- =========================================================
                  DADOS DO PET
                  ========================================================= -->

                  <div class="section-title mt-5">

                    <i class="fa-solid fa-dog"></i>

                    <span>
                      Dados do Pet
                    </span>

                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4">

                      <label>
                        Nome do Pet
                      </label>

                      <input type="text"
                             name="nome_pet"
                             class="form-control"
                             placeholder="Nome do seu pet"
                             required>

                    </div>

                    <div class="col-md-6 mb-4">

                      <label>
                        Tipo do Pet
                      </label>

                      <select name="tipo_pet"
                              class="form-control"
                              required>

                        <option value="">
                          Selecione
                        </option>

                        <option value="Cachorro">
                          Cachorro
                        </option>

                        <option value="Gato">
                          Gato
                        </option>

                        <option value="Outro">
                          Outro
                        </option>

                      </select>

                    </div>

                    <div class="col-md-6 mb-4">

                      <label>
                        Raça
                      </label>

                      <input type="text"
                             name="raca"
                             class="form-control"
                             placeholder="Raça do pet">

                    </div>

                    <div class="col-md-3 mb-4">

                      <label>
                        Idade
                      </label>

                      <input type="number"
                             name="idade"
                             class="form-control"
                             placeholder="Idade">

                    </div>

                    <div class="col-md-3 mb-4">

                      <label>
                        Porte
                      </label>

                      <select name="porte"
                              class="form-control">

                        <option value="">
                          Selecione
                        </option>

                        <option value="Pequeno">
                          Pequeno
                        </option>

                        <option value="Médio">
                          Médio
                        </option>

                        <option value="Grande">
                          Grande
                        </option>

                      </select>

                    </div>

                  </div>

                  <!-- =========================================================
                  SERVIÇO
                  ========================================================= -->

                  <div class="section-title mt-5">

                    <i class="fa-solid fa-scissors"></i>

                    <span>
                      Serviço
                    </span>

                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4">

                      <label>
                        Profissional
                      </label>

                      <select name="profissional"
                              class="form-control"
                              required>

                        <option value="">
                          Selecione
                        </option>

                        <option value="Maria">
                          Maria
                        </option>

                        <option value="Yasmin">
                          Yasmin
                        </option>

                        <option value="Pedro">
                          Pedro
                        </option>

                        <option value="Kauan">
                          Kauan
                        </option>

                        <option value="Rafaela">
                          Rafaela
                        </option>

                      </select>

                    </div>

                    <div class="col-md-6 mb-4">

                      <label>
                        Serviço
                      </label>

                      <select name="servico"
                              class="form-control"
                              required>

                        <option value="">
                          Selecione
                        </option>

                        <option value="Banho">
                          Banho
                        </option>

                        <option value="Hidratação">
                          Hidratação
                        </option>

                        <option value="Secagem">
                          Secagem
                        </option>

                        <option value="Escova">
                          Escova
                        </option>

                      </select>

                    </div>

                  </div>

                  <!-- =========================================================
                  AGENDAMENTO
                  ========================================================= -->

                  <div class="section-title mt-5">

                    <i class="fa-solid fa-calendar-days"></i>

                    <span>
                      Agendamento
                    </span>

                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4">

                      <label>
                        Data
                      </label>

                      <input type="date"
                             name="data"
                             class="form-control"
                             required>

                    </div>

                    <div class="col-md-6 mb-4">

                      <label>
                        Hora
                      </label>

                      <input type="time"
                             name="hora"
                             class="form-control"
                             required>

                    </div>

                  </div>

                  <!-- =========================================================
                  OBSERVAÇÕES
                  ========================================================= -->

                  <div class="section-title mt-5">

                    <i class="fa-solid fa-note-sticky"></i>

                    <span>
                      Observações
                    </span>

                  </div>

                  <div class="mb-4">

                    <textarea name="observacoes"
                              class="form-control"
                              rows="5"
                              placeholder="Digite alguma observação importante..."></textarea>

                  </div>

                  <!-- BOTÃO -->
                  <button type="submit"
                          class="btn btn-primary btn-agendar w-100">

                    <i class="fa-solid fa-calendar-check me-2"></i>

                    Confirmar Agendamento

                  </button>

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

</body>

</html>