<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cadastrar Serviço - Mobipet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{ asset('assets/img/mobipet_icon.png') }}" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19) 98943-2384</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
          <h1 class="sitename">Mobipet</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('index') }}">Início</a></li>
            <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
            <li><a href="{{ route('services') }}" class="active">Serviços</a></li>
            <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

            @if(session()->has('cliente_id'))
              <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
              <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
              <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
              <li class="dropdown">
                <a href="{{ route('perfil') }}"><i class="fa-solid fa-user"></i></a>
              </li>
              <li>
                <a href="{{ route('logout') }}">
                  Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
              </li>
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

    <section class="py-5 bg-light" style="margin-top: 100px;">
      <div class="container" data-aos="fade-up">
        <div class="text-center mb-4">
          <h2 class="fw-bold display-5">Cadastrar Novo Serviço</h2>
          <p class="text-secondary">Gerencie o catálogo oferecendo novas opções de cuidados para os pets.</p>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            
            <div class="feature-card">
              
              @if ($errors->any())
                <div class="alert alert-danger mb-4 style-alert">
                  <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="#" method="POST">
                @csrf

                <div class="row g-4">
                  
                  <div class="col-md-12">
                    <label for="nome" class="form-label fw-bold text-dark">Nome do Serviço *</label>
                    <input type="text" class="form-control form-control-lg rounded-pill border-2" id="nome" name="nome" placeholder="Ex: Banho Premium + Tosa Higiênica" required value="{{ old('nome') }}">
                  </div>

                  <div class="col-md-6">
                    <label for="categoria" class="form-label fw-bold text-dark">Categoria *</label>
                    <select class="form-select form-control-lg rounded-pill border-2" id="categoria" name="categoria" required>
                      <option value="" disabled selected>Selecione uma categoria...</option>
                      <option value="banho" {{ old('categoria') == 'banho' ? 'selected' : '' }}>Banho</option>
                      <option value="tosa" {{ old('categoria') == 'tosa' ? 'selected' : '' }}>Tosa</option>
                      <option value="consulta" {{ old('categoria') == 'consulta' ? 'selected' : '' }}>Consulta Veterinária</option>
                      <option value="outros" {{ old('categoria') == 'outros' ? 'selected' : '' }}>Outros Serviços</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label for="preco" class="form-label fw-bold text-dark">Preço (R$) *</label>
                    <input type="number" step="0.01" class="form-control form-control-lg rounded-pill border-2" id="preco" name="preco" placeholder="0,00" required value="{{ old('preco') }}">
                  </div>

                  <div class="col-md-6">
                    <label for="duracao" class="form-label fw-bold text-dark">Tempo Estimado de Duração *</label>
                    <select class="form-select form-control-lg rounded-pill border-2" id="duracao" name="duracao" required>
                      <option value="" disabled selected>Selecione o tempo médio...</option>
                      <option value="30" {{ old('duracao') == '30' ? 'selected' : '' }}>30 minutos</option>
                      <option value="60" {{ old('duracao') == '60' ? 'selected' : '' }}>1 hora</option>
                      <option value="90" {{ old('duracao') == '90' ? 'selected' : '' }}>1h 30min</option>
                      <option value="120" {{ old('duracao') == '120' ? 'selected' : '' }}>2 horas ou mais</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-bold text-dark">Disponibilizar Monitoramento ao Vivo?</label>
                    <div class="d-flex gap-4 mt-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="monitoramento" id="monitorar_sim" value="1" checked>
                        <label class="form-check-label text-secondary" for="monitorar_sim">Sim, ativo</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="monitoramento" id="monitorar_nao" value="0">
                        <label class="form-check-label text-secondary" for="monitorar_nao">Não aplicável</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="descricao" class="form-label fw-bold text-dark">Descrição Detalhada do Serviço</label>
                    <textarea class="form-control border-2" id="descricao" name="descricao" rows="4" style="border-radius: 20px;" placeholder="Descreva os procedimentos inclusos no serviço, restrições ou produtos utilizados...">{{ old('descricao') }}</textarea>
                  </div>

                  <div class="col-12 text-center mt-5">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow me-3">
                      <i class="fa-solid fa-save"></i> Salvar Serviço
                    </button>
                    <a href="{{ route('services') }}" class="btn btn-outline-secondary btn-lg rounded-pill px-5 py-3">
                      Cancelar
                    </a>
                  </div>

                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <style>
    body { background: #f7f9fc; }
    .feature-card { background: white; border-radius: 35px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); }
    .form-control:focus, .form-select:focus { border-color: #2563eb !important; box-shadow: 0 0 0 0.25px rgba(37, 99, 235, 0.25) !important; }
    .style-alert { border-radius: 20px; font-size: 15px; }
  </style>

  <footer id="footer" class="footer-16 footer position-relative">
    <div class="container">
      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-6 align-items-start">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
              <h1 class="sitename">Mobipet</h1>
            </a>
            <p class="brand-description">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!</p>
          </div>
          <div class="col-md-6 align-items-end">
            <p><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú - SP</span></p>
            <p><span><i class="bi bi-telephone"></i> (19) 98943-2384</span></p>
            <p><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

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

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>