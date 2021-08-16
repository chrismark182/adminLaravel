<!-- Modal -->
<div class="modal fade" id="delete-{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro que quieres eliminarlo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		{!! Form::open(['action' => ['UserController@destroy', $id],'method' => 'DELETE'])!!}
		{{Form::token()}}
        <button type="submit" class="btn btn-primary">Si</button>
		{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>