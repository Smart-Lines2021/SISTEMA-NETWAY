<div class="modal fade" aria-hidden="true" id="modal-edit-{{$tipo_servicio_vehiculo->id}}" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.tipos_servicios_vehiculos.update',Crypt::encryptString($tipo_servicio_vehiculo->id))}}">
    @method('PUT')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Editar Tipo de Servicio de Vehiculo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del tipo de servicio de vehiculo" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,120}"
          minlegth="2" maxlength="120"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 120"
          value="{{old('nombre',$tipo_servicio_vehiculo->nombre)}}">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripción del tipo de servicio de vehiculo" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,]{2,80}"
          minlegth="2" maxlength="80"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 80"
          value="{{old('descripcion',$tipo_servicio_vehiculo->descripcion)}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Tipo de Servicio de Vehiculo</button>
        </div>
      </div>
    </div>

  </form>

</div>