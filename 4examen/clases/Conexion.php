<?php 
    class Conexion{
      public function conectar(){

        $server="localhost";
        $usuario="root";
        $password="";
        $bd="unidad4s";
        $conexion=mysqli_connect($server, $usuario, $password, $bd);
        return $conexion;
        
      }
    }
?>