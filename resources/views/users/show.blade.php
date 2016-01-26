@extends('dashboard')

@section('content')
  @if(\Auth::user()->files)
    @foreach (\Auth::user()->files->chunk(5) as $files)
        <div class="row">
          <div class="col-sm-10 col-sm-offset-2">
            @foreach ($files as $file)
                <div class="col-sm-2">
                  <a href="{{ url(file_url($user, $file)) }}" class="thumbnail">
                    {{ $file->name }}
                  </a>
                </div>
            @endforeach
          </div>

        </div>
    @endforeach
  @endif
  <form action="{{ url('dashboard/@'.str_slug(\Auth::user()->name).'/file') }}" method="POST" class="dropzone">
    {{ csrf_field() }}
  </form>
@stop

@section('scripts')

@stop