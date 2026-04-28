<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>pagamento</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Clinic
  * Template URL: https://bootstrapmade.com/clinic-bootstrap-template/
  * Updated: Jul 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="departments-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="mailto:contact@example.com">mobipet@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+19 99999-8888</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">MobiPet</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="departments.html" class="active">Formas de pagamento</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="doctors.html">Doctors</a></li>
            <li class="dropdown"><a href="#"><span>More Pages</span> <i
                  class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                 <li><a href="{{route('index')}}" class="active">Início</a></li>
              <li><a href="{{route('sobre')}}">Sobre nós</a></li>
              <li><a href="{{route('services')}}">Serviços</a></li>
              <li><a href="{{route('devs')}}">Desenvolvedores</a></li>
              <li><a href="{{route('agendamento')}}">Agendamento</a></li>
              <li><a href="{{route('contact')}}">Contato</a></li>
              <li><a href="{{route('departments')}}">Produtos</a></li>
              <li><a href="{{route('perfil')}}">Perfil</a></li>
              
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                  class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                      class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Formas de pagamento</h1>
              <p class="mb-0">
                <!-- Texto aqui -->
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Início</a></li>
            <li class="current">Pagamentos</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Departments Tabs Section -->
    <section id="departments-tabs" class="departments-tabs section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="medical-specialties">
          <div class="row">
            <div class="col-12">
              <div class="specialty-navigation">
                <div class="nav nav-pills d-flex" id="specialty-tabs" role="tablist" data-aos="fade-up"
                  data-aos-delay="400">
                  <a class="nav-link department-tab active" id="neurology-tab" data-bs-toggle="pill"
                    href="#departments-tabs-neurology" role="tab" aria-controls="departments-tabs-neurology"
                    aria-selected="true" data-aos="fade-up" data-aos-delay="100">Pix</a>
                  <a class="nav-link department-tab" id="surgery-tab" data-bs-toggle="pill"
                    href="#departments-tabs-surgery" role="tab" aria-controls="departments-tabs-surgery"
                    aria-selected="false" data-aos="fade-up" data-aos-delay="150">Cartão de crédito/débito</a>
                  <a class="nav-link department-tab" id="dental-tab" data-bs-toggle="pill"
                    href="#departments-tabs-dental" role="tab" aria-controls="departments-tabs-dental"
                    aria-selected="false" data-aos="fade-up" data-aos-delay="200">Realizar pagamento na hora!</a>
                </div>
              </div>
            </div>

           <div class="col-12">
  <div class="tab-content department-content" id="specialty-content" data-aos="fade-up"
    data-aos-delay="500">

    <div class="tab-pane fade show active" id="departments-tabs-neurology" role="tabpanel"
      aria-labelledby="neurology-tab">
      <div class="row department-layout">

        <div class="col-lg-4 order-lg-2">
        </div>

        <div class="col-lg-8 order-lg-1">
          <div class="department-info">
            <h2 class="department-title">Realizar pagamento com pix:</h2>

            <div class="department-description">

              <!-- QR Code -->
              <div id="qrcode" style="margin: 20px 0;"></div>

              <!-- Texto copiar chave -->
              <p style="margin-top:15px;">
                Ou copie a chave PIX:
              </p>

              <div style="display:flex; gap:10px;">
                <input type="text" id="pixKey" class="form-control"
                  value="chave-pix-fake-1234@email.com" readonly>

                <button onclick="copiarPix()" class="btn btn-primary">
                  Copiar
                </button>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div><!-- End Neurology Tab -->


<!-- Biblioteca QRCode -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<script>
  // Código PIX fake (apenas para teste visual)
  const pixFake = "00020126360014BR.GOV.BCB.PIX0114fakepix@email.com5204000053039865802BR5920Teste Usuario6009SaoPaulo62070503***6304ABCD";

  // Gerar QR Code
  new QRCode(document.getElementById("qrcode"), {
    text: pixFake,
    width: 200,
    height: 200
  });

  // Função copiar chave
  function copiarPix() {
    const input = document.getElementById("pixKey");
    input.select();
    input.setSelectionRange(0, 99999);
    document.execCommand("copy");
    alert("Chave PIX copiada!");
  }
</script>

                <div class="tab-pane fade" id="departments-tabs-surgery" role="tabpanel" aria-labelledby="surgery-tab">

    <div class="col-lg-8 order-lg-1">
      <div class="department-info">
        <h2 class="department-title">Realizar pagamento com cartão de crédito/débito:</h2>


          <form class="payment-form">
            
            <label>Número do Cartão</label>
            <input type="text" class="form-control" placeholder="0000 0000 0000 0000" maxlength="19">

            <label class="mt-3">Nome no Cartão</label>
            <input type="text" class="form-control" placeholder="Nome completo">

            <div class="row mt-3">
              <div class="col-md-6">
                <label>Validade</label>
                <input type="text" class="form-control" placeholder="MM/AA" maxlength="5">
              </div>

              <div class="col-md-6">
                <label>CVV</label>
                <input type="password" class="form-control" placeholder="123" maxlength="3">
              </div>
            </div>

          <button type="submit" class="btn btn-primary mt-4 w-100">
              Realizar pagamento
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Surgery Tab -->

<div class="tab-pane fade" id="departments-tabs-dental" role="tabpanel" aria-labelledby="dental-tab">

    <div class="col-lg-8 order-lg-1">
      <div class="department-info">
        <h2 class="department-title">Realizar pagamento na hora</h2>

        <div class="department-description">

          <div class="payment-alert">
            <div class="alert-icon"></div>
            <div>
              <h5>Pagamento presencial</h5>
              <p>
                Ok! Seu pagamento deverá ser realizado diretamente com a recepcionista do petshop no momento do atendimento.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Dental Tab -->

                <div class="tab-pane fade" id="departments-tabs-ophthalmology" role="tabpanel"
                  aria-labelledby="ophthalmology-tab">
                  <div class="row department-layout">
                    <div class="col-lg-4 order-lg-2">
                    </div>
                    <div class="col-lg-8 order-lg-1">
                      <div class="department-info">
                        <h2 class="department-title">Ophthalmology Department</h2>
                        <p class="department-description">Omnis dolor repellendus temporibus autem quibusdam et aut
                          officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>

                        <div class="row mt-4">
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-eye"></i>
                              </div>
                              <div class="service-content">
                                <h4>Vision Testing</h4>
                                <p>Sint et voluptatum sint quia dolor sit amet consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-camera"></i>
                              </div>
                              <div class="service-content">
                                <h4>Retinal Imaging</h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-bolt"></i>
                              </div>
                              <div class="service-content">
                                <h4>Laser Surgery</h4>
                                <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-prescription-bottle"></i>
                              </div>
                              <div class="service-content">
                                <h4>Eye Care Plans</h4>
                                <p>Ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Ophthalmology Tab -->

                <div class="tab-pane fade" id="departments-tabs-cardiology" role="tabpanel"
                  aria-labelledby="cardiology-tab">
                  <div class="row department-layout">
                    <div class="col-lg-4 order-lg-2">
                      <div class="department-image">
                        <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Department" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-8 order-lg-1">
                      <div class="department-info">
                        <h2 class="department-title">Cardiology Department</h2>
                        <p class="department-description">In voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt.</p>

                        <div class="row mt-4">
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-heartbeat"></i>
                              </div>
                              <div class="service-content">
                                <h4>Heart Monitoring</h4>
                                <p>Mollit anim id est laborum sed ut perspiciatis unde omnis iste natus error.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-chart-line"></i>
                              </div>
                              <div class="service-content">
                                <h4>ECG Analysis</h4>
                                <p>Sit voluptatem accusantium doloremque laudantium totam rem aperiam.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-tint"></i>
                              </div>
                              <div class="service-content">
                                <h4>Blood Tests</h4>
                                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="service-item">
                              <div class="service-icon">
                                <i class="fas fa-shield-heart"></i>
                              </div>
                              <div class="service-content">
                                <h4>Preventive Care</h4>
                                <p>Vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Cardiology Tab -->

              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Departments Tabs Section -->


        </div>

      </div>

    </section><!-- /Departments Section -->

  </main>

  <footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-start">


              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

   <div class="col-lg-5">
            <div class="brand-section">
              <a href="index.html" class="logo d-flex align-items-center mb-4">
                <span class="sitename">Mobipet</span>
              </a>
              <p class="brand-description">Obrigado pela confiança. Estamos prontos para cuidar do seu melhor amigo!</p>

              <div class="contact-info mt-5">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
               <br><br>   <span>Rua Bela Vista, 100 - Centro, Tambaú - SP</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                <br><br>  <span> (19)9999-8888</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                 <br><br> <span>mobipet@gmail.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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

  <!-- Scroll Top -->
  <a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>