<?php
  include "../../clases/Personas.php";


  $Personas=new Personas();

  $datos=array(

    "id_persona"=>$_POST['idPersona'],
    "paterno"=>$_POST['paternou'],
    "materno"=>$_POST['maternou'],
    "nombre"=>$_POST['nombreu'],
    "telefono"=>$_POST['telefonou'],
    "email"=>$_POST['emailu']
  );

  echo $Personas->actualizarPersona($datos);
?>
