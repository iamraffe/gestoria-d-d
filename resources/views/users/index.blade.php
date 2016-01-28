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
                  <a href="{{ url('/dashboard/'.$user->slug.'/'.$user->id) }}" class="btn btn-app"><span class="fa fa-eye"></span></a>
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
