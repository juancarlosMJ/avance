<?php
  include "../../clases/Personas.php";
  $Personas=new Personas();
  $idPersona=$_POST['idPersona'];
  echo json_encode($Personas->obtenerDatos($idPersona));
?>