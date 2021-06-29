<?php
  include "../../clases/Equipos.php";

  $Equipos=new Equipos();
  $idEquipo=$_POST['idEquipo'];
  echo json_encode($Equipos->obtenerDatos($idEquipo));
?>