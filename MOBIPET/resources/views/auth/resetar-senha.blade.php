<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Redefinir senha</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card shadow">

                    <div class="card-body p-4">

                        <h3 class="text-center mb-4">
                            Redefinir senha
                        </h3>

                        <form method="POST" action="{{ route('password.update') }}">

                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="mb-3">

                                <label class="form-label">
                                    E-mail
                                </label>

                                <input type="email" name="email" class="form-control" required>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Nova senha
                                </label>

                                <input type="password" name="password" class="form-control" required>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Confirmar nova senha
                                </label>

                                <input type="password" name="password_confirmation" class="form-control" required>

                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Redefinir senha
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
