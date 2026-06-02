<div class="container py-5">

    <div class="card shadow">

        <div class="card-header">
            Dados do Pet
        </div>

        <div class="card-body">

            <h3>{{ $pet->nome }}</h3>

            <hr>

            <p>
                <strong>Espécie:</strong>
                {{ $pet->especie }}
            </p>

            <p>
                <strong>Raça:</strong>
                {{ $pet->raca }}
            </p>

            <p>
                <strong>Porte:</strong>
                {{ $pet->porte }}
            </p>

            <p>
                <strong>Data de Nascimento:</strong>
                {{ date('d/m/Y', strtotime($pet->data_nascimento)) }}
            </p>

            <a href="{{ route('pets.index') }}"
               class="btn btn-primary">

                Voltar

            </a>

        </div>

    </div>

</div>
