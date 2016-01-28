<aside class="col-sm-2 sidebar">
  <ul class="list-unstyled">
    <li class="username-sidebar">
      {{ $user->name }} <a href="#" class="btn btn-link" data-toggle="modal" data-target="#edit-user-modal"><span class="fa fa-pencil" class="edit-user"></span></a>
    </li>
    <li class="">
      <a href="#" class="btn btn-link btn-block" data-toggle="modal" data-target="#file-upload-modal"><span class="fa fa-plus"></span> Agregar archivo</a>
    </li>
    <li class="">
      <a href="#" class="btn btn-link btn-block" data-toggle="modal" data-target="#add-folder-modal"><span class="fa fa-plus"></span> Agregar carpeta</a>
    </li>
    @if(\Auth::user()->admin)
      <li class="">
        <a href="{{ url('/dashboard/users') }}" class="btn btn-link btn-block"><span class="fa fa-users"></span> Ver usuarios</a>
      </li>
    @endif
    <li class="">
      <a href="{{ url('/auth/logout') }}" class="btn btn-link btn-block"><span class="fa fa-sign-out"></span> Cerrar sesión</a>
    </li>
  </ul>
</aside>
