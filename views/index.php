<?php require_once 'views/layout/header.php'; ?>
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/estilosUsuarios.css">
<link rel="stylesheet" href="<?= baseUrl ?>assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="inicioAdmin.html">
      <img src="../../../img/logo.png">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"></ul>
      <a class="btn btn-outline-success" href="../../../index.html" role="button">Cerrar sesión</a>
    </div>
  </nav>
  <div class="contEmpleado">
    <div class="izqEmpleado">
      <!-- Menú vertical -->
      <div class="contenedor-menu">
        <a href="#" class="btn-menu text-decoration-none"><img src="../../../img/logo.png" alt="" title="Inicio"><i class="icono icon-menu1"></i></a>

        <ul class="menu menuAdmin">
          <li><a class="text-decoration-none" href="registroUsuario.html"><span class="icon-user-plus"></span>Registrar Usuario</a></li>
          <li><a class="text-decoration-none" href="#"><span class="icon-domain"></span>Seguimiento de Ventas<i class="icono derecha icon-cheveron-down"></i></a>
            <ul>
              <li><a class="text-decoration-none" href="registroEProcesadora.html">Registrar Empresa</a></li>
              <li><a class="text-decoration-none" href="registroVenta.html">Registrar Ventas</a></li>
              <li><a class="text-decoration-none" href="registroDevolucion.html">Registrar Devoluciones</a></li>
              <li><a class="text-decoration-none" href="consultaPerdidas.html">Consultar Pérdidas</a></li>
              <li><a class="text-decoration-none" href="reciboVenta.html">Recibo de Venta</a></li>
            </ul>
          </li>
          <li class="cerrar-sesión"><a class="text-decoration-none" href="../../../index.html"><span class="icon-enter"></span>Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>
    <div class="derEmpleado">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"><span class="icon-home"></span>Administrador
          </li>
        </ol>
      </div>
      <div class="container">
        <h2 class="text-success">Bienvenido: Administrador</h2>
        <p>Por favor seleccione una de las opciones de acuerdo a la acción que desea realizar del lado lateral
          izquierdo para empezar.</p>
      </div>
    </div>
  </div>
  <a href="<?= baseUrl; ?>user/logout" class="btn btn-outline-danger my-3">Cerrar Sesion</a>
  </div>

  <?php require_once 'views/layout/footer.php'; ?>