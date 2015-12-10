@extends('app')

@section('content')
    <section class="content auth-page">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
          <img src="/img/auth-image.png" alt="Iniciar sesión" class="img-responsive">
        </div>
        <div class="col-sm-4 col-sm-offset-1">
          <div class="row">
            <h1>Crea una cuenta</h1>
          </div>
          <div class="row">
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="NOMBRE">
                </div>

                <div class="form-group">
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="CORREO ELECTRONICO">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="CONTRASEÑA">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password_confirmation" placeholder="CONFIRMAR CONTRASEÑA">
                </div>

                <div class="form-group">
                    <button type="submit" class="Btn-cliente">CREAR</button>
                </div>
            </form>
          </div>
  
        </div>
      </div>  
    </section>
@stop