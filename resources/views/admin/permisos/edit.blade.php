<div class="modal fade" aria-hidden="true" id="modal-edit-{{$permiso->id}}" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.permisos.update',$permiso)}}">
    @method('PUT')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Editar Permiso</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" disabled class="form-control" placeholder="Ingrese el nombre del permiso" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,35}"
          minlegth="2" maxlength="35"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 35"
          value="{{$permiso->name}}">
        </div>
        <div class="form-group">
          <label for="display_name">Nombre a Mostrar:</label>
          <input type="text" name="display_name" class="form-control" placeholder="Ingrese el nombre a mostrar del permiso" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,35}"
          minlegth="2" maxlength="35"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 35"
          value="{{old('display_name',$permiso->display_name)}}">
        </div>
        <div class="form-group">
          <label for="description">Descripción:</label>
          <input type="text" name="description" class="form-control" placeholder="Ingrese una breve descripción" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,35}"
          minlegth="2" maxlength="35"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 35"
          value="{{old('description',$permiso->description)}}">
        </div>
        <div class="form-group">
          <label for="category">Categoría:</label>
          <select name="category" class="form-control">
            <option value="{{old('category',$permiso->category)}}">{{old('category', $permiso->category)}}</option>
            <option value="Control de Usuarios">Control de Usuarios</option>
            <option value="Ubicación Geografica">Ubicación Geografica</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Permiso</button>
        </div>
      </div>
    </div>

  </form>

</div>