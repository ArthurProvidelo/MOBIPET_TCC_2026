<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cadastro Funcionários | Mobipet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<link href="{{ asset('assets/img/mobipet_icon.png') }}" rel="icon">

<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">
</head>

<body class="inner-page">
    <style>
        body.inner-page {
            background-image: url('{{ asset('assets/img/fundo_login.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
        }

        body.inner-page::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.15);
            z-index: -1;
        }
    </style>

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
                            <a href="{{ route('painel-controle') }}">
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
                            <a href="{{ route('login.funcionario') }}">
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

    <div class="container py-5" style="margin-top: 120px;">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-lg border-0 rounded-4">

                    <!-- CABEÇALHO -->
                    <div class="card-header text-white text-center py-4 border-0"
                        style="background-color: #497baf;border-top-left-radius: 1rem; border-top-right-radius: 1rem;">

                        <div class="position-absolute top-50 start-50 translate-middle opacity-10"
                            style="font-size: 7rem;">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>

                        <div class="position-relative">
                            <h2 class="fw-bold mb-1 text-white">
                                Cadastro de Funcionário
                            </h2>

                            <p class="mb-0">
                                Registre um novo colaborador
                            </p>
                        </div>
                    </div>

                    <!-- CORPO -->
                    <div class="card-body p-4 p-md-5">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('funcionario.salvar') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nome Completo</label>
                                <input type="text"
                                    name="nome"
                                    class="form-control"
                                    placeholder="Nome completo do funcionário"
                                    required>
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Cargo</label>
                                    <input type="text"
                                        name="cargo"
                                        class="form-control"
                                        placeholder="Ex: Tosador"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Salário</label>
                                    <input type="text"
                                        id="salario"
                                        name="salario"
                                        class="form-control"
                                        placeholder="R$ 0,00"
                                        required>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">CPF</label>
                                    <input type="text"
                                        id="cpf"
                                        name="cpf"
                                        maxlength="14"
                                        class="form-control"
                                        placeholder="Somente números"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Telefone</label>
                                    <input type="text"
                                        id="telefone"
                                        name="telefone"
                                        class="form-control"
                                        placeholder="(19) 99999-8888"
                                        required>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Data de Admissão</label>
                                <input type="date" name="data_admissao" class="form-control" required max="{{ date('Y-m-d') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Endereço</label>
                                <input type="text"
                                    name="endereco"
                                    class="form-control"
                                    placeholder="Rua, Número, Bairro"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="email@mobipet.com"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Senha</label>
                                <input type="password"
                                    name="senha"
                                    class="form-control"
                                    placeholder="Digite uma senha"
                                    required>
                            </div>

                            <button type="submit"
                                class="btn btn-primary w-100 py-3">
                                <i class="fa-solid fa-user-check me-2"></i>
                                Cadastrar Funcionário
                            </button>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>

    // CPF: 000.000.000-00
    document.getElementById('cpf').addEventListener('input', function(e) {
        let v = e.target.value.replace(/\D/g, '');

        v = v.replace(/^(\d{3})(\d)/, '$1.$2');
        v = v.replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3');
        v = v.replace(/\.(\d{3})(\d)/, '.$1-$2');

        e.target.value = v.substring(0, 14);
    });

    // Telefone: (00) 00000-0000
    document.getElementById('telefone').addEventListener('input', function(e) {
        let v = e.target.value.replace(/\D/g, '');

        v = v.replace(/^(\d{2})(\d)/, '($1) $2');
        v = v.replace(/(\d{5})(\d)/, '$1-$2');

        e.target.value = v.substring(0, 15);
    });

    // Salário: 1.234,56
    document.getElementById('salario').addEventListener('input', function(e) {
        let v = e.target.value.replace(/\D/g, '');

        v = (Number(v) / 100).toLocaleString('pt-BR', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        e.target.value = v;
    });
</script>

    @include('partials.logout-confirm')

</body>

</html>