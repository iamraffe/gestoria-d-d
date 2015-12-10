@extends('app')

@section('content')
    <section class="content">
       <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <p class="TextoInterno">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p><br/>
                        
                        <div class="row">
                          <div class="col-md-4 TopSpace">
                            <a href="{{ url('/empresas/autonomos') }}"><img src="img/autonomos.png" alt="Autonomos" onmouseover="this.src='img/autonomos_hover.png';" onmouseout="this.src='img/autonomos.png';"></a>
                          </div>
                          
                          <div class="col-md-4 TopSpace">
                            <a href="{{ url('/empresas/sociedades') }}"><img src="img/sociedades.png" alt="Sociedades" onmouseover="this.src='img/sociedades_hover.png';" onmouseout="this.src='img/sociedades.png';"></a>
                          </div>
                          
                          
                          <div class="col-md-4 TopSpace">
                            <a href="{{ url('/empresas/laboral') }}"><img src="img/laboral.png" alt="Laboral" onmouseover="this.src='img/laboral_hover.png';" onmouseout="this.src='img/laboral.png';"></a>
                          </div>
                    </div>
                        
                        
                    </div>
                </div>
            </div>
        </header>         
        <div>
            <div class="container TopSpace2">
                    <div class="row">
                          <div class="col-md-6 TopSpace center VerticalLine">
                            <img src="img/btn_certificadoEnergetico.png" alt="certificado Energetico"><br/><p class="Info TopSpace"><a href="{{ url('/traficos/informe-trafico') }}">MÁS INFORMACIÓN</a><hr>
                          </div>
                          
                          <div class="col-md-6 TopSpace center">
                            <img src="img/btn_certificados.png" alt="certificados"><p class="Info TopSpace"><a href="{{ url('/traficos/informe-trafico') }}">MÁS INFORMACIÓN</a><hr>
                          </div>

                    </div>
                    <div class="row">
                          <div class="col-md-6 TopSpace center VerticalLine">
                            <img src="img/btn_web.png" alt="web"><p class="Info TopSpace"><a href="{{ url('/tramites/creacion-web') }}">MÁS INFORMACIÓN</a>
                          </div>
                          
                          <div class="col-md-6 TopSpace center">
                            <img src="img/btn_alquilerIVIMA.png" alt="Ivima"><p class="Info TopSpace"><a href="{{ url('/tramites/alquiler-ivima') }}">MÁS INFORMACIÓN</a>
                          </div>
                    </div>
            </div>
        </div>
        <div id="show-contact-form">
            <div class="container TopSpace2 center">
                    <div class="row center">
                        <div class="col-lg-12 center">
                        <a href="#"><p class="TopSpace2"><img src="img/promo_oferta.png" alt="presupuesto"></p></a>
                        </div>
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
                        <div class="col-md-6 TopSpace">
                          <p class="TextoInterno">Nos encontramos en la<br/>C/ Béjar 13 Madrid<br/>Teléfono: 917 263 312<br/> <a href="mailto:pcenamor@gestoriadyd.com">pcenamor@gestoriadyd.com</a><br/><br/><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.7790496016205!2d-3.675828848827774!3d40.435891179261496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228c7c7115037%3A0xc9bf69b7608c2831!2sCalle+B%C3%A9jar%2C+13%2C+28028+Madrid!5e0!3m2!1ses!2ses!4v1449504676040" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
              </div>
        </div>
    </section>
@stop