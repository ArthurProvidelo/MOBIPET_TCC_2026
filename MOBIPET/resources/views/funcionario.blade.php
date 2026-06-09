<!DOCTYPE html>
<html lang="pt-BR">

<head>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f4f7fb;
            font-family: Arial, sans-serif;
        }

        .navmenu {
            background: #497baf;
            padding: 12px 20px;
        }

        .navmenu ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 0;
            padding: 0;
        }

        .navmenu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .navmenu a:hover {
            color: #dcecff;
        }

        .card {
            overflow: hidden;
        }

        .card-header {
            position: relative;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-lg border-0 rounded-4">

                    <!-- CABEÇALHO -->
                    <div class="card-header text-white text-center py-4 border-0"
                        style="background-color: #497baf;">

                        <div class="position-absolute top-50 start-50 translate-middle opacity-10"
                            style="font-size: 7rem;">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>

                        <div class="position-relative">
                            <h2 class="fw-bold mb-1">
                                Cadastro de Funcionário
                            </h2>

                            <p class="mb-0">
                                Registre um novo colaborador da Mobipet
                            </p>
                        </div>
                    </div>

                    <!-- MENU -->
                    <nav class="navmenu">
                        <ul>
                            <li><a href="{{ route('index') }}">Início</a></li>
                            <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
                            <li><a href="{{ route('services') }}">Serviços</a></li>
                            <li><a href="{{ route('devs') }}">Desenvolvedores</a></li>

                            <li>
                                <a href="{{ route('funcionario') }}">
                                    Cadastro de Funcionário
                                </a>
                            </li>

                            @if(session()->has('cliente_id'))
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
                            @endif
                        </ul>
                    </nav>

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
                                    <input type="number"
                                        step="0.01"
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
                                        name="cpf"
                                        maxlength="11"
                                        class="form-control"
                                        placeholder="Somente números"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Telefone</label>
                                    <input type="text"
                                        name="telefone"
                                        class="form-control"
                                        placeholder="(19) 99999-8888"
                                        required>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Data de Admissão</label>
                                <input type="date"
                                    name="data_admissao"
                                    class="form-control"
                                    required>
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
                                <label class="form-label">Função</label>

                                <select name="funcao" class="form-select" required>
                                    <option value="">Selecione</option>
                                    <option value="Banhista">Banhista</option>
                                    <option value="Tosador">Tosador</option>
                                    <option value="Veterinário">Veterinário</option>
                                    <option value="Recepcionista">Recepcionista</option>
                                    <option value="Gerente">Gerente</option>
                                </select>
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

                            <div class="text-center mt-4">
                                <p class="text-muted mb-0">
                                    Gerenciamento de colaboradores Mobipet
                                </p>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>