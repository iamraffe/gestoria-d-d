{{-- FILE UPLOAD --}}
<div class="modal fade" id="file-upload-modal" tabindex="-1" role="dialog" aria-labelledby="file-upload-modal-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo archivo</h4>
      </div>
      <div class="modal-body">
      <form id="my-awesome-dropzone" action="{{ url('dashboard/'.$user->slug.'/'.$user->id.'/files') }}" method="POST" class="dropzone">
        {{ csrf_field() }}
        <input type="hidden" name="current_folder" value="{{ $current_folder->id }}">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">Volver</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>

{{-- ADD FOLDER --}}
<div class="modal fade" id="add-folder-modal" tabindex="-1" role="dialog" aria-labelledby="add-folder-modal-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva carpeta</h4>
      </div>
      <form id="add-folder" action="{{ url('dashboard/'.$user->slug.'/'.$user->id.'/folders') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="current_folder" value="{{ $current_folder->id }}">
        <div class="modal-body">
          <div class="input-group input-group-lg">
             <span class="input-group-addon"><span class="fa fa-folder"></span>  .../{{ $current_folder->name }}</span>
             <input type="text" class="form-control" name="folder_name">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-sm btn-success">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>