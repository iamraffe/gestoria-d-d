@extends('dashboard')

@section('content')
  <ul class="breadcrumb">
      <li class="active"><a href="#"><span class="fa fa-home"></span> Inicio</a></li>
  </ul>
  <div class="dropbox">
  @if($user->files)
    @foreach ($user->files->chunk(4) as $files)
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            @foreach ($files as $file)
                <div class="col-sm-3" data-file-id="{{ $file->id }}">
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
  @else
    <p>No files in this folder...</p>
  @endif
  </div>
  <form action="{{ url('dashboard/'.$user->slug.'/'.$user->id.'/file') }}" method="POST" class="dropzone">
    {{ csrf_field() }}
  </form>
@stop

@section('scripts')

@stop