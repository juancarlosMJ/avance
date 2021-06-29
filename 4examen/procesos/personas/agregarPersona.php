<?php
  include "../../clases/Personas.php";

  $Personas=new Personas();

  $paterno=$_POST['paterno'];
  $materno=$_POST['materno'];
  $nombre=$_POST['nombre'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];

  echo $Personas->agregarPersona($paterno,$materno,$nombre,$telefono,$email);
?>