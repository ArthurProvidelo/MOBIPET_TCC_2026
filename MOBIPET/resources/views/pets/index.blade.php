<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Meus Pets - Mobipet</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="assets/img/mobipet_icon.png" rel="icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

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

    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:mobipet@gmail.com">mobipet@gmail.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19)98943-2384</span></i>
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

                        @if (session()->has('cliente_id'))
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li>
                                <a href="{{ route('pets.index') }}">
                                    Cadastro de Funcionário
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pets.index') }}" class="active">
                                    Meus Pets
                                </a>
                            </li>
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

    <main class="main" style="margin-top: 120px;">

        <div class="container py-5" data-aos="fade-up" data-aos-delay="100">

            <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
                <h2 class="heading-title fw-bold m-0" style="font-family: 'Montserrat', sans-serif; color: #1f1f1f;">
                    Meus Pets
                </h2>
                <a href="{{ route('pets.create') }}"
                    class="btn btn-primary px-4 py-2 fw-semibold rounded-pill shadow-sm"
                    style="font-family: 'Roboto', sans-serif; transition: all 0.3s ease;">
                    <i class="bi bi-plus-lg me-1"></i> Novo Pet
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 p-3 mb-4"
                    role="alert" style="font-family: 'Roboto', sans-serif;">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" style="font-family: 'Roboto', sans-serif;">

                            <thead class="table-light"
                                style="font-family: 'Montserrat', sans-serif; background-color: #f8f9fa;">
                                <tr>
                                    <th class="py-3 px-4 text-secondary fw-semibold text-uppercase fs-7"
                                        style="letter-spacing: 0.5px;">Nome</th>
                                    <th class="py-3 text-secondary fw-semibold text-uppercase fs-7"
                                        style="letter-spacing: 0.5px;">Espécie</th>
                                    <th class="py-3 text-secondary fw-semibold text-uppercase fs-7"
                                        style="letter-spacing: 0.5px;">Raça</th>
                                    <th class="py-3 text-secondary fw-semibold text-uppercase fs-7"
                                        style="letter-spacing: 0.5px;">Porte</th>
                                    <th class="py-3 px-4 text-secondary fw-semibold text-uppercase fs-7 text-end"
                                        style="letter-spacing: 0.5px;">Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($pets as $pet)
                                    <tr style="transition: background-color 0.2s ease;">
                                        <td class="py-3 px-4 fw-bold text-dark">{{ $pet->nome }}</td>
                                        <td class="py-3 text-muted">{{ $pet->especie }}</td>
                                        <td class="py-3 text-muted">
                                            <span
                                                class="badge bg-light text-dark border px-2 py-1 rounded-pill fw-normal">{{ $pet->raca }}</span>
                                        </td>
                                        <td class="py-3 text-muted">{{ $pet->porte }}</td>

                                        <td class="py-3 px-4 text-end">
                                            <div class="btn-group gap-1" role="group">


                                                <a href="{{ route('pets.edit', $pet->id_pet) }}"
                                                    class="btn btn-outline-warning btn-sm rounded-pill px-3 fw-medium">
                                                    <i class="bi bi-pencil"></i> Editar
                                                </a>

                                                <form action="{{ route('pets.destroy', $pet->id_pet) }}"
                                                    method="POST" class="d-inline"
                                                    onsubmit="return confirm('Tem certeza que deseja excluir este pet?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-medium">
                                                        <i class="bi bi-trash"></i> Excluir
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <div class="text-muted mb-2">
                                                <i class="bi bi-clipboard-x display-4 text-secondary"></i>
                                            </div>
                                            <h5 class="fw-semibold text-secondary"
                                                style="font-family: 'Montserrat', sans-serif;">Nenhum pet por aqui</h5>
                                            <p class="text-muted small mb-0">Cadastre o seu primeiro pet clicando no
                                                botão "Novo Pet" acima.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <footer id="footer" class="footer-16 footer position-relative">
        <div class="container">
            <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-6 align-items-start">
                        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                            <h1 class="sitename">Mobipet</h1>
                        </a>
                        <p class="brand-description">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor
                            amigo!</p>
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

    <a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>
