@extends('app')

@section('content')
    <section class="content auth-page TopSpace3">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
          <img src="/img/auth-image.png" alt="Iniciar sesión" class="img-responsive">
        </div>
        <div class="col-sm-4 col-sm-offset-1">
          <div class="row">
            <div class="col-xs-6">
              <h1 class="text-left">Inicia sesión</h1>
            </div>
            <div class="col-xs-6">
              <h2 class="text-right"><a href="{{ url('/auth/register') }}" >Crea una cuenta</a></h2>
            </div>
          </div>
          <div class="row">
            <form method="POST" action="/auth/login" class="login-form" role="form">
                {!! csrf_field() !!}

                <div class="form-group">
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="CORREO ELECTRONICO">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="CONTRASEÑA">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember"> Recordar mi cuenta
                </div>

                <div class="form-group">
                    <button type="submit" class="Btn-cliente">Entrar</button>
                </div>
            </form>
          </div>
        </div>
      </div>  
    </section>
@stop