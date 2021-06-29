

<!-- Modal -->
<div class="modal fade" id="modalAgregarPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega Nueva Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregaPersona" method="post" onsubmit="return agregarNuevaPersona()">
            <label for="paterno">Apellido paterno</label>
            <input type="text" class="form-control" id="paterno" name="paterno" required pattern="[a-zA-Z]+" >
            <label for="materno">Apellido materno</label>
            <input type="text" class="form-control" id="materno" name="materno" required pattern="[a-zA-Z]+" >
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required pattern="[a-zA-Z]+" >
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required pattern="[0-9]+">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>