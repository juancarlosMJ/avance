<?php
    include "../../clases/Conexion.php";
    $obj=new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT id_persona,
    CONCAT(paterno,' ', materno, ' ', nombre) as nombre FROM t_persona";

    $result=mysqli_query($conexion,$sql);
?>

<label for="idPersona">Categoria</label>
<select name="idPersona" id="idPersona" class="form-control" required>
    <option value="">Selecciona un usuario</option>
    <?php while($ver=mysqli_fetch_row($result)): ?>
    <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
    <?php endwhile; ?>
</select>