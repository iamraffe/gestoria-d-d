@extends('dashboard')

@section('content')
  @foreach(\Auth::user()->files as $file)
    <p>{{ $file->path }}</p>
  @endforeach
  <form action="{{ url('dashboard/@'.str_slug(\Auth::user()->name).'/file') }}" method="POST" class="dropzone">
    {{ csrf_field() }}
  </form>
@stop

@section('scripts')

@stop