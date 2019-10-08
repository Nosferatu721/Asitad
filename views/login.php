<?php require_once 'views/layout/header.php'; ?>
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/estilos.css">
<style>
  h4 {
    text-shadow: 0px 1px 5px black
  }
</style>
</head>

<body>
  <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'vacios') : ?>
    <h4 class="m-0 text-danger text-center bg-dark fixed-top">Campos Vacios</h4>
  <?php endif; ?>
  <?= Utils::deleteSession('login') ?>
  <nav class="borde navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">
      <img id="logo" src="<?= baseUrl ?>assets/img/logo.png" width="auto" height="45" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#acl-nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#acl-contactenos">Contáctenos</a>
        </li>
      </ul>
      <!-- Ingreso -->
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Iniciar sesión
        </button>
        
        <form action="<?= baseUrl ?>user/logear" method="POST" class="dropdown-menu p-3 dropdown-menu-right">
          <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="email@ejemplo.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
          </div>
          <div class="form-group">
            <label for="contra">Contraseña</label>
            <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" pattern="[A-Za-z0-9]{0,8}" title="Escriba entre 5 y 8 caracteres">
          </div>
          <button type="submit" class="btn btn-primary" id="btnIngreso">Ingresar</button>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" data-toggle="modal" href="#inicio-sesion">¿Olvidaste tu contraseña?</a>
      </div>
      </form>
    </div>
    </div>
  </nav>

  <!-- Modal Olvida Contraseña-->
  <div class="modal fade" id="inicio-sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ml-auto" id="exampleModalLabel">¿Olvidaste tu contraseña?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="emailIngreso">Correo Electrónico</label>
              <input type="email" class="form-control" id="emailRecuperacion" aria-describedby="emailHelp" placeholder="email@ejemplo.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
            </div>
            <div class="form-group text-center m-0">
              <button type="button" class="btn btn-primary mt-3" onclick="validarOlvidoContraseña();">Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Carrusel -->
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= baseUrl ?>assets/img/1.jpg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h3>¡Da vida al planeta: RECICLA!</h3>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= baseUrl ?>assets/img/2.jpg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h3>Agua, papeles, vidrio, botellas, plásticos, entre otros… para que los volvamos a reusar tu puedes,
              ¡Recicla!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= baseUrl ?>assets/img/3.jpg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h3>Reciclar no es una obligación, es TU responsabilidad.</h3>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- Nosotros -->
  <div id="acl-nosotros"></div>
  <div class="titulo" id="nosotros">
    <h2 class="text-center text-uppercase font-weight-bold">Nosotros</h2>
  </div>
  <div class="container">
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="<?= baseUrl ?>assets/img/no-avatar.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?= baseUrl ?>assets/img/no-avatar.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?= baseUrl ?>assets/img/no-avatar.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contáctenos -->
  <div id="acl-contactenos"></div>
  <div class="titulo" id="contactenos">
    <h2 class="text-center text-uppercase font-weight-bold">Contáctenos</h2>
  </div>
  <div class="container-fluid contactenos">
    <div class="card-deck">
      <div class="card">
        <div class="card-body formulario">
          <form class="container">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input class="form-control" id="nombre" type="text">
            </div>
            <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
            </div>
            <div class="form-group">
              <label for="asunto">Asunto</label>
              <input class="form-control" id="asunto" type="text">
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje</label>
              <textarea class="form-control" id="mensaje" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="validarForm();">Enviar</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="card-body mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3753.4824525009885!2d-74.06181499099586!3d4.651765244405346!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1548798568369" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">EcoReci</h6>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Redes Sociales</h6>
          <p>
            <a class="text-decoration-none" href="#!">Facebook</a>
          </p>
          <p>
            <a class="text-decoration-none" href="#!">Instagram</a>
          </p>
          <p>
            <a class="text-decoration-none" href="#!">Twitter</a>
          </p>
          <p>
            <a class="text-decoration-none" href="#!">YouTube</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="icon-location mr-3"></i> Cra. 13 #6510, Bogotá</p>
          <p>
            <i class="icon-mail2 mr-3"></i> ecoreci@gmail.com</p>
          <p>
            <i class="icon-phone mr-3"></i> +57 318 567 8874</p>
        </div>
      </div>
      <hr>
      <div>
        <p class="text-center">© 2019 Copyright EcoReci</p>
      </div>
    </div>
  </footer>
  <!-- Footer -->
  <!-- SweetAlert -->
  <script src="js/sweetalert.min.js"></script>
  <script src="js/scripts.js"></script>
  <?php require_once 'views/layout/footer.php'; ?>