<?php require_once 'views/layout/header.php'; ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="<?= baseUrl ?>assets/img/logo.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/bootstrap.min.css" />
<!-- Custom font icons -->
<link rel="stylesheet" href="https://file.myfontastic.com/6AeAYiqp5KBjSiZ2tE8WJW/icons.css" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- Slider -->
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/slider.min.css" />
<!-- Lightbox Pop up -->
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/lightbox.min.css" />
<!-- Datepicker -->
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/datepicker.min.css" />
<!-- Datepicker -->
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/timepicki.min.css" />
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/owl.carousel.min.css" />
<!-- Custom CSS -->
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/style.default.css" />
<!-- Modernizr -->
<script type="text/javascript" src="<?= baseUrl ?>assets/js/modernizr.custom.79639.min.js"></script>
</head>

<body>
  <div class="page-holder">
    <!-- Navbar -->
    <header class="header">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header"><a href="index.php" class="navbar-brand"><img src="<?= baseUrl ?>assets/img/logo.png" alt="ASITAD" width="100" /></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
            </div>
          </div>
          <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#inicio">Inicio</a></li>
              <li><a href="#somos">Quienes somos</a></li>
              <li><a href="#galeria">galeria</a></li>
              <li><a href="#contactenos">contactenos</a></li>
              <li><a href="#ubicanos">Ubicanos</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ingreso
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" data-toggle="modal" href="#registro">Registro</a>
                  <br />
                  <a class="dropdown-item" data-toggle="modal" href="#inicio-sesion">Inicia Sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header><!-- End Navbar -->
    <!-- Modal Registro-->
    <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title ml-auto" id="exampleModalLabel">Registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nombre(s)</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Nombres">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Apellidos</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Apellidos">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Correo electrónico</label>
                <input type="email" class="form-control" id="inputAddress" placeholder="user@ejemplo.com">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Dirección</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Cl / Cra # xx - xx. Barrio xxxxx">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">País</label>
                  <input type="text" class="form-control" id="pais" placeholder="Colombia">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Ciudad</label>
                  <select id="inputState" class="form-control">
                    <option selected="">Medellín</option>
                    <option selected="">Cali</option>
                    <option selected="">Boyacá</option>
                    <option selected="">Bogotá</option>
                    <option selected="">Seleccione una opción</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck"></input>
                  <label class="form-check-label" for="gridCheck">
                    Acepta términos y condiciones
                  </label>
                </div>
              </div>
              <div class="form-group text-center m-0">
                <button type="submit" class="btn btn-primary mt-3">Enviar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ingreso-->
    <div class="modal fade" id="inicio-sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title ml-auto" id="exampleModalLabel">Inicia Sesión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <input type="text" id="usuario" placeholder="Usuario" required>
              <br>
              <input type="password" id="contra" placeholder="Contraseña" required title="Contraseña" />
              <br />
              <button value="INICIAR">iniciar</button>
            </form>




          </div>
        </div>
      </div>
    </div>
    <section id="inicio" class="hero">
      <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
          <!-- slide -->
          <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner" style="background-image: url(<?= baseUrl ?>assets/img/279405-P5UINA-576.jpg);">
              <div class="container">
                <h2>Asitad <span class="text-primary">sistema de informacion</span></h2>
                <h1>para la ayuda del Hogar Villa Alegria</h1>
              </div>
            </div>
          </div>
          <!-- slide -->
          <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner" style="background-image: url(<?= baseUrl ?>assets/img/289476-P6O1TC-841.jpg);">
              <div class="container">
                <h1>Somos un hogar especializado en el cuidado del las personas de la tercera edad</h1>
              </div>
            </div>
          </div>
          <!-- slide -->
          <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner" style="background-image: url(<?= baseUrl ?>assets/img/63334.jpg);">
              <div class="container">
                <h2>visitanos<span class="text-primary"></span></h2>
                <h1>Somos un hogar especializados</h1>
                <p></p>
              </div>
            </div>
          </div>
        </div><!-- End sl-slider -->

        <!-- slider pagination -->
        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
        </nav>

        <!-- scroll down btn -->
        <a id="scroll-down" href="#about" class="hidden-xs"></a>

        <!-- social icons menu -->
        <div class="social">
          <div class="wrapper">
            <ul class="list-unstyled">
              <li><a href="#" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <span>Redes</span>
          </div>
        </div>
      </div><!-- End slider-wrapper -->
    </section><!-- End Hero Section -->
    <!-- Details -->
    <section id="details" class="details">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="heading text-center">
              <p>Contactanos</p>
              <h5>En</h5>
            </div>
            <a href="tel:3213756622" class="phone">321 375 6622</a>
          </div>

          <div class="col-sm-6">
            <div class="heading text-center">
              <p>Comunicate con nosotros</p>
              <h5>Estaremos atentos a tus solicitudes y inquietudes</h5>
            </div>
            <a href="#" class="reviews btn-unique"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Details-->
    <!-- About Section -->
    <section id="somos" class="about">
      <div class="container text-center">
        <header>
          <h2>Quienes somos</h2>
          <h3>Historia</h3>
        </header>
        <p class="lead">como institución sin ánimo de lucro, es promover y mejorar la calidad de vida de las Personas de la tercera edad que se encuentre en estado de vulnerabilidad, canalizando los recursos que recibimos de las empresas públicas/privadas, personas naturales/jurídicas, brindando alimentación, alojamiento, recreación y mucho amor a las personas que tenemos bajo nuestro cuidado.</p>
      </div>
      <div class="container text-center">
        <header>
          <h3>Vision</h3>
        </header>
        <p class="lead">La Asociación Hogar Villa Alegría en los próximos cinco años deberá crecer a una tasa real del 20% anual. Esto exigirá buscar todo el apoyo necesario o incluso hacer alianzas con otras entidades a fin de contribuir al mejoramiento y la calidad de vida del adulto mayor; enfocando todos nuestros propósitos a la ampliación de la cobertura de la atención.</p>
      </div>
      <div class="container text-center">
        <header>
          <h3>Mision</h3>
        </header>
        <p class="lead">como institución sin ánimo de lucro, es promover y mejorar la calidad de vida de las Personas de la tercera edad que se encuentre en estado de vulnerabilidad, canalizando los recursos que recibimos de las empresas públicas/privadas, personas naturales/jurídicas, brindando alimentación, alojamiento, recreación y mucho amor a las personas que tenemos bajo nuestro cuidado.</p>
      </div>
    </section>
    <!-- End About Section -->
    <!-- Gallery Section -->
    <section id="galeria" class="gallery">
      <div class="container text-center">
        <header>
          <h2>Galeria</h2>
          <h3>Asitad</h3>
        </header>

        <div class="gellery">
          <div class="row">
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/people-2564190__340.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/people-2564190__340.jpg" data-lightbox="imagen 1" data-title="Agrado entre los diferentes abuelitos" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/grandparents-2778661_960_720.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/grandparents-2778661_960_720.jpg" data-lightbox="imagen 2" data-title="Apoyo incondicional" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/hands-981400_1920.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/hands-981400_1920.jpg" data-lightbox="imagen 3" data-title="Ayuda a las personas de tercera edad" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/nick-karvounis-381270-unsplash.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/nick-karvounis-381270-unsplash.jpg" data-lightbox="imagen 4" data-title="Control del cuidado" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/nikoline-arns-1093311-unsplash.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/nikoline-arns-1093311-unsplash.jpg" data-lightbox="imagen 5" data-title="Cooperacion entre sus abuelitos y sus familiares" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/oc-gonzalez-275709-unsplash.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/oc-gonzalez-275709-unsplash.jpg" data-lightbox="imagen 6" data-title="Comunicacion entre los abuelitos y sus familiares" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/grandma-3628304__340.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/grandma-3628304__340.jpg" data-lightbox="imagen 7" data-title="Ayuda a los abuelitos" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
              <div class="item">
                <img src="<?= baseUrl ?>assets/img/knit-869221__340.jpg" alt="image" />
                <a href="<?= baseUrl ?>assets/img/knit-869221__340.jpg" data-lightbox="imagen 8" data-title="Manualidades hechas por los abuelitos" class="has-border">
                  <span class="icon-search"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Contac Section -->
    <section id="contactenos" class="booking">
      <div class="container text-center">
        <header>
          <h2>Contactenos</h2>
          <h3>estaremos atentos a tus inquietudes</h3>
        </header>

        <div class="row">
          <div class="form-holder col-md-10 col-md-push-1 text-center">
            <div class="ribbon">
              <i class="fa fa-star"></i>
            </div>

            <h2>Formulario de contacto</h2>

            <form id="booking-form" method="get" action="#">
              <div class="row">
                <div class="col-md-10 col-md-push-1">
                  <div class="row">
                    <label for="name" class="col-sm-6 unique">Nombre
                      <input name="Nombre" type="text" id="name" required="" />
                    </label>
                    <label for="email" class="col-sm-6 unique">Correo
                      <input name="Correo" type="email" id="email" required="" />
                    </label>
                    <label for="number" class="col-sm-6 unique">Telefono
                      <input name="Telefono" type="text" id="number" required="" />
                    </label>
                    <label for="request" class="col-sm-12 unique">Mensaje
                      <textarea id="Mensaje" name="request" required=""></textarea>
                    </label>
                    <div class="col-sm-12">
                      <button type="submit" class="btn-unique">Enviar mensaje</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Booking Section -->


    <!-- End Booking Section -->
    <section id="ubicanos" class="contact">
      <div class="map border">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15906.360443023348!2d-74.0819357!3d4.6669341!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45cb6f99eb744964!2sAsociaci%C3%B3n+Hogar+Villa+Alegr%C3%ADa!5e0!3m2!1ses!2sco!4v1542496411829" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>
    </section>
    <!-- End Booking Section -->


    <!-- Footer -->
    <footer id="mainFooter" class="mainFooter">
      <div class="container">
        <div class="row">
          <div class="col-md-4 brief">
            <div class="header">
              <img src="<?= baseUrl ?>assets/img/logo.png" alt="Asitad" width="100" />
            </div>
            <p>Somos un sitema de informacion diseñado para facilitar los procesos que son llevados acabo en el Hogar Villa Alegria.</p>
          </div>

          <div class="col-md-4 contact">
            <div class="header">
              <h6>Contactenos</h6>
            </div>
            <ul class="contact list-unstyled">
              <li><span class="icon-map text-primary"></span>Cra. 57b #66b51, Bogotá</li>
              <li><a href="asitad@asitad.com"><span class=" icon-mail  text-primary"></span>asitad@asitad.com</a></li>
              <li><span class="icon-phone text-primary"></span>321 3756 622</li>
            </ul>
          </div>
        </div>

        <ul class="social list-unstyled list-inline">
          <li><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#" target="_blank" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>

      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <ul class="list-unstyled list-inline">
                <li><a href="#">Politicas privacidad</a></li>
                <li><a href="#">Terminos y uso</a></li>
                <li><a href="#">Contactenos</a></li>
              </ul>
            </div>

            <div class="col-sm-7">
              <p>&copy; 2019 Asitad</p>
              <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- scroll top btn -->
    <div id="scrollTop" class="btn-unique">
      <i class="fa fa-angle-up"></i>
    </div><!-- end scroll top btn -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/jquery.ba-cond.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/jquery.slitslider.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/lightbox.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/datepicker.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/datepicker.en.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/timepicki.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/jquery.validate.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/smooth.scroll.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0dSWcBx-VghzhzQB6oCMTgeXMOhCYTvk"></script>
  <script src="<?= baseUrl ?>assets/js/map.min.js"></script>
  <script src="<?= baseUrl ?>assets/js/script.js"></script>

  <?php require_once 'views/layout/footer.php'; ?>