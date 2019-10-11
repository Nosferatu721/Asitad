<?php
require_once 'models/medicamento.php';

class MedicamentoController
{
  public function gestion()
  {
    // Instanciar un Objeto Medicamento
    $m = new Medicamento();
    // Ejecutar el Metodo findAll
    $medicamentos = $m->findAll();

    // Instanciar un Objeto Medicamento para pedir los Tipos
    $m2 = new Medicamento();
    // Ejecutar el Metodo findAllTiposM
    $tipos = $m2->findAllTiposM();
    require_once 'views/medicamento/crud.php';
  }

  public function registrar()
  {
    if (isset($_POST) && $_POST['nombre']  && $_POST['descripcion'] && $_POST['unidades'] && $_POST['tipo'] && $_POST['laboratorio'] && $_POST['fecha']) {
      // Guardar los datos en variables
      $nombre = $_POST['nombre'];
      $descripcion = $_POST['descripcion'];
      $unidades = $_POST['unidades'];
      $tipo = $_POST['tipo'];
      $laboratorio = $_POST['laboratorio'];
      $fecha = $_POST['fecha'];
      // Instanciar un Objecto Medicamento
      $m = new Medicamento();
      // Guardar los datos en el Objeto User
      $m->setNombre($nombre);
      $m->setDescripcion($descripcion);
      $m->setUnidades($unidades);
      $m->setTipo($tipo);
      $m->setLaboratorio($laboratorio);
      $m->setFechaVen($fecha);
      // Ejecutar el metodo para registrar
      $r = $m->save();
      if ($r) {
        $_SESSION['registrado'] = true;
        header('Location: ' . baseUrl . 'medicamento/gestion');
      }
    } else {
      header('Location: ' . baseUrl . 'medicamento/gestion');
    }
  }
  
  public function eliminar(){
    if (isset($_GET['id']) && !$_GET['id'] == '') {
      $idMedicamento = $_GET['id'];
      $m = new Medicamento();
      $m->setId($idMedicamento);
      $r = $m->delete();
      if ($r) {
        $_SESSION['eliminado'] = true;
        header('Location: ' . baseUrl . 'medicamento/gestion');
      }
    } else {
      header('Location: ' . baseUrl . 'medicamento/gestion');
    }
  }
}
