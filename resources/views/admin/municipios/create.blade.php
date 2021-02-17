<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.municipios.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Municipio</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del municipio" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,20}"
          minlegth="2" maxlength="20"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 20"
          value="{{old('nombre')}}">
        </div>
        <div class="row">
          <div class="col-6">
        <div class="form-group">
          <label for="numero">Número:</label>
          <input type="text" name="numero" class="form-control" placeholder="Ingrese el número del municipio" required pattern="[0-9]{1,4}"
          minlegth="1" maxlength="4"
          title="Solo se permiten números. Tamaño mínimo: 1. Tamaño máximo: 4"
          value="{{old('numero')}}">
        </div>
        </div>
 
    </div> {{-- cierra el row --}}
    <div class="form-group">
      <label for="estado_id">Estado:</label>
          <select name="estado_id" class="form-control" required="">
           @foreach($estados as $estado)
            <option {{ old('estado_id') == $estado->id ? "selected" : "" }} value="{{$estado->id}}"> {{$estado->nombre}}</option>
          @endforeach
          </select>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Municipio</button>
        </div>
      </div>
    </div>

  </form>

</div>