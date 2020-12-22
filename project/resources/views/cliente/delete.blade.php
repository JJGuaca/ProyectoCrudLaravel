<!-- Modal -->
<div class="modal fade" id="delete-{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('cliente.destroy',$cliente->id)}}" method="post">
        @csrf
        @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
      </div>
      <div class="modal-body">
      se eliminará el registro de {{$cliente->Nombres." ".$cliente->Apellidos}}
        
                                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-block" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-danger btn-block" value="Eliminar">
      </div>
    </div>
    </form>
  </div>
</div>