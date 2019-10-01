<?php

class User
{
  private $db;
  private $id;
  private $nombre;
  private $apellido;
  private $correo;
  private $contraseña;
  private $instituto;

  public function __construct()
  {
    $this->db = DataBase::conectar();
  }
  //
  function getId()
  {
    return $this->id;
  }

  function setId($id)
  {
    $this->id = $id;
  }
  //
  function getNombre()
  {
    return $this->nombre;
  }

  function setNombre($nombre)
  {
    $this->nombre = $this->db->real_escape_string($nombre);
  }
  //
  function getApellido()
  {
    return $this->apellido;
  }

  function setApellido($apellido)
  {
    $this->apellido = $this->db->real_escape_string($apellido);
  }
  //
  function getCorreo()
  {
    return $this->correo;
  }

  function setCorreo($correo)
  {
    $this->correo = $this->db->real_escape_string($correo);
  }
  //
  function getContraseña()
  {
    return $this->contraseña;
  }

  function setContraseña($contraseña)
  {
    $this->contraseña = $this->db->real_escape_string($contraseña);
  }
  //
  function getInstituto()
  {
    return $this->instituto;
  }

  function setInstituto($instituto)
  {
    $this->instituto = $this->db->real_escape_string($instituto);
  }

  public function findId()
  {
    $sql = "SELECT * FROM usuario WHERE correoElectronico='{$this->getCorreo()}'";
    $user = $this->db->query($sql);
    return $user->fetch_object();
  }
}
