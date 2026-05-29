<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mobipet | Serviços</title>

  <link href="assets/img/mobipet_icon.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link
    href="https://fonts.gstatic.com"
    rel="preconnect"
    crossorigin
  >

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  >

  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <style>

    body {
      background: #f5f7fb;
      font-family: 'Roboto', sans-serif;
      overflow-x: hidden;
    }

.hero-modern {
  background:
    radial-gradient(circle at top left, rgba(13, 110, 253, .08), transparent 30%),
    radial-gradient(circle at bottom right, rgba(25, 135, 84, .08), transparent 30%),
    #f5f7fb;

  position: relative;
  min-height: 100vh;
  padding-top: 120px;
}

main {
  margin-top: 40px;
}

    .hero-modern h1 {
      padding-top: 180px !important;
      color: #101828;
      letter-spacing: -3px;
      line-height: 1;
      font-size: 5rem;
    }

    .dashboard-card {
      border: 1px solid rgba(0, 0, 0, .05);
      overflow: hidden;
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, .92);
      box-shadow: 0 30px 70px rgba(15, 23, 42, .08);
    }

    .dashboard-card::before {
      content: "";
      position: absolute;
      width: 260px;
      height: 260px;
      background: rgba(13, 110, 253, .05);
      border-radius: 50%;
      top: -120px;
      right: -120px;
    }

    .online-badge {
      position: absolute;
      top: 30px;
      right: 30px;
      background: linear-gradient(135deg, #198754, #20c997);
      color: white;
      padding: 10px 18px;
      border-radius: 999px;
      font-size: .85rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 15px 40px rgba(25, 135, 84, .25);
    }

    .progress {
      height: 12px;
      border-radius: 999px;
      overflow: hidden;
      background: #e9ecef;
    }

    .progress-bar {
      background: linear-gradient(90deg, #0d6efd, #4f8cff);
    }

    .timeline-area {
      display: flex;
      flex-direction: column;
      gap: 16px;
      margin-top: 30px;
    }

    .timeline-item {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 18px;
      border-radius: 22px;
      background: #f8fafc;
      transition: .3s ease;
      border: 1px solid transparent;
    }

    .timeline-item:hover {
      transform: translateY(-3px);
      background: white;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .06);
    }

    .timeline-item.completed {
      background: rgba(25, 135, 84, .08);
      border-color: rgba(25, 135, 84, .12);
    }

    .timeline-item.completed i {
      color: #198754;
    }

    .timeline-item.active {
      background: rgba(13, 110, 253, .08);
      border-color: rgba(13, 110, 253, .15);
      transform: scale(1.02);
    }

    .timeline-item.active i {
      color: #0d6efd;
    }

    .tempo-card {
      background: linear-gradient(135deg, #111827, #1f2937);
      border-radius: 28px;
      padding: 28px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 35px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
    }

    .service-card {
      background:
        radial-gradient(circle at top right, rgba(255, 255, 255, .12), transparent 30%),
        linear-gradient(135deg, #0f172a, #111827, #1e293b);

      border: 1px solid rgba(255, 255, 255, .08);
      box-shadow: 0 40px 80px rgba(15, 23, 42, .18);
    }

    .service-icon {
      width: 95px;
      height: 95px;
      border-radius: 28px;
      background: linear-gradient(135deg, #2563eb, #3b82f6);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 20px 40px rgba(37, 99, 235, .35);
    }

    .service-icon i {
      color: white;
      font-size: 2.3rem;
    }

    .mini-badge {
      background: rgba(255, 255, 255, .1);
      border: 1px solid rgba(255, 255, 255, .1);
      color: white;
      padding: 10px 18px;
      border-radius: 999px;
      font-size: .9rem;
      font-weight: 600;
    }

    .service-status {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .status-item {
      padding: 18px 22px;
      border-radius: 20px;
      background: rgba(255, 255, 255, .06);
      color: white;
      display: flex;
      align-items: center;
      gap: 14px;
      font-weight: 500;
      border: 1px solid rgba(255, 255, 255, .05);
    }

    .status-item.active {
      background: linear-gradient(135deg, #2563eb, #3b82f6);
      box-shadow: 0 15px 30px rgba(37, 99, 235, .25);
    }

    .glass-card {
      background: rgba(255, 255, 255, .75);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, .4);
      box-shadow: 0 20px 40px rgba(15, 23, 42, .06);
      transition: .35s ease;
    }

    .glass-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 30px 60px rgba(15, 23, 42, .1);
    }

    .small-icon {
      width: 72px;
      height: 72px;
      border-radius: 22px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.7rem;
      box-shadow: 0 15px 35px rgba(0, 0, 0, .12);
    }

    .pulse-circle {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: #22c55e;
      box-shadow: 0 0 0 rgba(34, 197, 94, .5);
      animation: pulse 2s infinite;
    }

    .timeline-card {
      background: white;
      border: 1px solid rgba(0, 0, 0, .04);
      box-shadow: 0 20px 40px rgba(15, 23, 42, .06);
      transition: .35s ease;
    }

    .timeline-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 35px 70px rgba(15, 23, 42, .1);
    }

    .timeline-card.active {
      border: 2px solid rgba(37, 99, 235, .15);
      background: linear-gradient(180deg, #ffffff, #f8fbff);
    }

    .timeline-number {
      width: 70px;
      height: 70px;
      border-radius: 22px;
      background: linear-gradient(135deg, #2563eb, #3b82f6);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.4rem;
      font-weight: 800;
      margin-bottom: 35px;
      box-shadow: 0 20px 35px rgba(37, 99, 235, .25);
    }

    .cta-box {
      background:
        radial-gradient(circle at top right, rgba(255, 255, 255, .12), transparent 25%),
        linear-gradient(135deg, #0f172a, #111827, #1e293b);

      overflow: hidden;
    }

    .btn-primary {
      background: linear-gradient(135deg, #0d6efd, #3b82f6);
      border: none;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 20px 35px rgba(13, 110, 253, .25);
    }

    @keyframes pulse {

      0% {
        box-shadow: 0 0 0 0 rgba(34, 197, 94, .5);
      }

      70% {
        box-shadow: 0 0 0 18px rgba(34, 197, 94, 0);
      }

      100% {
        box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
      }

    }

    @media(max-width:991px) {

      .hero-modern {
        text-align: center;
      }

      .hero-modern h1 {
        font-size: 3rem;
      }

      .dashboard-card {
        margin-top: 50px;
      }

    }

    @media(max-width:576px) {

      .hero-modern h1 {
        font-size: 2.3rem;
      }

      .tempo-card {
        flex-direction: column;
        gap: 20px;
        text-align: center;
      }

    }

  </style>

</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center dark-background">

      <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">

          <i class="bi bi-envelope d-flex align-items-center">

            <a href="mailto:contact@example.com">
              mobipet@gmail.com
            </a>

          </i>

          <i class="bi bi-phone d-flex align-items-center ms-4">

            <span>
              +19 99999-8888
            </span>

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

  </header>

  <main class="main">

    <section class="hero-modern py-5 overflow-hidden">

      <div class="container">

        <div class="row align-items-center min-vh-100">

          <div class="col-lg-6" data-aos="fade-right">

            <h1 class="display-3 fw-bold mb-4">
              Monitoramento moderno para banho e tosa
            </h1>

            <p
              class="lead text-secondary mb-5"
              style="line-height:1.9;"
            >
              Acompanhe cada etapa do atendimento em tempo real,
              trazendo mais confiança, carinho e tranquilidade
              para quem ama seu pet.
            </p>

            <div class="d-flex flex-wrap gap-3">

              <a
                href="{{route('agendamento')}}"
                class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow"
              >
                Solicitar Demonstração
              </a>

              <a
                href="{{route('sobre')}}"
                class="btn btn-outline-dark btn-lg rounded-pill px-5 py-3"
              >
                Conhecer Plataforma
              </a>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">

            <div class="dashboard-card shadow-lg rounded-5 p-4 position-relative">

              <div class="online-badge">

                <i class="bi bi-broadcast"></i>
                EM ATENDIMENTO

              </div>

              <div class="d-flex align-items-center mb-4">

                <img
                  src="https://images.unsplash.com/photo-1517849845537-4d257902454a?q=80&w=500"
                  class="rounded-circle shadow"
                  width="90"
                  height="90"
                  style="object-fit:cover;"
                >

                <div class="ms-3">

                  <h4 class="fw-bold mb-1">
                    Rex
                  </h4>

                  <p class="text-secondary mb-0">
                    Pug
                  </p>

                </div>

              </div>

              <div class="mb-4">

                <div class="d-flex justify-content-between mb-2">

                  <span class="fw-semibold">
                    Status do atendimento
                  </span>

                  <span class="badge bg-primary rounded-pill px-3 py-2">
                    Secagem em andamento
                  </span>

                </div>

                <div class="progress">

                  <div
                    class="progress-bar progress-bar-striped progress-bar-animated"
                    style="width:65%"
                  ></div>

                </div>

              </div>

              <div class="timeline-area">

                <div class="timeline-item completed">

                  <i class="bi bi-check-circle-fill"></i>
                  <span>Recepção concluída</span>

                </div>

                <div class="timeline-item completed">

                  <i class="bi bi-check-circle-fill"></i>
                  <span>Banho finalizado</span>

                </div>

                <div class="timeline-item active">

                  <i class="bi bi-arrow-repeat"></i>
                  <span>Secagem em andamento</span>

                </div>

                <div class="timeline-item">

                  <i class="bi bi-clock"></i>
                  <span>Tosa aguardando</span>

                </div>

              </div>

              <div class="tempo-card">

                <div>

                  <h5 class="fw-bold mb-1 text-white">
                    Tempo restante
                  </h5>

                  <p class="text-light mb-0">
                    Atualização automática
                  </p>

                </div>

                <h2 class="fw-bold text-white mb-0">
                  15min
                </h2>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <section class="py-5 position-relative overflow-hidden bg-white">

      <div class="container py-5">

        <div class="text-center mb-5" data-aos="fade-up">

          <span class="badge rounded-pill px-4 py-3 fw-semibold text-primary border border-primary bg-primary-subtle">
            SERVIÇOS MOBIPET
          </span>

          <h2 class="display-2 fw-bold mt-4 mb-4 text-dark lh-sm">

            Uma experiência tecnológica
            feita para quem ama pets

          </h2>

          <p
            class="lead text-secondary mx-auto"
            style="max-width:900px;line-height:1.9;"
          >
            A Mobipet aproxima o tutor do petshop através
            de notificações inteligentes e monitoramento
            moderno de serviços.
          </p>

        </div>

        <div class="row g-4">

          <div class="col-lg-6">

            <div class="service-card h-100 p-5 rounded-5 position-relative overflow-hidden">

              <div class="service-icon mb-5">

                <i class="bi bi-bell-fill"></i>

              </div>

              <span class="mini-badge">
                Atualizações em tempo real
              </span>

              <h3 class="fw-bold text-white mt-4 mb-4 display-6">

                Notificações automáticas
                durante o atendimento

              </h3>

              <p
                class="text-light opacity-75 fs-5"
                style="line-height:1.9;"
              >
                O tutor recebe mensagens automáticas
                informando cada etapa do banho e tosa.
              </p>

              <div class="service-status mt-5">

                <div class="status-item">

                  <i class="bi bi-check-circle-fill"></i>
                  Banho concluído

                </div>

                <div class="status-item active">

                  <i class="bi bi-arrow-repeat"></i>
                  Secagem em andamento

                </div>

                <div class="status-item">

                  <i class="bi bi-clock"></i>
                  Finalização pendente

                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="row g-4 h-100">

              <div class="col-12">

                <div class="glass-card p-5 rounded-5 h-100">

                  <div class="small-icon bg-primary">

                    <i class="bi bi-whatsapp"></i>

                  </div>

                  <h4 class="fw-bold mt-4 mb-3">
                    Comunicação via WhatsApp
                  </h4>

                  <p
                    class="text-secondary fs-5 mb-0"
                    style="line-height:1.8;"
                  >
                    Todas as notificações chegam diretamente
                    no WhatsApp do tutor de forma prática.
                  </p>

                </div>

              </div>

              <div class="col-md-6">

                <div class="glass-card p-4 rounded-5 h-100">

                  <div class="small-icon bg-success">

                    <i class="bi bi-heart-fill"></i>

                  </div>

                  <h5 class="fw-bold mt-4 mb-3">
                    Mais confiança
                  </h5>

                  <p
                    class="text-secondary mb-0"
                    style="line-height:1.8;"
                  >
                    Transparência para deixar o tutor
                    tranquilo durante o atendimento.
                  </p>

                </div>

              </div>

              <div class="col-md-6">

                <div class="glass-card p-4 rounded-5 h-100">

                  <div class="small-icon bg-dark">

                    <i class="bi bi-stars"></i>

                  </div>

                  <h5 class="fw-bold mt-4 mb-3">
                    Experiência premium
                  </h5>

                  <p
                    class="text-secondary mb-0"
                    style="line-height:1.8;"
                  >
                    Um sistema moderno para destacar
                    seu petshop da concorrência.
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

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

</body>

</html>