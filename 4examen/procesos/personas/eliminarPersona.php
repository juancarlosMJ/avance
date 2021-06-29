<?php
  include "../../clases/Personas.php";
  $Personas=new Personas();

  $idPersona=$_POST['idPersona'];
  echo $Personas->eliminarPersona($idPersona);
  
?>