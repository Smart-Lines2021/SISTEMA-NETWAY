<div class="modal fade " aria-hidden="true" id="modal-destroy-{{$categoriaProducto->id}}" tabindex="-1" role="dialog" tabindex="-1"
    aria-hidden="true">
    <form method="POST" action="{{ route('admin.categorias_productos.destroy',Crypt::encryptString($categoriaProducto->id)) }}">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
             <div class="modal-header">
              <h4 class="modal-title">Eliminar Categoría del Producto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body theme_color">
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                ¿Esta segúro que desea eliminar la Categoría del Producto?
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button class="btn btn-danger">Eliminar Categoría</button>
        </div>
    </div>
</div>
</form>
</div>
