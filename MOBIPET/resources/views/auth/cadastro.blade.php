<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Criar Conta | Mobipet</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="{{ asset('assets/img/mobipet_icon.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body class="inner-page">
    <style>
        body.inner-page {
            background-image: url('assets/img/fundo_login.png');
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

        /* ===== Auth card com painel deslizante (estrutura original) ===== */
        .auth-wrapper {
            display: flex;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .auth-card {
            position: relative;
            width: 100%;
            max-width: 900px;
            min-height: 580px;
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15);
            overflow: hidden;
            font-family: 'Roboto', sans-serif;
        }

        .auth-forms {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
        }

        .auth-panel {
            width: 50%;
            padding: 2.5rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow-y: auto;
        }

        .auth-panel h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        /* Nesta página o card já nasce no "modo cadastro": overlay ocupa a
           esquerda, então o formulário precisa ficar na metade direita. */
        .auth-form-signup { margin-left: 50%; }

        /* Overlay roxo/azul deslizante — já posicionado à esquerda */
        .auth-overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 10;
            transform: translateX(-100%);
        }

        .auth-overlay {
            position: relative;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(135deg, #497baf 0%, #3061cb 100%);
            color: #fff;
            display: flex;
            transition: transform 0.6s ease-in-out;
            transform: translateX(50%);
        }

        .auth-overlay-panel {
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2.5rem;
        }

        .auth-overlay-panel h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        .auth-btn-ghost {
            border: 2px solid #fff;
            background: transparent;
            color: #fff;
            border-radius: 50px;
            padding: 0.6rem 2.2rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .auth-btn-ghost:hover { 
            background: rgba(255,255,255,0.2); 
            color: #fff; 
        }

        /* Ajustes Responsivos */
        @media (max-width: 767.98px) {
            .auth-card { min-height: auto; position: static; }
            .auth-forms { position: static; }
            .auth-overlay-container { display: none; }
            .auth-panel { width: 100%; margin-left: 0; padding: 2.5rem 1.5rem; }
            .auth-mobile-toggle { display: block !important; }
        }
        .auth-mobile-toggle { display: none; }
    </style>

    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        <span>(19) 98943-2384</span>
                    </i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                    <h1 class="sitename">Mobipet</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('index') }}">Início</a></li>
                        <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
                        <li><a href="{{ route('services') }}">Serviços</a></li>
                        <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>
                        <li>
                            <a href="{{ route('login.funcionario') }}">
                                Sou Funcionário <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>

                        {{-- CLIENTE --}}
                        @if (session()->has('id') && session('nivel_acesso') == 'USUARIO')
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
                            <li><a href="{{ route('perfil') }}"><i class="fa-solid fa-user"></i></a></li>
                            <li>
                                <a href="{{ route('logout') }}">
                                    Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>

                        {{-- FUNCIONÁRIO --}}
                        @elseif(session()->has('id') && session('nivel_acesso') == 'FUNCIONARIO')
                            <li><a href="{{ route('painel-controle') }}">Painel</a></li>
                            <li><a href="{{ route('funcionario.agendamentos') }}">Agendamentos</a></li>
                            <li><a href="{{ route('perfil') }}">Perfil</a></li>
                            <li>
                                <a href="{{ route('logout') }}">
                                    Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <main class="main" style="margin-top: 120px;">

        {{-- Alertas de Erro Globais --}}
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-10" style="max-width:900px;">
                    @if (session('erro'))
                        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-4 p-3 mb-3" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('erro') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger border-0 shadow-sm rounded-4 p-3 mb-3 small" role="alert">
                            <ul class="mb-0 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="auth-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="auth-card">

                <div class="auth-forms">

                    {{-- ===================== FORMULÁRIO DE CADASTRO (única página) ===================== --}}
                    <div class="auth-panel auth-form-signup">
                        <h2 class="mb-3 text-dark">Criar conta</h2>

                        <form method="POST" action="{{ route('cadastro.salvar') }}">
                            @csrf

                            <div class="mb-2">
                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1" style="font-size: 11px;">Nome Completo</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="fa-solid fa-user small"></i></span>
                                    <input type="text" name="nome" class="form-control p-2 border-light-subtle shadow-none" placeholder="Seu nome completo" value="{{ old('nome', request('nome')) }}" required>
                                </div>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label fw-semibold text-secondary small text-uppercase mb-1" style="font-size: 11px;">CPF</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-light-subtle text-muted"><i class="fa-solid fa-id-card small"></i></span>
                                        <input type="text" id="cpf" name="cpf" maxlength="14" class="form-control p-2 border-light-subtle shadow-none" placeholder="000.000.000-00" value="{{ old('cpf') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label fw-semibold text-secondary small text-uppercase mb-1" style="font-size: 11px;">Telefone</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-telephone"></i></span>
                                        <input type="text" id="telefone" name="telefone" maxlength="15" class="form-control p-2 border-light-subtle shadow-none" placeholder="(19) 99999-8888" value="{{ old('telefone') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1" style="font-size: 11px;">Endereço Residencial</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-geo-alt"></i></span>
                                    <input type="text" name="endereco" class="form-control p-2 border-light-subtle shadow-none" placeholder="Rua, Número, Bairro - Cidade" value="{{ old('endereco') }}" required>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1" style="font-size: 11px;">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control p-2 border-light-subtle shadow-none" placeholder="seuemail@exemplo.com" value="{{ old('email', request('email')) }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary small text-uppercase mb-1" style="font-size: 11px;">Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-light-subtle text-muted"><i class="bi bi-lock"></i></span>
                                    <input type="password" name="senha" class="form-control p-2 border-light-subtle shadow-none" placeholder="Crie uma senha segura" value="{{ old('senha', request('senha')) }}" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 px-4 fw-semibold rounded-pill shadow-sm" style="background-color: #497baf !important; border: none;">
                                <i class="bi bi-check-circle me-1"></i> Finalizar Cadastro
                            </button>
                        </form>

                        <div class="auth-mobile-toggle text-center mt-3">
                            <p class="text-secondary small mb-1">Já tem uma conta?</p>
                            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">Entrar</a>
                        </div>
                    </div>

                </div>

                {{-- ===================== OVERLAY SLIDER DESKTOP: aponta para a outra página ===================== --}}
                <div class="auth-overlay-container">
                    <div class="auth-overlay">
                        <div class="auth-overlay-panel">
                            <h2 class="mb-3">Bem-vindo de volta!</h2>
                            <p class="mb-4">Já tem uma conta? Entre com seus dados para acessar o Mobipet.</p>
                            <a href="{{ route('login') }}" class="auth-btn-ghost">Entrar</a>
                        </div>
                        <div class="auth-overlay-panel">
                            <h2 class="mb-3">Olá, amigo!</h2>
                            <p class="mb-4">Cadastre-se com seus dados pessoais para usar todos os recursos do site.</p>
                            <a href="{{ route('cadastro') }}" class="auth-btn-ghost">Cadastrar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Máscara de CPF
            const cpf = document.getElementById('cpf');
            if(cpf) {
                cpf.addEventListener('input', function () {
                    let value = this.value.replace(/\D/g, '');
                    value = value.replace(/(\d{3})(\d)/, '$1.$2');
                    value = value.replace(/(\d{3})(\d)/, '$1.$2');
                    value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                    this.value = value;
                });
            }

            // Máscara de Telefone
            const telefone = document.getElementById('telefone');
            if(telefone) {
                telefone.addEventListener('input', function () {
                    let value = this.value.replace(/\D/g, '');
                    if (value.length <= 10) {
                        value = value.replace(/^(\d{2})(\d)/, '($1) $2');
                        value = value.replace(/(\d{4})(\d)/, '$1-$2');
                    } else {
                        value = value.replace(/^(\d{2})(\d)/, '($1) $2');
                        value = value.replace(/(\d{5})(\d)/, '$1-$2');
                    }
                    this.value = value;
                });
            }
        });
    </script>

    @include('partials.logout-confirm')

</body>

</html>