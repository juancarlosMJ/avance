

<!-- Modal -->
<div class="modal fade" id="modalActualizarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarEquipo" method="post" onsubmit="return actualizarEquipo()">
            <div id="personasExistentesUpdate"></div>
            <input type="text" id="idEquipo" name="idEquipo" hidden="">

            <label for="nombreEquipou">Nombre Equipo</label>
            <input type="text" class="form-control" id="nombreEquipou" name="nombreEquipou" required pattern="[a-zA-Z]+">
            <label for="modelou">Modelo</label>
            <input type="text" class="form-control" id="modelou" name="modelou" required>
            <label for="numeroSerieu">Numero de serie</label>
            <input type="text" class="form-control" id="numeroSerieu" name="numeroSerieu" required pattern="[0-9]+">
            <br>
            <button class="btn btn-warning">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>