<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Editar Pet - Mobipet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets/img/mobipet_icon.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet">
</head>

<body class="index-page" style="background-color: #f7f9fc;">

  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">mobipet@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+19 99999-8888</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
      <i class="bi bi-arrow-up-short"></i>
    </a>

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{route('index')}}" class="logo d-flex align-items-center">
          <h1 class="sitename">Mobipet</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{route('index')}}">Início</a></li>
            <li><a href="{{route('sobre')}}">Sobre nós</a></li>
            <li><a href="{{route('services')}}">Serviços</a></li>
            <li><a href="{{route('devs')}}">Desenvolvedores</a></li>
            <li><a href="{{route('contact')}}">Contato</a></li>
            
            @if(session()->has('cliente_id'))
              <li><a href="{{route('pets.create')}}">Cadastrar Pet</a></li>
              <li><a href="{{route('agendamento')}}">Agendamento</a></li>
              <li><a href="{{route('pets.index')}}">Meus Pets</a></li>
              <li class="dropdown">
                <a href="{{ route('perfil')}}" class="active">
                  <i class="fa-solid fa-user"></i> {{ session('cliente_nome') }}
                </a>
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

  <main class="main" style="margin-top: 140px; min-height: 75vh;">

    <div class="container py-5" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            
          <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-white">
              
            <div class="card-header border-0 py-4 text-center position-relative" style="background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);">
              <div class="position-absolute top-50 start-50 translate-middle opacity-10" style="font-size: 8rem; color: #fff; pointer-events: none;">
                <i class="fa-solid fa-paw"></i>
              </div>
              <div class="position-relative z-index-1">
                <h2 class="h3 fw-bold text-dark mb-1" style="font-family: 'Montserrat', sans-serif; letter-spacing: -0.5px;">
                  Editar Informações do Pet
                </h2>
                <p class="text-dark-50 small mb-0 fw-medium">Mantenha os dados do seu companheiro sempre atualizados</p>
              </div>
            </div>

            <div class="card-body p-4 p-md-5">
              <form action="{{ route('pets.update', $pet->id_pet) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                  <label class="form-label fw-bold text-dark mb-2">Qual é o nome dele(a)?</label>
                  <div class="input-group shadow-sm rounded-3 overflow-hidden transition-focus">
                    <span class="input-group-text bg-white border-end-0 border-light-subtle ps-3"><i class="fa-solid fa-signature text-warning"></i></span>
                    <input type="text" name="nome" class="form-control border-start-0 border-light-subtle py-2.5" value="{{ $pet->nome }}" placeholder="Ex: Thor, Mel, Pipoca..." required style="box-shadow: none;">
                  </div>
                </div>

                <div class="mb-4">
                  <label class="form-label fw-bold text-dark mb-2">Espécie</label>
                  <div class="row g-3">
                    <div class="col-6">
                      <input type="radio" class="btn-check" name="especie" id="especie_cao" value="Cão" {{ $pet->especie == 'Cão' || $pet->especie == 'Cachorro' ? 'checked' : '' }} required>
                      <label class="btn btn-outline-warning w-100 py-3 rounded-3 shadow-sm d-flex flex-column align-items-center gap-2" for="especie_cao">
                        <i class="fa-solid fa-dog fa-2x"></i>
                        <span class="fw-semibold small">Cão</span>
                      </label>
                    </div>
                    <div class="col-6">
                      <input type="radio" class="btn-check" name="especie" id="especie_gato" value="Gato" {{ $pet->especie == 'Gato' ? 'checked' : '' }}>
                      <label class="btn btn-outline-warning w-100 py-3 rounded-3 shadow-sm d-flex flex-column align-items-center gap-2" for="especie_gato">
                        <i class="fa-solid fa-cat fa-2x"></i>
                        <span class="fw-semibold small">Gato</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label class="form-label fw-bold text-dark mb-2">Qual a Raça?</label>
                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                      <span class="input-group-text bg-white border-end-0 border-light-subtle ps-3"><i class="fa-solid fa-dna text-muted"></i></span>
                      <input type="text" name="raca" class="form-control border-start-0 border-light-subtle py-2.5" value="{{ $pet->raca }}" placeholder="Ex: Poodle, Vira-lata..." required style="box-shadow: none;">
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <label class="form-label fw-bold text-dark mb-2">Data de Nascimento <span class="text-muted fw-normal small">(Opcional)</span></label>
                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                      <span class="input-group-text bg-white border-end-0 border-light-subtle ps-3"><i class="fa-solid fa-calendar-alt text-muted"></i></span>
                      <input type="date" name="data_nascimento" class="form-control border-start-0 border-light-subtle py-2.5" value="{{ $pet->data_nascimento }}" style="box-shadow: none;">
                    </div>
                  </div>
                </div>

                <div class="mb-5">
                  <label class="form-label fw-bold text-dark mb-2">Qual o Porte dele(a)?</label>
                  <div class="btn-group w-100 shadow-sm rounded-3 overflow-hidden p-1 bg-light border border-light-subtle" role="group">
                    <input type="radio" class="btn-check" name="porte" id="porte_p" value="Pequeno" {{ $pet->porte == 'Pequeno' ? 'checked' : '' }}>
                    <label class="btn btn-light border-0 py-2.5 fw-semibold rounded-2 transition-all small" for="porte_p">Pequeno</label>

                    <input type="radio" class="btn-check" name="porte" id="porte_m" value="Médio" {{ $pet->porte == 'Médio' ? 'checked' : '' }}>
                    <label class="btn btn-light border-0 py-2.5 fw-semibold rounded-2 transition-all small" for="porte_m">Médio</label>

                    <input type="radio" class="btn-check" name="porte" id="porte_g" value="Grande" {{ $pet->porte == 'Grande' ? 'checked' : '' }}>
                    <label class="btn btn-light border-0 py-2.5 fw-semibold rounded-2 transition-all small" for="porte_g">Grande</label>
                  </div>
                </div>

                <div class="position-relative my-4">
                  <hr class="text-muted opacity-25">
                </div>

                <div class="row g-3 align-items-center">
                  <div class="col-md-4 order-2 order-md-1">
                    <a href="{{ route('pets.index') }}" class="btn btn-link link-secondary text-decoration-none fw-semibold w-100 py-2.5 transition-all text-center">
                      Cancelar e voltar
                    </a>
                  </div>
                  <div class="col-md-8 order-1 order-md-2">
                    <button type="submit" class="btn btn-warning w-100 py-2.5 fw-bold text-dark shadow-md rounded-3 border-0 dynamic-btn" style="background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%); transition: transform 0.2s;">
                      <i class="fa-solid fa-floppy-disk me-2"></i>Salvar Alterações
                    </button>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

  </main>

  <style>
    .transition-all {
      transition: all 0.2s ease-in-out;
    }
    
    /* Botões Customizados de Espécie */
    .btn-check:checked + .btn-outline-warning {
      background-color: rgba(255, 193, 7, 0.15);
      color: #b18504;
      border-color: #ffc107;
      font-weight: bold;
      transform: scale(1.02);
    }
    .btn-outline-warning {
      border-color: #dee2e6;
      color: #495057;
      background-color: #fff;
      transition: all 0.2s;
    }
    .btn-outline-warning:hover {
      background-color: #f8f9fa;
      color: #ffc107;
      border-color: #ffc107;
    }
    
    /* Segmented Control do Porte */
    .btn-check:checked + .btn-light {
      background-color: #ffffff !important;
      color: #e0a800 !important;
      box-shadow: 0 .125rem .25rem rgba(0,0,0,.075) !important;
    }
    
    /* Animação suave no botão principal */
    .dynamic-btn:hover {
      transform: translateY(-1px);
      filter: brightness(1.03);
    }
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
            <p><span><i class="bi bi-telephone"></i> (19)9999-8888</span></p>
            <p><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
          </div>
        </div>
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

  <div id="preloader"></div>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>