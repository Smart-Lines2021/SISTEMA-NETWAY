<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('rh.clientes.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="no_cliente">No.Cliente:</label>
          <input type="text" name="no_cliente" class="form-control" placeholder="Ingrese el número de cliente" required pattern="[0-9]{2,20}"
          minlegth="2" maxlength="20"
          title="Solo se permiten números. Tamaño mínimo: 2. Tamaño máximo: 20"
          value="{{old('no_cliente')}}">
        </div>
        <div class="form-group">
          <label for="nombre_empresa">Nombre de la Empresa:</label>
          <input type="text" name="nombre_empresa" class="form-control" placeholder="Ingrese el nombre de la empresa del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,40}"
          minlegth="4" maxlength="40"
          title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 40"
          value="{{old('nombre_empresa')}}">
        </div>
        <div class="form-group">
          <label for="iniciales">Iniciales:</label>
          <input type="text" name="iniciales" class="form-control" placeholder="Ingrese las iniciales del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{2,10}"
          minlegth="2" maxlength="10"
          title="Solo se permiten letras y números. Tamaño mínimo: 2. Tamaño máximo: 10"
          value="{{old('iniciales')}}">
        </div>
        <div class="form-group">
          <label for="rfc">RFC:</label>
          <input type="text" name="rfc" class="form-control" placeholder="Ingrese el RFC del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,40}"
          minlegth="4" maxlength="40"
          title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 40"
          value="{{old('rfc')}}">
        </div>
        <div class="form-group">
          <label for="telefono">Telefono:</label>
          <input type="text" name="telefono" class="form-control" placeholder="Ingrese el telefono del cliente" required pattern="[0-9]{4,12}"
          minlegth="4" maxlength="12"
          title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 12"
          value="{{old('telefono')}}">
        </div>
        <div class="form-group">
          <label for="correo">Correo:</label>
          <input type="text" name="correo" class="form-control" placeholder="Ingrese el correo del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s/.-_@0-9]{4,80}"
          minlegth="4" maxlength="80"
          title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 80"
          value="{{old('correo')}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Cliente</button>
        </div>
      </div>
    </div>

  </form>

</div>