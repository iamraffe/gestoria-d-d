@extends('dashboard')

@section('content')
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th># de carpetas</th>
                <th># de archivos</th>
                <th>Privilegios</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th># de carpetas</th>
                <th># de archivos</th>
                <th>Privilegios</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->folders()->count() }}</td>
                <td>{{ $user->files()->count() }}</td>
                <td>
                  @if($user->admin)
                    <span class="label label-primary">Administrador</span>
                  @else
                    <span class="label label-info">Usuario</span>
                  @endif
                </td>
                <td>
                  <button href="{{ url('/dashboard/users/'.$user->slug.'/'.$user->id) }}" class="btn btn-app btn-lg"><span class="fa fa-eye"></span></button>
                  <button href="#" class="btn btn-app btn-lg" data-toggle="modal" data-target="#edit-user-modal"><span class="fa fa-pencil"></span></button>
                  <form action="{{ '/dashboard/users/'.$user->slug.'/'.$user->id }}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-app btn-lg"><span class="fa fa-times"></span></button>
                  </form>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@stop
