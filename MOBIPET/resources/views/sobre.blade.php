<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sobre nós</title>
    <meta name="description"
        content="Saiba como o Mobipet conecta tutores e petshops através do monitoramento em tempo real.">
    <meta name="keywords" content="petshop, monitoramento pet, banho e tosa, laravel, mobipet">

    <link href="{{ asset('assets/img/mobipet_icon.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

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
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>(19) 99999-8888</span></i>
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
                        <li><a href="{{ route('sobre') }}" class="active">Sobre nós</a></li>
                        <li><a href="{{ route('services') }}">Serviços</a></li>
                        <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

                        @if (session()->has('cliente_id'))
                            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
                            <li>
                                <a href="{{ route('pets.index') }}">
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

/* --- CORES ADICIONAIS --- */
.text-light-dim {
    color: rgba(255, 255, 255, 0.75);
}

.text-primary-dim {
    color: rgba(var(--bs-primary-rgb), 0.15);
}

/* --- BADGES & STATUS INDICATORS --- */
.badge-status {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background-color: #f8f9fa;
    border: 1px solid #e9ecef;
    padding: 0.5rem 1rem;
    border-radius: 100px;
    font-size: 0.85rem;
    color: #495057;
    font-weight: 500;
}

.status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #6c757d;
}

.status-dot.pulsing {
    background-color: var(--bs-primary);
    animation: statusPulse 2s infinite ease-in-out;
}

.status-dot.waiting { background-color: #ffc107; }
.status-dot.success { background-color: #198754; }

@keyframes statusPulse {
    0% { opacity: 0.4; }
    50% { opacity: 1; }
    100% { opacity: 0.4; }
}

/* --- MINIMAL CARDS --- */
.card-minimal {
    border: 1px solid #f1f3f5;
    background-color: #ffffff;
    border-radius: 16px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card-minimal:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03) !important;
}

/* Shape para ícones minimalistas */
.icon-shape {
    width: 48px;
    height: 48px;
    background-color: rgba(var(--bs-primary-rgb), 0.06);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* --- PASSO A PASSO (HOW IT WORKS) --- */
.step-card {
    border-radius: 16px;
    transition: background-color 0.2s ease;
}

.step-card:hover {
    background-color: #f8f9fa;
}

/* --- TIMELINE DE STATUS MINIMALISTA --- */
.timeline-minimal {
    display: flex;
    flex-column: column;
    position: relative;
    padding-left: 1.5rem;
    border-left: 2px solid #f1f3f5;
    gap: 1.5rem;
}

.timeline-step {
    position: relative;
}

.timeline-step .step-dot {
    position: absolute;
    left: calc(-1.5rem - 6px);
    top: 6px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #dee2e6;
    border: 2px solid #fff;
    z-index: 2;
}

.timeline-step.completed .step-dot {
    background-color: #3b82f6; /* Azul primário suave */
}

.timeline-step.completed .step-content {
    color: #6c757d;
    opacity: 0.75;
}

.timeline-step.active .step-dot {
    background-color: var(--bs-primary);
    box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.2);
}

.timeline-step .step-content {
    font-size: 0.95rem;
    color: #6c757d;
}

/* --- HERO IMAGE EFFECTS --- */
.hero-img-wrapper {
    position: relative;
    display: inline-block;
}

.hero-img-wrapper::after {
    content: '';
    position: absolute;
    inset: 0;
    box-shadow: inset 0 0 40px rgba(255,255,255,1);
    pointer-events: none;
}

/* --- CONTAINER DO FLUXOGRAMA MINIMALISTA --- */
.minimal-flow-container {
    position: relative;
    padding: 2rem 0;
}

/* Linha horizontal conectora elegante (Apenas para telas grandes) */
@media (min-width: 992px) {
    .minimal-flow-container::before {
        content: '';
        position: absolute;
        top: 42px; /* Alinha exatamente no centro vertical dos círculos numéricos */
        left: 12.5%; /* Começa no meio do primeiro card */
        width: 75%;  /* Termina no meio do último card */
        height: 1px;
        background: linear-gradient(to right, #dee2e6 0%, #dee2e6 100%);
        z-index: 0;
    }
}

/* Card do Fluxo */
.minimal-flow-card {
    position: relative;
    background: transparent;
    transition: transform 0.3s ease;
    padding: 0 10px;
}

.minimal-flow-card:hover {
    transform: translateY(-4px);
}

/* Invólucro do Círculo Numérico */
.flow-indicator-wrapper {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #ffffff; /* Fundo branco cobre a linha que passa por trás */
    padding: 0 15px; /* Cria o respiro nas laterais da linha */
    z-index: 2;
}

/* O Círculo Numérico Minimalista */
.flow-node {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #f8f9fa; /* Cinza bem claro, sutil */
    border: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--bs-primary); /* Usa o azul primário do Bootstrap */
    transition: all 0.3s ease;
}

/* Efeito sutil ao passar o mouse */
.minimal-flow-card:hover .flow-node {
    background: var(--bs-primary);
    color: #ffffff;
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.15);
}

/* Conteúdo de Texto */
.flow-content h5 {
    letter-spacing: -0.3px;
}

.flow-content p {
    color: #6c757d;
    font-weight: 400;
    line-height: 1.5;
}

/* --- RESPONSIVIDADE PARA MOBILE --- */
@media (max-width: 991px) {
    .minimal-flow-col {
        position: relative;
        text-align: center;
    }
    
    /* Linha conectora vertical sutil para mobile */
    .minimal-flow-col:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 44px;
        left: 50%;
        transform: translateX(-50%);
        width: 1px;
        height: calc(100% - 20px);
        background-color: #dee2e6;
        z-index: 0;
    }
    
    .flow-indicator-wrapper {
        padding: 0;
    }
}
    </style>

    <main class="bg-white text-dark">

    <section class="about-hero py-6">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    
                    <h1 class="display-5 fw-bold text-dark tracking-tight mb-4 lh-sm mt-5">
                        O jeito mais simples de agendar e acompanhar os cuidados do seu pet.
                    </h1>
                    <p class="fs-5 text-secondary mb-5 fw-normal">
                        A Mobipet conecta tutores e pet shops em uma única plataforma, tornando o processo de agendamento mais rápido, organizado e transparente.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge-status">
                            <span class="status-dot pulsing"></span> 🛁 Banho em andamento
                        </span>
                        <span class="badge-status">
                            <span class="status-dot waiting"></span> ✂️ Tosa aguardando
                        </span>
                        <span class="badge-status">
                            <span class="status-dot success"></span>  Pronto para retirada
                        </span>
                    </div>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <div class="hero-img-wrapper">
                        <img src="{{ asset('img/about-pets.png') }}" class="img-fluid rounded-4" alt="Interface Mobipet">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 bg-light-subtle border-top border-bottom border-light">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto mb-5">
                <span class="text-primary text-uppercase fw-bold tracking-wider small">O Problema</span>
                <h2 class="fw-bold text-dark mt-2 display-6">O que queremos resolver?</h2>
                <p class="text-secondary mt-3">
                    Muitos tutores enfrentam dificuldades para agendar serviços e acompanhar o atendimento dos seus pets. Ligações, mensagens e falta de informações geram insegurança e perda de tempo.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 card-minimal">
                        <div class="card-body p-4AndHalf">
                            <div class="icon-shape mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <h5 class="fw-bold text-dark mb-2">Agendamentos demorados</h5>
                            <p class="text-secondary small mb-0">Dependência de ligações e mensagens para marcar consultas, banhos e tosas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-minimal">
                        <div class="card-body p-4AndHalf">
                            <div class="icon-shape mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <h5 class="fw-bold text-dark mb-2">Falta de transparência</h5>
                            <p class="text-secondary small mb-0">O tutor não sabe em qual etapa do atendimento o pet realmente está.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-minimal">
                        <div class="card-body p-4AndHalf">
                            <div class="icon-shape mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                            </div>
                            <h5 class="fw-bold text-dark mb-2">Comunicação limitada</h5>
                            <p class="text-secondary small mb-0">Informações desencontradas e necessidade constante de contato com o estabelecimento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="text-primary text-uppercase fw-bold tracking-wider small">Nossa Solução</span>
                    <h2 class="fw-bold text-dark mt-2 mb-4 display-6">Tecnologia para aproximar tutores e pet shops.</h2>
                    <p class="text-secondary mb-4 fs-5">
                        Com a Mobipet, os tutores podem realizar agendamentos online de forma rápida e acompanhar cada etapa em tempo real.
                    </p>

                </div>

                <div class="col-lg-6">
                    <div class="card card-minimal shadow-sm border border-light-subtle">
                        <div class="card-body p-4AndHalf">
                            <h6 class="text-uppercase tracking-wider text-secondary fw-bold small mb-4">Status do atendimento simulado</h6>
                            
                            <div class="timeline-minimal">
                                <div class="timeline-step completed">
                                    <span class="step-dot"></span>
                                    <div class="step-content">📅 Agendamento realizado</div>
                                </div>
                                <div class="timeline-step completed">
                                    <span class="step-dot"></span>
                                    <div class="step-content">🐾 Pet recebido</div>
                                </div>
                                <div class="timeline-step active">
                                    <span class="step-dot"></span>
                                    <div class="step-content fw-bold text-dark">🛁 Banho em andamento</div>
                                </div>
                                <div class="timeline-step">
                                    <span class="step-dot"></span>
                                    <div class="step-content">✂️ Tosa aguardando</div>
                                </div>
                                <div class="timeline-step">
                                    <span class="step-dot"></span>
                                    <div class="step-content">🚗 Pronto para retirada</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Container do Fluxograma -->
        <section class="py-6 bg-white border-top border-bottom border-light overflow-hidden">
    <div class="container">
        
        <div class="text-center max-w-2xl mx-auto mb-5">
            <span class="text-primary text-uppercase fw-bold tracking-wider small" style="font-size: 0.75rem;">Como Funciona</span>
            <h2 class="fw-bold text-dark mt-2 display-6">Simples, rápido e intuitivo</h2>
        </div>

        <!-- Container Principal do Fluxograma Minimalista -->
        <div class="minimal-flow-container">
            <div class="row g-4 position-relative z-1">
                
                <!-- Passo 1 -->
                <div class="col-lg-3 col-md-6 minimal-flow-col">
                    <div class="minimal-flow-card">
                        <div class="flow-indicator-wrapper">
                            <div class="flow-node">01</div>
                        </div>
                        <div class="flow-content mt-4">
                            <h5 class="fw-bold text-dark fs-6 mb-2">Escolha o serviço</h5>
                            <p class="text-secondary small mb-0">Consulta, banho ou tosa direto pelo app ou plataforma web.</p>
                        </div>
                    </div>
                </div>

                <!-- Passo 2 -->
                <div class="col-lg-3 col-md-6 minimal-flow-col">
                    <div class="minimal-flow-card">
                        <div class="flow-indicator-wrapper">
                            <div class="flow-node">02</div>
                        </div>
                        <div class="flow-content mt-4">
                            <h5 class="fw-bold text-dark fs-6 mb-2">Agende online</h5>
                            <p class="text-secondary small mb-0">Escolha o melhor dia e horário para você em poucos cliques.</p>
                        </div>
                    </div>
                </div>

                <!-- Passo 3 -->
                <div class="col-lg-3 col-md-6 minimal-flow-col">
                    <div class="minimal-flow-card">
                        <div class="flow-indicator-wrapper">
                            <div class="flow-node">03</div>
                        </div>
                        <div class="flow-content mt-4">
                            <h5 class="fw-bold text-dark fs-6 mb-2">Acompanhe</h5>
                            <p class="text-secondary small mb-0">Veja o andamento de cada etapa do serviço em tempo real.</p>
                        </div>
                    </div>
                </div>

                <!-- Passo 4 -->
                <div class="col-lg-3 col-md-6 minimal-flow-col">
                    <div class="minimal-flow-card">
                        <div class="flow-indicator-wrapper">
                            <div class="flow-node">04</div>
                        </div>
                        <div class="flow-content mt-4">
                            <h5 class="fw-bold text-dark fs-6 mb-2">Retire seu pet</h5>
                            <p class="text-secondary small mb-0">Com total tranquilidade, segurança e máxima agilidade.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

    </div>
</section>

    <section class="py-6">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 card-minimal border border-light-subtle">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="p-2 bg-light rounded-circle text-primary fs-4">🐶</div>
                                <h4 class="fw-bold text-dark mb-0">Para os Tutores</h4>
                            </div>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Agendamento online 24h</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Acompanhamento em tempo real</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Mais praticidade para o dia a dia</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Segurança com notificações integradas</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Histórico completo de serviços prestados</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 card-minimal border border-light-subtle">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="p-2 bg-light rounded-circle text-primary fs-4">🏪</div>
                                <h4 class="fw-bold text-dark mb-0">Para os Pet Shops</h4>
                            </div>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Organização centralizada de agendamentos</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Redução drástica de ligações e mensagens</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Controle visual simplificado de serviços</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Aumento perceptível de produtividade</li>
                                <li class="d-flex align-items-center gap-3 text-secondary small"><span class="text-primary">✓</span> Melhoria contínua na experiência do cliente</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 bg-dark text-white text-center position-relative overflow-hidden">
        <div class="container position-relative z-1 max-w-2xl mx-auto">
            <span class="text-primary text-uppercase fw-bold tracking-wider small">Nosso Objetivo</span>
            <h2 class="display-6 fw-bold text-white mt-2 mb-4">Conectando carinho e tecnologia</h2>
            <p class="text-light-dim fs-5 fw-light lh-lg mb-0">
                Tornar a comunicação entre tutores e pet shops mais eficiente, transparente e acessível, utilizando a tecnologia para simplificar o cuidado com os animais e melhorar a experiência de todos os envolvidos.
            </p>
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
                        <p class="mb-1"><span><i class="bi bi-geo-alt"></i> Rua Bela Vista, 100 - Centro, Tambaú -
                                SP</span></p>
                        <p class="mb-1"><span><i class="bi bi-telephone"></i> (19) 98943-2384</span></p>
                        <p class="mb-0"><span><i class="bi bi-envelope"></i> mobipet@gmail.com</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center text-white bg-primary rounded-circle shadow"
        style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px; z-index: 999; font-size: 24px;">
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
