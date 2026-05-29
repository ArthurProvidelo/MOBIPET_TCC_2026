<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mobipet - Perfil</title>

  <!-- ICON -->
  <link href="assets/img/mobipet_icon.png" rel="icon">

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:wght@400;500;600;700;800&family=Lato:wght@300;400;700&display=swap"
    rel="stylesheet">

  <!-- BOOTSTRAP -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <style>

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body{
      font-family: 'Roboto', sans-serif;
      background: #f5f7fb;
      color: #1e293b;
    }

    h1,h2,h3,h4,h5,h6{
      font-family: 'Montserrat', sans-serif;
    }

    p,a,button,input,textarea,select{
      font-family: 'Lato', sans-serif;
    }

    /* HEADER */

    .header{
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 999;

      background: rgba(255,255,255,0.9);
      backdrop-filter: blur(12px);

      border-bottom: 1px solid #e2e8f0;
      padding: 18px 0;
    }

    .logo{
      font-size: 30px;
      font-weight: 700;
      color: #000000;
      margin: 0;
    }

    .navmenu ul{
      display: flex;
      align-items: center;
      gap: 28px;
      list-style: none;
      margin: 0;
    }

    .navmenu a{
      text-decoration: none;
      color: #64748b;
      font-size: 15px;
      font-weight: 500;
      transition: 0.3s;
      position: relative;
    }

    .navmenu a:hover,
    .navmenu .active{
      color: #4f46e5;
    }

    /* MAIN */

    .perfil-container{
      margin-top: 140px;
      margin-bottom: 80px;
    }

    .titulo h1{
      font-size: 42px;
      font-weight: 700;
      color: #0f172a;
      letter-spacing: -1px;
    }

    .titulo p{
      margin-top: 10px;
      color: #64748b;
      font-size: 17px;
    }

    /* CARD */

    .perfil-card{
      background: #fff;
      border-radius: 24px;
      padding: 45px;

      border: 1px solid #e2e8f0;

      box-shadow:
      0 10px 40px rgba(15,23,42,0.04);
    }

    /* FOTO PERFIL */

    .foto-perfil{
      text-align: center;
      margin-bottom: 40px;
    }

    /* TITULO DAS SEÇÕES */

    .section-title{
      display: flex;
      align-items: center;
      gap: 12px;

      margin-bottom: 22px;
      margin-top: 10px;
    }

    .section-title i{
      color: #4f46e5;
      font-size: 20px;
    }

    .section-title h4{
      margin: 0;
      font-size: 19px;
      font-weight: 600;
      color: #0f172a;
    }

    /* INPUTS */

    .form-control,
    .form-select{
      height: 56px;

      border-radius: 14px;

      border: 1px solid #dbe1ea;

      background: #f8fafc;

      padding-left: 16px;

      font-size: 15px;

      transition: 0.3s;

      box-shadow: none !important;
    }

    textarea.form-control{
      height: 120px;
      padding-top: 15px;
    }

    .form-control:focus,
    .form-select:focus{
      border-color: #6366f1;

      background: #fff;

      box-shadow:
      0 0 0 4px rgba(99,102,241,0.08) !important;
    }

    /* BOTÃO */

    .btn-salvar{
      background: #4f46e5;
      border: none;

      padding: 14px 38px;

      border-radius: 14px;

      color: #fff;

      font-size: 15px;
      font-weight: 600;

      transition: 0.3s;
    }

    .btn-salvar:hover{
      background: #4338ca;
      transform: translateY(-2px);
    }

    /* FOOTER */

    footer{
      background: #fff;
      border-top: 1px solid #e2e8f0;
      color: #64748b;
      font-size: 14px;
    }

    /* RESPONSIVO */

    @media(max-width:768px){

      .navmenu ul{
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px;
      }

      .titulo h1{
        font-size: 32px;
      }

      .perfil-card{
        padding: 28px;
      }

    }

  </style>

</head>

<body>

  <!-- HEADER -->

  <header class="header">

    <div class="container d-flex justify-content-between align-items-center">

      <h1 class="logo">Mobipet</h1>

      <nav class="navmenu">

        <ul>
          <li><a href="{{route('index')}}">Início</a></li>

          <li><a href="{{route('sobre')}}">Sobre nós</a></li>

          <li><a href="{{route('services')}}">Serviços</a></li>

          <li><a href="{{route('devs')}}">Desenvolvedores</a></li>

          <li><a href="{{route('agendamento')}}">Agendamento</a></li>

          <li><a href="{{route('contact')}}">Contato</a></li>

          <li><a href="{{route('perfil')}}" class="active">Perfil</a></li>

        </ul>

      </nav>

    </div>

  </header>

  <!-- MAIN -->

  <main class="perfil-container">

    <!-- TITULO -->

    <div class="container text-center titulo mb-5">

      <h1>Meu Perfil</h1>

      <p>
        Gerencie suas informações e acompanhe os dados do seu pet.
      </p>

    </div>

    <!-- PERFIL -->

    <section class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="perfil-card">

            <!-- FOTO -->

            <div class="foto-perfil">


              <h3>Seu Perfil</h3>

              <span>Tutor responsável</span>

            </div>

            <!-- FORM -->

            <form action="#" method="post">

              <!-- DADOS TUTOR -->

              <div class="section-title">

                <i class="bi bi-person-circle"></i>

                <h4>Dados do Tutor</h4>

              </div>

              <div class="row mb-3">

                <div class="col-md-6">

                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nome completo"
                    required>

                </div>

                <div class="col-md-6">

                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    required>

                </div>

              </div>

              <div class="row mb-4">

                <div class="col-md-6">

                  <input
                    type="tel"
                    class="form-control"
                    placeholder="Telefone"
                    required>

                </div>

                <div class="col-md-6">

                  <input
                    type="text"
                    class="form-control"
                    placeholder="Endereço">

                </div>

              </div>

              <!-- DADOS PET -->

              <div class="section-title">

                <i class="bi bi-heart"></i>

                <h4>Dados do Pet</h4>

              </div>

              <div class="row mb-3">

                <div class="col-md-6">

                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nome do Pet"
                    required>

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

                  <input
                    type="text"
                    class="form-control"
                    placeholder="Raça">

                </div>

                <div class="col-md-6">

                  <input
                    type="number"
                    class="form-control"
                    placeholder="Idade">

                </div>

              </div>

              <div class="mb-4">

                <textarea
                  class="form-control"
                  placeholder="Observações, alergias ou comportamento do pet."></textarea>

              </div>

              <!-- BOTÃO -->

              <div class="text-center">

                <button class="btn-salvar">

                  <i class="bi bi-check2-circle"></i>

                  Salvar Perfil

                </button>

              </div>

            </form>

          </div>

        </div>

      </div>

    </section>

  </main>

  <!-- FOOTER -->

  <footer class="text-center p-4">

    <p>
      © Mobipet - Todos os direitos reservados
    </p>

  </footer>

  <!-- SCRIPTS -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>