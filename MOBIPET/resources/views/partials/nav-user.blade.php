{{--
    Menu completo do cabeçalho, adaptado ao nível de acesso da sessão.
    Renderiza TODOS os <li> internos do <ul> do #navmenu.

    - Visitante / cliente / funcionário: veem os links institucionais + os do seu nível.
    - ADMIN: vê SOMENTE os menus operacionais (sem Início, Sobre, Serviços, Desenvolvedores).
    O link ativo é detectado pela rota atual (request()->routeIs()).
--}}
@php($nivelAcesso = session('nivel_acesso'))

@unless (session()->has('id') && $nivelAcesso === 'ADMIN')
    <li><a href="{{ route('index') }}" @class(['active' => request()->routeIs('index')])>Início</a></li>
    <li><a href="{{ route('sobre') }}" @class(['active' => request()->routeIs('sobre')])>Sobre nós</a></li>
    <li><a href="{{ route('services') }}" @class(['active' => request()->routeIs('services')])>Serviços</a></li>
    <li><a href="{{ route('devs') }}" @class(['active' => request()->routeIs('devs')])>Desenvolvedores</a></li>
@endunless

@if (session()->has('id') && $nivelAcesso === 'USUARIO')
    {{-- ================= CLIENTE ================= --}}
    <li><a href="{{ route('pets.create') }}" @class(['active' => request()->routeIs('pets.create')])>Cadastrar Pet</a></li>
    <li><a href="{{ route('agendamento') }}" @class(['active' => request()->routeIs('agendamento')])>Agendamento</a></li>
    <li><a href="{{ route('pets.index') }}" @class(['active' => request()->routeIs('pets.index', 'pets.edit', 'pets.show')])>Meus Pets</a></li>
    <li>
        <a href="{{ route('perfil') }}" class="nav-profile" aria-label="Meu perfil" title="Meu perfil"
            @class(['active' => request()->routeIs('perfil')])>
            <span class="nav-profile__badge">@include('partials.icon-perfil')</span>
            <span class="nav-profile__label">Perfil</span>
        </a>
    </li>
    <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

@elseif (session()->has('id') && $nivelAcesso === 'ADMIN')
    {{-- ================= ADMINISTRADOR ================= --}}
    <li><a href="{{ route('painel-controle') }}" @class(['active' => request()->routeIs('painel-controle')])>Painel</a></li>
    <li><a href="{{ route('funcionario.agendamentos') }}" @class(['active' => request()->routeIs('funcionario.agendamentos')])>Agendamentos</a></li>
    <li><a href="{{ route('funcionario') }}" @class(['active' => request()->routeIs('funcionario')])>Cadastrar Funcionário</a></li>
    <li><a href="{{ route('services.create') }}" @class(['active' => request()->routeIs('services.create')])>Cadastrar Serviço</a></li>
    <li>
        <a href="{{ route('perfil') }}" class="nav-profile" aria-label="Meu perfil" title="Meu perfil"
            @class(['active' => request()->routeIs('perfil')])>
            <span class="nav-profile__badge">@include('partials.icon-perfil')</span>
            <span class="nav-profile__label">Perfil</span>
        </a>
    </li>
    <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

@elseif (session()->has('id') && $nivelAcesso === 'FUNCIONARIO')
    {{-- ================= FUNCIONÁRIO ================= --}}
    <li><a href="{{ route('painel-controle') }}" @class(['active' => request()->routeIs('painel-controle')])>Painel</a></li>
    <li><a href="{{ route('funcionario.agendamentos') }}" @class(['active' => request()->routeIs('funcionario.agendamentos')])>Agendamentos</a></li>
    <li><a href="{{ route('services.create') }}" @class(['active' => request()->routeIs('services.create')])>Cadastrar Serviço</a></li>
    <li>
        <a href="{{ route('perfil') }}" class="nav-profile" aria-label="Meu perfil" title="Meu perfil"
            @class(['active' => request()->routeIs('perfil')])>
            <span class="nav-profile__badge">@include('partials.icon-perfil')</span>
            <span class="nav-profile__label">Perfil</span>
        </a>
    </li>
    <li><a href="{{ route('logout') }}">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

@else
    {{-- ================= VISITANTE ================= --}}
    <li><a href="{{ route('login') }}" @class(['active' => request()->routeIs('login')])>Entrar</a></li>
    <li><a href="{{ route('login.funcionario') }}" @class(['active' => request()->routeIs('login.funcionario')])>Sou Funcionário <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
@endif
