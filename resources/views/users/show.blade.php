@extends('dashboard')

@section('content')
  <ul class="breadcrumb">
      <li class="active"><a href="{{ url('/dashboard/'.$user->slug.'/'.$user->id) }}"><span class="fa fa-home"></span> Inicio</a></li>
  </ul>
  <div class="dropbox">
  @if($child_folders->count() != 0)
    <section class="viewable-folders">
      <h2>Carpetas</h2>
      @foreach ($child_folders->chunk(4) as $folders)
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              @foreach ($folders as $folder)
                  <div class="col-sm-3" data-folder-name="{{ $folder->name }}" data-folder-id="{{ $folder->id }}">
                    <button type="button" class="edit-folder close" ><span aria-hidden="true" style="position: absolute; font-size: 13px; top: 9px; right: 40px; color: blue;" class="fa fa-pencil"></span></button>
                    <button type="button" class="delete-folder close" ><span aria-hidden="true" style="position: absolute; top: 5px; right: 22.5px; color: red;">&times;</span></button>
                    <a href="{{ url(folder_url($user, $folder)) }}" class="thumbnail">
                      <img src="/img/folder.svg" alt="{{ $folder->name }}" class="img-responsive" style="max-height: 100px; margin: 25px auto;">
                      <div class="caption">
                        <span class="folder-name">{{ $folder->name }}</span>
                      </div>
                    </a>
                  </div>
              @endforeach
            </div>
            
          </div>
      @endforeach
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <hr>
        </div>
      </div>
    </section>
  @endif
  @if($current_folder->files()->get()->count() > 0)
    <section class="viewable-files">
      <h2>Archivos en "{{ $current_folder->name }}"</h2>
      @foreach ($current_folder->files()->get()->chunk(4) as $files)
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              @foreach ($files as $file)
                  <div class="col-sm-3" data-file-name="{{ $file->name }}" data-file-id="{{ $file->id }}">
                    <button type="button" class="edit-file close" ><span aria-hidden="true" style="position: absolute; font-size: 13px; top: 9px; right: 40px; color: blue;" class="fa fa-pencil"></span></button>
                    <button type="button" class="delete-file close" ><span aria-hidden="true" style="position: absolute; top: 5px; right: 22.5px; color: red;">&times;</span></button>
                    <a href="{{ url(file_url($user, $file)) }}" class="thumbnail" target="_blank">
                      <img src="/img/file.svg" alt="{{ $file->name }}" class="img-responsive" style="max-height: 100px; margin: 25px auto;">
                      <div class="caption">
                        <span class="file-name">{{ $file->name }}</span>
                      </div>
                    </a>
                  </div>
              @endforeach
            </div>
          </div>
      @endforeach
    </section>
  @else
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <p>No existen archivos en esta carpeta...</p>
      </div>
    </div>
  @endif
  </div>


  
@stop

@section('scripts')

@stop