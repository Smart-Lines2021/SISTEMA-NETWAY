<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.categorias_proveedores.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Categoría de Proveedores</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre de la categoría" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}"
          minlegth="2" maxlength="40"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40"
          value="{{old('nombre')}}">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripción de la categoría" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,]{2,80}"
          minlegth="2" maxlength="80"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 80"
          value="{{old('descripcion')}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Categoría</button>
        </div>
      </div>
    </div>

  </form>

</div>