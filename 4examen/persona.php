
<?php include "header.php"; ?>

<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="font-weight-light">Usuarios</h1>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPersona">
        Agregar nuevo usuario
    </span>
    <hr>
    <div id="tablaPersonasLoad"></div>
    <div style="height: 700px"></div>
    <p class="lead mb-0">Que tenga buen dia!!!</p>
    </div>
</div>
</div>

<?php
    include "vistas/personas/modalAgregar.php";
    include "vistas/personas/modalActualizar.php";
?>

<?php include "footer.php"; ?>
<script src="public/js/personas.js"></script>
