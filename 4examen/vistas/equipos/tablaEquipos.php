<?php 
    include "../../clases/Conexion.php";
    $obj=new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT t_equipo_computo.nombre, modelo, numero_serie, t_persona.nombre, id_equipo 
    FROM t_equipo_computo INNER JOIN t_persona WHERE t_equipo_computo.id_persona=t_persona.id_persona";
    
    $result=mysqli_query($conexion,$sql);
?>
<div class="table table-responsive">
    <table class="table table-condensed table-hover" id="equiposDataTable">
        <thead>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Numero de serie</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php while($ver=mysqli_fetch_row($result)):?>
            <tr>
                <td> <?php echo $ver[3] ?></td>
                <td> <?php echo $ver[0] ?></td>
                <td> <?php echo $ver[1] ?></td>
                <td> <?php echo $ver[2] ?></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarEquipo" onclick="obtenerDatos(<?php echo $ver[4] ?>)">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarEquipo(<?php echo $ver[4] ?>)">
                        Eliminar
                    </span>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#equiposDataTable').DataTable();
    });
</script>