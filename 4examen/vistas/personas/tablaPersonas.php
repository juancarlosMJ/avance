<?php 
    include "../../clases/Conexion.php";
    $obj=new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT paterno, materno, nombre, email, telefono, id_persona FROM t_persona";
    $result=mysqli_query($conexion,$sql);
?>
<div class="table-responsive">
    <table class="table table-condensed table-hover" id="personasDataTable">
        <thead>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        <?php 
			while($mostrar = mysqli_fetch_array($result)) { 
                $idPersona = $mostrar['id_persona'];
		?>
            <tr>
                <td><?php echo $mostrar['paterno'] ?></td>
                <td><?php echo $mostrar['materno'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['email'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>

                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarPersona" onclick="obtenerDatos(<?php echo $idPersona ?>)">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarPersona(<?php echo $idPersona ?>)" >Eliminar</span>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#personasDataTable').DataTable();
    });
</script>