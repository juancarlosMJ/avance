
<?php include "header.php"; ?>

<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="font-weight-light">Categoria</h1>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEquipo">
        Agregar un nueva categoria 
    </span>
    <hr>
    <div id="tablaEquipoLoad"></div>
    <p class="lead">Scroll down...</p>
    <div style="height: 700px"></div>
    <p class="lead mb-0">You've reached the end!</p>
    </div>
</div>
</div>

<?php 
    include "vistas/equipos/modalAgregar.php";
    include "vistas/equipos/modalActualizar.php";
?>


<?php include "footer.php"; ?>
<script src="public/js/equipos.js"></script>
