@extends('app')

@section('content')
    <section class="content">
      <header>
          <div class="container">
              <div class="row  TopSpace3">
                <div class="col-lg-12">
                    <img src="/img/trafico.png" alt="Trafico">
                  <h3>OTRAS GESTIONES DE TRÁFICO</h3><br/>
                  </div>
                  <div class="row">
                        <div class="col-md-4 TopSpace">
                          <p class="TextoInterno VerticalLine"><b>MATRICULACIONES<br/> VEHÍCULOS</b></p><hr>
                        </div>
                        
                        <div class="col-md-4 TopSpace ">
                          <p class="TextoInterno VerticalLine"><b>DUPLICADOS<br/> DOCUMENTOS</b></p><hr>
                        </div>
                        
                        <div class="col-md-4 TopSpace">
                          <p class="TextoInterno"><b>RENOVACIONES PERMISOS DE CONDUCIR</b></p><hr>
                        </div>
          </div>
                  <div class="row">
                        <div class="col-md-4 TopSpace ">
                          <p class="TextoInterno VerticalLine"><b>CANCELACIÓN RESERVA DE DOMICILIO</b></p>
                        </div>
                        
                        <div class="col-md-4 TopSpace ">
                          <p class="TextoInterno VerticalLine"><b>CAMBIO DE<br/> DOMICILIO</b></p>
                        </div>
                        
                        <div class="col-md-4 TopSpace">
                          <p class="TextoInterno"><b>BAJA DE<br/> VEHÍCULOS</b></p>
                        </div>
          </div>
                  
                  <div class="col-lg-12">
                  <a href="{{ url('/') }}#show-contact-form"><p class="TopSpace2"><img src="/img/btn-presupuesto.jpg" alt="presupuesto"></p></a>
                  
                 
              </div>
          </div>
      </header> 

    </section>
@stop