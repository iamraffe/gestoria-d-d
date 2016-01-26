

@extends('app')

@section('content')


    <section class="content">
       <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        
                        <div class="row TopSpace3">
                          <div class=".col-xs-12 col-md-4 TopSpace CuadroHome">
                            <a href="{{ url('/empresas/autonomos') }}"><img src="img/autonomos.png" alt="Autonomos" onmouseover="this.src='img/autonomos_hover.png';" onmouseout="this.src='img/autonomos.png';"></a>
                          </div>
                          
                          <div class=".col-xs-12 col-md-4 TopSpace CuadroHome">
                            <a href="{{ url('/empresas/sociedades') }}"><img src="img/sociedades.png" alt="Sociedades" onmouseover="this.src='img/sociedades_hover.png';" onmouseout="this.src='img/sociedades.png';"></a>
                          </div>
                          
                          
                          <div class=".col-xs-12 col-md-4 TopSpace CuadroHome">
                            <a href="{{ url('/empresas/laboral') }}"><img src="img/laboral.png" alt="Laboral" onmouseover="this.src='img/laboral_hover.png';" onmouseout="this.src='img/laboral.png';"></a>
                          </div>
                    </div>
                        
                        
                    </div>
                </div>
            </div>
        </header>         
        <div>
            <div class="container">
                    <div class="row">
                          <div class="col-xs-12 col-sm-3  center">
                            <a href="{{ url('/traficos/transferencia-de-vehiculos') }}"><img src="img/btn_transferencia_vehiculo_hover.png" alt="certificado Energetico" onmouseover="this.src='img/btn_transferencia_vehiculo.png';" onmouseout="this.src='img/btn_transferencia_vehiculo_hover.png';"><br/>
                          </div>
                          
                          <div class="col-xs-12 col-sm-3   center">
                            <a href="{{ url('/tramites/informe-trafico') }}"><img src="img/btn_certificados_hover.png" alt="certificados" onmouseover="this.src='img/btn_certificados.png';" onmouseout="this.src='img/btn_certificados_hover.png';"><p class="Info TopSpace"></a>
                          </div>
 
                          <div class="col-xs-12 col-sm-3   center ">
                            <a href="{{ url('/tramites/creacion-web') }}"><img src="img/btn_web_hover.png" alt="web" onmouseover="this.src='img/btn_web.png';" onmouseout="this.src='img/btn_web_hover.png';"></a>
                          </div>
                          
                          <div class="col-xs-12 col-sm-3 center">
                            <a href="{{ url('/tramites/alquiler-ivima') }}"><img src="img/btn_alquilerIVIMA_hover.png" alt="Ivima" onmouseover="this.src='img/btn_alquilerIVIMA.png';" onmouseout="this.src='img/btn_alquilerIVIMA_hover.png';"></a>
                          </div>
                    </div>
            </div>
        </div>
        
        
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slider1.png" alt="">
    </div>

    <div class="item">
      <img src="img/slider2.png" alt="">
    </div>
    
    <div class="item">
      <img src="img/slider3.png" alt="">
    </div>


    
  </div>

  
</div>
        
        
        
        <div>
            <div class="container TopSpace2">
                    <div class="row">
                        <div class="col-md-6 TopSpace ">
                            <p class="TextoInterno"> Déjanos tus datos y el motivo de tu consulta y te atenderemos lo antes posible.<br/> Gracias. </p>
                            <div id="contact-form">
                              <form action="">
                                <div class="form-group">
                                  <label for="">Nombre</label>
                                  <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Empresa</label>
                                  <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Teléfono</label>
                                  <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Comentario</label>
                                  <textarea name="comments" id="" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                  <div class="g-recaptcha" data-sitekey="6LdS1xITAAAAAFIymLngg1xUOxJuQO8VKZYd8ZV9"></div>
                                </div>
                                <div class="form-group">
                                  <input type="checkbox"><span>Acepto la política de privacidad</span>
                                </div>
                                <div class="form-group">
                                  <button>Enviar</button>
                                </div>
                              </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 TopSpace">
                          <p class="TextoInterno">Nos encontramos en la<br/>C/ Béjar 13 Madrid<br/>Teléfono: 917 263 312<br/> <a href="mailto:pcenamor@gestoriadyd.com">pcenamor@gestoriadyd.com</a><br/><br/><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.7790496016205!2d-3.675828848827774!3d40.435891179261496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228c7c7115037%3A0xc9bf69b7608c2831!2sCalle+B%C3%A9jar%2C+13%2C+28028+Madrid!5e0!3m2!1ses!2ses!4v1449504676040" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
              </div>
        </div>
    </section>
    
      
     
@stop