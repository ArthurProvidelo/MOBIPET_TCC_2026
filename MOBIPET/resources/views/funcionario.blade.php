<!-- TÍTULO E CABEÇALHO -->

<div class="card-header text-white text-center py-4 border-0" style="background-color: #497baf !important;">
    <div class="position-absolute top-50 start-50 translate-middle opacity-10"
        style="font-size: 7rem; color: #fff; pointer-events: none;">
        <i class="fa-solid fa-user-tie"></i>
    </div>

    <div class="position-relative z-index-1">
        <h2 class="h3 fw-bold text-white mb-1" style="font-family: 'Montserrat', sans-serif;">
            Cadastro de Funcionário
        </h2>
        <p class="text-white-50 small mb-0 fw-medium">
            Registre um novo colaborador da Mobipet
        </p>
    </div>
</div>
<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('index') }}" class="active">Início</a></li>
        <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
        <li><a href="{{ route('services') }}">Serviços</a></li>
        <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>
        <li><a href="{{ route('devs') }}">Meus Pets</a></li>
        <li>
            <a href="{{ route('pets.index') }}">
                Cadastro de Funcionário
            </a>
        </li>

        @if (session()->has('cliente_id'))
            <li><a href="{{ route('pets.create') }}">Cadastrar Pet</a></li>
            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>
    </ul>

    <div class="card-body p-4 p-md-5">

        @if ($errors->any())
            <div class="alert alert-danger border-0 shadow-sm rounded-3 p-3 mb-4 small">
                <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('funcionarios.salvar') }}">
            @csrf

            <!-- Nome -->

            <div class="mb-3">
                <label class="form-label fw-semibold text-secondary small text-uppercase">
                    Nome Completo
                </label>

                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                    <span class="input-group-text bg-light border-light-subtle text-muted">
                        <i class="fa-solid fa-user"></i>
                    </span>

                    <input type="text" name="nome" class="form-control" placeholder="Nome completo do funcionário"
                        required>
                </div>
            </div>

            <!-- Cargo e Salário -->

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-secondary small text-uppercase">
                        Cargo
                    </label>

                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                        <span class="input-group-text bg-light border-light-subtle text-muted">
                            <i class="fa-solid fa-briefcase"></i>
                        </span>

                        <input type="text" name="cargo" class="form-control" placeholder="Ex: Tosador" required>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-secondary small text-uppercase">
                        Salário
                    </label>

                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                        <span class="input-group-text bg-light border-light-subtle text-muted">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </span>

                        <input type="number" step="0.01" name="salario" class="form-control" placeholder="R$ 0,00"
                            required>
                    </div>
                </div>

            </div>

            <!-- CPF e Telefone -->

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-secondary small text-uppercase">
                        CPF
                    </label>

                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                        <span class="input-group-text bg-light border-light-subtle text-muted">
                            <i class="fa-solid fa-id-card"></i>
                        </span>

                        <input type="text" name="cpf" maxlength="11" class="form-control"
                            placeholder="Somente números" required>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-secondary small text-uppercase">
                        Telefone
                    </label>

                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                        <span class="input-group-text bg-light border-light-subtle text-muted">
                            <i class="bi bi-telephone"></i>
                        </span>

                        <input type="text" name="telefone" class="form-control" placeholder="(19) 99999-8888"
                            required>
                    </div>
                </div>

            </div>

            <!-- Data Admissão -->

            <div class="mb-3">
                <label class="form-label fw-semibold text-secondary small text-uppercase">
                    Data de Admissão
                </label>

                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                    <span class="input-group-text bg-light border-light-subtle text-muted">
                        <i class="fa-solid fa-calendar-days"></i>
                    </span>

                    <input type="date" name="data_admissao" class="form-control" required>
                </div>
            </div>

            <!-- Endereço -->

            <div class="mb-3">
                <label class="form-label fw-semibold text-secondary small text-uppercase">
                    Endereço
                </label>

                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                    <span class="input-group-text bg-light border-light-subtle text-muted">
                        <i class="bi bi-geo-alt"></i>
                    </span>

                    <input type="text" name="endereco" class="form-control" placeholder="Rua, Número, Bairro"
                        required>
                </div>
            </div>

            <!-- Função -->

            <div class="mb-3">
                <label class="form-label fw-semibold text-secondary small text-uppercase">
                    Função
                </label>

                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                    <span class="input-group-text bg-light border-light-subtle text-muted">
                        <i class="fa-solid fa-paw"></i>
                    </span>

                    <select name="funcao" class="form-control" required>
                        <option value="">Selecione</option>
                        <option value="Banhista">Banhista</option>
                        <option value="Tosador">Tosador</option>
                        <option value="Veterinário">Veterinário</option>
                        <option value="Recepcionista">Recepcionista</option>
                        <option value="Gerente">Gerente</option>
                    </select>
                </div>
            </div>

            <!-- Email -->

            <div class="mb-3">
                <label class="form-label fw-semibold text-secondary small text-uppercase">
                    E-mail
                </label>

                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                    <span class="input-group-text bg-light border-light-subtle text-muted">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <input type="email" name="email" class="form-control" placeholder="email@mobipet.com"
                        required>
                </div>
            </div>

            <!-- Senha -->

            <div class="mb-4">
                <label class="form-label fw-semibold text-secondary small text-uppercase">
                    Senha
                </label>

                <div class="input-group shadow-sm rounded-3 overflow-hidden">
                    <span class="input-group-text bg-light border-light-subtle text-muted">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input type="password" name="senha" class="form-control" placeholder="Digite uma senha"
                        required>
                </div>
            </div>

            <!-- Botão -->

            <button type="submit" class="btn btn-primary w-100 py-3 fw-semibold rounded-pill shadow-sm border-0"
                style="background-color:#497baf;">
                <i class="fa-solid fa-user-check me-2"></i>
                Cadastrar Funcionário
            </button>

            <div class="text-center mt-4">
                <p class="text-secondary small mb-0">
                    Gerenciamento de colaboradores Mobipet
                </p>
            </div>

        </form>

    </div>
