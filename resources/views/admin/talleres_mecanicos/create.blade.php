<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.talleres_mecanicos.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Taller Mecanico</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del taller mecanico" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}"
          minlegth="2" maxlength="40"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40"
          value="{{old('nombre')}}">
        </div>

        <div class="form-group">
          <label for="telefono">Teléfono:</label>
          <input type="text" name="telefono" class="form-control" placeholder="Ingrese el número de télefono" required pattern="[0-9]{1,10}"
          minlegth="1" maxlength="10"
          title="Solo se permiten números. Tamaño mínimo: 1. Tamaño máximo: 10"
          value="{{old('telefono')}}">
        </div>

         <div class="form-group">
          <label for="direccion">Dirección:</label>
          <input type="text" name="direccion" class="form-control" placeholder="Ingrese la dirección del taller mecanico" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ-9\s]{2,40}"
          minlegth="2" maxlength="40"
          title="Se permiten letras y números. Tamaño mínimo: 2. Tamaño máximo: 40"
          value="{{old('direccion')}}">
        </div>

        <div class="form-group">
          <label for="persona_contacto">Persona a contactar:</label>
          <input type="text" name="persona_contacto" class="form-control" placeholder="Ingrese el nombre de la persona a contactar" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}"
          minlegth="2" maxlength="40"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40"
          value="{{old('persona_contacto')}}">
        </div>

         <div class="form-group">
          <label for="correo_electronico">Correo electrónico:</label>
          <input type="text" name="correo_electronico" class="form-control" placeholder="Ingrese el correo electrónico" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ-9\s]{2,40}"
          minlegth="2" maxlength="40"
          title="Se permiten letras y números. Tamaño mínimo: 2. Tamaño máximo: 40"
          value="{{old('correo_electronico')}}">
        </div>

        <div class="form-group">
          <label for="observaciones">Observaciones:</label>
          <input type="text" name="observaciones" class="form-control" placeholder="Ingrese las observaciones" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,]{2,80}"
          minlegth="2" maxlength="80"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 80"
          value="{{old('observaciones')}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Taller Mecanico</button>
        </div>
      </div>
    </div>

  </form>

</div>