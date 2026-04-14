<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mobipet - Perfil</title>

  <link href="assets/img/mobipet_icon.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Montserrat&family=Lato&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>

<header class="header fixed-top">
  <div class="container d-flex justify-content-between align-items-center">
    <h1>Mobipet</h1>
  </div>
</header>

<main class="main" style="margin-top:100px;">

  <!-- TÍTULO -->
  <div class="container text-center mb-5">
    <h1>Meu Perfil</h1>
    <p>Gerencie suas informações e do seu pet 🐾</p>
  </div>

  <!-- PERFIL -->
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="card p-4 shadow">

          <form action="#" method="post">

            <!-- DADOS DO TUTOR -->
            <h4 class="mb-3">👤 Dados do Tutor</h4>

            <div class="row mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nome completo" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email" required>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-6">
                <input type="tel" class="form-control" placeholder="Telefone" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Endereço">
              </div>
            </div>

            <!-- DADOS DO PET -->
            <h4 class="mb-3">🐶 Dados do Pet</h4>

            <div class="row mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nome do Pet" required>
              </div>
              <div class="col-md-6">
                <select class="form-select">
                  <option>Espécie</option>
                  <option>Cachorro</option>
                  <option>Gato</option>
                  <option>Outro</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Raça">
              </div>
              <div class="col-md-6">
                <input type="number" class="form-control" placeholder="Idade">
              </div>
            </div>

            <div class="mb-3">
              <textarea class="form-control" rows="3" placeholder="Observações (alergias, comportamento, etc.)"></textarea>
            </div>

            

            <!-- BOTÃO -->
            <div class="text-center">
              <button class="btn btn-primary px-5">Salvar Perfil</button>
            </div>

          </form>

        </div>

      </div>
    </div>
  </section>

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

</main>

<footer class="text-center mt-5 p-4">
  <p>© Mobipet - Todos os direitos reservados</p>
</footer>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
