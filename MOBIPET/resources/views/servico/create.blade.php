<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cadastrar Serviço - Mobipet</title>
    <meta name="description" content="Adicione novos serviços, preços e durações oferecidas pelo seu petshop na plataforma Mobipet.">
    <meta name="keywords" content="petshop, monitoramento pet, banho e tosa, laravel, mobipet, cadastrar servico">

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

<body class="about-page">

    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:mobipet@gmail.com">mobipet@gmail.com</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19) 98943-2384</span></i>
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
                        <li><a href="{{ route('services') }}" class="active">Serviços</a></li>
                        <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

                        @if (session()->has('cliente_id'))
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li><a href="{{ route('pets.index') }}">Meus Pets</a></li>
                            <li class="dropdown">
                                <a href="{{ route('perfil') }}">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">
                                    Sair <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}">Entrar</a>
                            </li>
                        @endif
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <style>
        /* --- CONFIGURAÇÕES DE TIPOGRAFIA E BASE --- */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        /* --- ESPAÇAMENTOS PREMIUM (SISTEMA DE RESPIRO) --- */
        .py-6 {
            padding-top: 5.5rem !important;
            padding-bottom: 5.5rem !important;
        }

        .max-w-2xl {
            max-width: 42rem;
        }

        .p-4AndHalf {
            padding: 2.25rem !important;
        }

        /* --- MINIMAL CARDS ADAPTADO PARA FORMULÁRIOS --- */
        .card-minimal {
            border: 1px solid #f1f3f5;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.01) !important;
        }

        /* Customização dos inputs para combinar com o Minimal Design */
        .form-control-minimal {
            border: 1px solid #e9ecef;
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            color: #495057;
            transition: all 0.2s ease;
        }

        .form-control-minimal:focus {
            background-color: #ffffff;
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.1);
            outline: 0;
        }

        .form-label-minimal {
            font-size: 0.9rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 0.5rem;
        }
    </style>

    <main class="bg-white text-dark" style="margin-top: 80px;">

        <section class="py-6 bg-light-subtle border-bottom border-light">
            <div class="container">
                <div class="text-center max-w-2xl mx-auto">
                    <span class="text-primary text-uppercase fw-bold tracking-wider small" style="font-size: 0.75rem;">Gerenciamento</span>
                    <h2 class="fw-bold text-dark mt-2 display-6">Cadastrar Novo Serviço</h2>
                    <p class="text-secondary mt-3 mb-0">
                        Insira as informações do novo procedimento no catálogo para disponibilizá-lo para agendamento online dos tutores.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="fade-up">
                        
                        <div class="card card-minimal shadow-sm">
                            <div class="card-body p-4AndHalf">

                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 rounded-3 mb-4" style="background-color: #fff5f5; color: #e53e3e;">
                                        <ul class="mb-0 small fw-medium">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('services.store') }}" method="POST">
                                    @csrf

                                    <div class="row g-4">
                                        
                                        <div class="col-12">
                                            <label for="nome" class="form-label-minimal">Nome do Serviço *</label>
                                            <input type="text" class="form-control form-control-minimal" id="nome" name="nome" placeholder="Ex: Banho, Tosa..." required value="{{ old('nome') }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="categoria" class="form-label-minimal">Categoria *</label>
                                            <select class="form-select form-control-minimal" id="categoria" name="categoria" required>
                                                <option value="" disabled selected>Selecione uma opção...</option>
                                                <option value="banho" {{ old('categoria') == 'banho' ? 'selected' : '' }}>Banho</option>
                                                <option value="tosa" {{ old('categoria') == 'tosa' ? 'selected' : '' }}>Tosa</option>
                                                <option value="consulta" {{ old('categoria') == 'consulta' ? 'selected' : '' }}>Consulta Veterinária</option>
                                                <option value="outros" {{ old('categoria') == 'outros' ? 'selected' : '' }}>Outros Serviços</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="preco" class="form-label-minimal">Preço (R$) *</label>
                                            <input type="number" step="0.01" class="form-control fasteners form-control-minimal" id="preco" name="preco" placeholder="0,00" required value="{{ old('preco') }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="duracao" class="form-label-minimal">Tempo Estimado de Duração *</label>
                                            <input type="text" class="form-control fasteners form-control-minimal" id="tempoEstimado" name="tempoEstimado" required value="{{ old('tempo_estimado') }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label-minimal d-block">Disponibilizar Monitoramento ao Vivo?</label>
                                            <div class="d-flex gap-4 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="monitoramento" id="monitorar_sim" value="1" checked>
                                                    <label class="form-check-label text-secondary small" for="monitorar_sim">Sim, ativo</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="monitoramento" id="monitorar_nao" value="0">
                                                    <label class="form-check-label text-secondary small" for="monitorar_nao">Não aplicável</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="descricao" class="form-label-minimal">Descrição Detalhada do Serviço</label>
                                            <textarea class="form-control form-control-minimal" id="descricao" name="descricao" rows="4" placeholder="Descreva os procedimentos inclusos no serviço, restrições ou produtos específicos utilizados...">{{ old('descricao') }}</textarea>
                                        </div>

                                        <div class="col-12 text-end mt-4 pt-2">
                                            <a href="{{ route('services') }}" class="btn btn-link text-secondary text-decoration-none me-3 small fw-semibold">
                                                Cancelar
                                            </a>
                                            <button type="submit" class="btn btn-primary rounded-3 px-4 py-2 shadow-sm fw-medium">
                                                Salvar Serviço
                                            </button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer id="footer" class="footer position-relative py-4">
        <div class="container">
            <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
                <div class="row py-4">
                    <div class="col-md-6 d-flex flex-column align-items-start">
                        <a href="{{ route('index') }}" class="logo d-flex align-items-center mb-2">
                            <h1 class="sitename m-0">Mobipet</h1>
                        </a>
                        <p class="lead">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!</p>
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-md-end align-items-start">
                        <p class="mb-1"><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú - SP</span></p>
                        <p class="mb-1"><span><i class="bi bi-telephone"></i> (19) 98943-2384</span></p>
                        <p class="mb-0"><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
        <i class="bi bi-arrow-up-short"></i>
    </a>

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