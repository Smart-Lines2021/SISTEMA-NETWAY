<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('rh.facturas.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear factura</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="ruta_factura">Factura:</label>
          <input type="file" name="ruta_factura" class="form-control"
          value="{{old('ruta_factura')}}">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Cargar Factura</button>
        </div>
      </div>
    </div>

  </form>

</div>