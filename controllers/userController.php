<?php
require_once 'models/user.php';

class UserController
{
  public function index()
  {
    require_once 'views/index.php';
  }

  public function login()
  {
    require_once 'views/login.php';
  }

  public function logear()
  {
    if (isset($_POST) && $_POST['correo'] && $_POST['contra']) {
      $correo = $_POST['correo'];
      $contraseña = $_POST['contra'];
      $u = new User();
      $u->setCorreo($correo);
      $userFind = $u->findId();
      if ($userFind) {
        if ($userFind->contrasena == $contraseña) {
          $_SESSION['userLog'] = $userFind;
          header('Location: ' . baseUrl . 'user/index');
        } else {
          $_SESSION['login'] = 'ContraPaila';
          header('Location: ' . baseUrl);
        }
      } else {
        $_SESSION['login'] = 'NoExiste';
        header('Location: ' . baseUrl);
      }
    } else {
      $_SESSION['login'] = 'vacios';
      header('Location: ' . baseUrl);
    }
  }

  public function logout()
  {
    if (isset($_SESSION['userLog'])) {
      $_SESSION['userLog'] = null;
      unset($_SESSION['userLog']);
    }
    header('Location: ' . baseUrl);
  }
}
