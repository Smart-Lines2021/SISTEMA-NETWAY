<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.permisos.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Permiso</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre del permiso" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,35}"
          minlegth="2" maxlength="35"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 35"
          value="{{old('name')}}">
        </div>
        <div class="form-group">
          <label for="display_name">Nombre a Mostrar:</label>
          <input type="text" name="display_name" class="form-control" placeholder="Ingrese el nombre a mostrar del permiso" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,35}"
          minlegth="2" maxlength="35"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 35"
          value="{{old('display_name')}}">
        </div>
        <div class="form-group">
          <label for="description">Descripción:</label>
          <input type="text" name="description" class="form-control" placeholder="Ingrese una breve descripción" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,35}"
          minlegth="2" maxlength="35"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 35"
          value="{{old('description')}}">
        </div>
        <div class="form-group">
          <label for="category">Categoría:</label>
          <select name="category" class="form-control">
           <option value="{{old('category')}}">Seleccione una opción</option>
            <option value="Control de Usuarios" {{ old('category') == 'Control de Usuarios' ? 'selected' : '' }}>Control de Usuarios</option>
            <option value="Recursos Humanos" {{ old('category') == 'Recursos Humanos' ? 'selected' : '' }}>Recursos Humanos</option>
            <option value="Ubicación Geográfica" {{ old('category') == 'Ubicación Geográfica' ? 'selected' : '' }}>Ubicación Geográfica</option>
            <option value="Productos" {{ old('category') == 'Productos' ? 'selected' : '' }}>Productos</option>
            <option value="Proveedores y Vehiculos" {{ old('category') == 'Proveedores y Vehiculos' ? 'selected' : '' }}>Proveedores y Vehiculos</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Permiso</button>
        </div>
      </div>
    </div>

  </form>

</div>