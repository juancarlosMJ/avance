<?php
  include "../../clases/Equipos.php";
  $Equipos=new Equipos();

  $idEquipo=$_POST['idEquipo'];

  echo $Equipos->eliminarEquipo($idEquipo);
?>