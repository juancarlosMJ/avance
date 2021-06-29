<?php
  include "Conexion.php";
  class Equipos extends Conexion {

    public function agregarEquipos($idPersona, $nombreEquipo, $modelo, $numeroSerie){
      $conexion= Conexion::conectar();

      $sql ="INSERT INTO t_equipo_computo (id_persona, nombre, modelo, numero_serie)
      VALUES ('$idPersona','$nombreEquipo','$modelo','$numeroSerie')";

      $respuesta= mysqli_query($conexion,$sql);
      return $respuesta;
    }
    public function eliminarEquipo($idEquipo){
      $conexion= Conexion::conectar();
      $sql="DELETE FROM t_equipo_computo WHERE id_equipo='$idEquipo'";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
    public function obtenerDatos($idEquipo){
      $conexion= Conexion::conectar();
      $sql = "SELECT id_equipo,
							nombre,
							modelo,
							numero_serie,
							id_persona 
					FROM t_equipo_computo
					WHERE id_equipo = '$idEquipo'";

			$result = mysqli_query($conexion, $sql);
			$Equipo = mysqli_fetch_array($result);
			$datos = array(
						"id_equipo" => $Equipo['id_equipo'],
						"id_persona" => $Equipo['id_persona'],
						"nombre" => $Equipo['nombre'],
						"modelo" => $Equipo['modelo'],
						"numero_serie" => $Equipo['numero_serie'] 
							);
			return $datos;
    }

    public function actualizarEquipo($datos){
      $conexion= Conexion::conectar();
      $sql = "UPDATE t_equipo_computo 
      SET id_persona = ?, nombre = ?, modelo = ?, numero_serie = ? 
      WHERE id_equipo = ?";
      $query=$conexion->prepare($sql);
      $query->bind_param('isssi',$datos['id_persona'],
                                  $datos['nombre'],
                                  $datos['modelo'],
                                  $datos['numeroSerie'],
                                  $datos['id_equipo']
      );
      $respuesta=$query->execute();
      return $respuesta;
    }
  }
?>