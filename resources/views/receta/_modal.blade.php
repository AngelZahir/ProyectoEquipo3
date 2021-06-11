<div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres borrar el registro seleccionado?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form id="formDelete" action="{{ route('receta.destroy', 0) }}" data-action="{{ route('receta.destroy', 0) }}" method="post">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>  
        </div>
      </div>
    </div>
  </div>