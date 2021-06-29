<?php
  include "../../clases/Equipos.php";
  $Equipos=new Equipos();

  $idPersona = $_POST['idPersona'];
  $nombreEquipo = $_POST['nombreEquipo'];
  $modelo = $_POST['modelo'];
  $numeroSerie = $_POST['numeroSerie'];

  echo $Equipos->agregarEquipos($idPersona, $nombreEquipo, $modelo, $numeroSerie);
?>