<?php
  include "../../clases/Equipos.php";
  
  $Equipos=new Equipos();
  $datos=array(
    "id_equipo"=>$_POST['idEquipo'],
    "id_persona"=>$_POST['idPersonaU'],
    "nombre"=>$_POST['nombreEquipou'],
    "modelo"=>$_POST['modelou'],
    "numeroSerie"=>$_POST['numeroSerieu'],
  );
  echo $Equipos->actualizarEquipo($datos);
?>