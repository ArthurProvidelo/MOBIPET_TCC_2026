<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cadastrar Pet - Mobipet</title>
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

<body class="index-page bg-light">

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
    </div>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
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
              <li><a href="{{route('pets.create')}}" class="active">Cadastrar Pet</a></li>
              <li><a href="{{route('agendamento')}}">Agendamento</a></li>
              <li><a href="{{route('pets.index')}}">Meus Pets</a></li>
              <li class="dropdown">
                <a href="{{ route('perfil')}}">
                 <i class="fa-solid fa-user ms-1"></i> 
                </a>
              </li>
              <li>
                <a href="{{ route('logout') }}">
                  Sair <i class="fa-solid fa-arrow-right-from-bracket ms-1"></i>
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

  <div style="margin-top: 140px;"></div>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9">
        
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
          
          <div class="card-header bg-primary text-white text-center py-4 border-0">
            <i class="fa-solid fa-paw fa-2x mb-2 text-white-50"></i>
            <h2 class="h4 fw-bold mb-0" style="font-family: 'Montserrat', sans-serif;">Cadastrar Novo Pet</h2>
            <p class="small mb-0 opacity-75">Preencha os dados do seu companheiro abaixo</p>
          </div>

          <div class="card-body p-4 p-md-5 bg-white">
            <form action="{{ route('pets.store') }}" method="POST">
              @csrf

              <div class="mb-3">
                <label class="form-label fw-semibold text-secondary">Nome do Pet</label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0"><i class="fa-solid fa-font text-muted"></i></span>
                  <input type="text" name="nome" class="form-control bg-light border-start-0 ps-0" placeholder="Ex: Thor, Mel..." required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold text-secondary">Espécie</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="fa-solid fa-dog text-muted"></i></span>
                    <input type="text" name="especie" class="form-control bg-light border-start-0 ps-0" placeholder="Ex: Cão, Gato..." required>
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold text-secondary">Raça</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="fa-solid fa-dna text-muted"></i></span>
                    <input type="text" name="raca" class="form-control bg-light border-start-0 ps-0" placeholder="Ex: Poodle, Vira-lata..." required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold text-secondary">Porte</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="fa-solid fa-arrows-up-down text-muted"></i></span>
                    <select name="porte" class="form-select bg-light border-start-0 ps-0">
                      <option>Pequeno</option>
                      <option>Médio</option>
                      <option>Grande</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <label class="form-label fw-semibold text-secondary">Data de Nascimento</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="fa-solid fa-calendar-days text-muted"></i></span>
                    <input type="date" name="data_nascimento" class="form-control bg-light border-start-0 ps-0">
                  </div>
                </div>
              </div>

              <hr class="text-muted opacity-25 my-4">

              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('pets.index') }}" class="btn btn-light px-4 py-2 text-secondary fw-semibold border rounded-3 order-2 order-md-1">
                  <i class="fa-solid fa-arrow-left me-2"></i>Voltar
                </a>
                <button type="submit" class="btn btn-success px-5 py-2 fw-semibold shadow-sm rounded-3 order-1 order-md-2">
                  <i class="fa-solid fa-check me-2"></i>Salvar Pet
                </button>
              </div>

            </form>
          </div>

        </div>

      </div>
    </div>
  </div>

</body>
</html>