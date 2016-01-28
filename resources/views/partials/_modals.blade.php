@if(isset($current_folder))
  {{-- FILE UPLOAD --}}
  <div class="modal fade" id="file-upload-modal" tabindex="-1" role="dialog" aria-labelledby="file-upload-modal-label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nuevo archivo</h4>
        </div>
        <div class="modal-body">
        <form id="my-awesome-dropzone" action="{{ url('dashboard/users/'.$user->slug.'/'.$user->id.'/files') }}" method="POST" class="dropzone">
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
  {{-- EDIT FILE --}}
  <div class="modal fade" id="edit-file-modal" tabindex="-1" role="dialog" aria-labelledby="edit-file-modal-label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Editar archivo</h4>
        </div>
        <form id="edit-file" action="" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">
          <div class="modal-body">
            <div class="form-group">
              <label for="file_name">Nombre del archivo:</label>
              <input type="text" class="form-control" name="file_name">
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


  {{-- ADD FOLDER --}}
  <div class="modal fade" id="add-folder-modal" tabindex="-1" role="dialog" aria-labelledby="add-folder-modal-label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nueva carpeta</h4>
        </div>
        <form id="add-folder" action="{{ url('dashboard/users/'.$user->slug.'/'.$user->id.'/folders') }}" method="POST">
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

  {{-- EDIT FOLDER --}}
  <div class="modal fade" id="edit-folder-modal" tabindex="-1" role="dialog" aria-labelledby="edit-folder-modal-label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Editar carpeta</h4>
        </div>
        <form id="edit-folder" action="" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">
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
@endif
{{-- USER MODAL--}}
<div class="modal fade" id="edit-user-modal" tabindex="-1" role="dialog" aria-labelledby="edit-user-modal-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Perfil de usuario</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="panel">
              <div class="panel-heading">
                <button class="btn btn-link btn-sm pull-right" type="button" data-toggle="collapse" data-target="#edit-user-info" aria-expanded="false" aria-controls="edit-user-info">
                  Editar información
                </button>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class=" col-md-12 col-lg-12">
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td class="row-title">Nombre</td>
                          <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                          <td class="row-title">Email</td>
                          <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="collapse" id="edit-user-info">
                      <div class="well well-lg" style="position: relative;">
                        <div class="request-pending hide" style="background-color: rgba(255,255,255,0.75); position: absolute; width: 100%; height: 100%; top: 0; left: 0;">
                          <div class="progress" style="position: relative; z-index: 99999; width: 85%; display:block; margin: 35px auto 0;">
                            <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"style="width: 100%" >
                              <span class="sr-only">Loading</span>
                            </div>
                          </div>
                        </div>
                        <form id="edit-user" action="{{ '/dashboard/users/'.$user->slug.'/'.$user->id }}" class="form-horizontal" role="form" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="PUT">
                          <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" disabled required>
                          </div>
                          <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Repetir contraseña</label>
                            <input type="password" name="password_confirmation" class="form-control" >
                          </div>
                          <button type="submit" class="btn btn-success btn-sm">Enviar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-sm btn-success">Enviar</button>
      </div> -->
    </div>
  </div>
</div>



