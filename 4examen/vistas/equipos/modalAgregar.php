

<!-- Modal -->
<div class="modal fade" id="modalAgregarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarEquipo" method="post" onsubmit="return agregarEquipo()">
            <div id="personasExistentes"></div>
            <label for="nombreEquipo">Nombre Categoria</label>
            <input type="text" class="form-control" id="nombreEquipo"name="nombreEquipo" required pattern="[a-zA-Z]+" >
           <!-- <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" required>
            <label for="numeroSerie">Numero de serie</label>
            <input type="text" class="form-control" id="numeroSerie" name="numeroSerie" required  pattern="[0-9]+">
            <br>-->
            <button class="btn btn-primary">Agregar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>