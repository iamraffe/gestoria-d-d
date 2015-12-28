@extends('dashboard')

@section('content')
  <form action="{{ url('dashboard/file') }}" method="POST" class="dropzone">
    {{ csrf_field() }}
  </form>
@stop

@section('scripts')

@stop