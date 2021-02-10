<div class="modal fade" aria-hidden="true" id="modal-edit-{{$marca->id}}" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.marcas.update',Crypt::encryptString($marca->id))}}">
    @method('PUT')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Editar Marca</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre de la marca" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}"
          minlegth="2" maxlength="40"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40"
          value="{{old('nombre',$marca->nombre)}}">
        </div>
        <div class="form-group">
          <label for="categoria">Categoría:</label>
          <select name="categoria" class="form-control">
            <option value="{{old('categoria',$marca->categoria)}}">{{old('categoria', $marca->categoria)}}</option>
            <option value="Proveedor">Proveedor</option>
            <option value="Producto">Producto</option>
            <option value="Vehiculo">Vehiculo</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Marca</button>
        </div>
      </div>
    </div>

  </form>

</div>