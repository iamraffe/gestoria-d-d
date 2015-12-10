@extends('app')

@section('content')
    <section class="content">
      <header>
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <img src="img/empleadas_hogar.png" alt="Hogar">
                      <h3>EMPLEADAS DE HOGAR</h3><br/>
                          <b>Pasos a seguir</b><br/><br/>
                      <p class="TextoInterno">1. Envienos un mail con los datos necesarios para el alta (fecha del alta, salario y horario), adjuntando copia del dni del empleador y del empleado, o bien súbalo a nuestra área de clientes una vez que haya obstenido las claves para acceder o presentelos en nuestra oficina.<br/><br/>
      2. Cotejamos los datos y confeccionamos los impresos a presentar en la tesoreria de la seguridad social y el contrato y se lo enviamos por correo para su firma, lo subimos a su apartado de área de cliente o si ha decidido hacer el trámite presentandose en nuestras oficinas se lo facilitamos en el momento, como se prefiera. En caso de duda con alguno de los datos facilitados, nos pondremos en contacto con usted.<br/><br/>
      3. Verifique que todo es correcto y acuda a nosotros en caso de duda, e imprima los documentos para su firma. cuando los tenga firmados nos los devuelve de forma presencial en nuestras oficinas, por mail o a través de nuestra plataforma.<br/><br/>
      4. Se presentan los originales en la tgss y una vez realizado el trámite, le devolvemos todos los originales de la operación en persona, enviandoselo por correo electrónico, y dejándoselo siempre en su área de clientes, ya que a ella podrá acceder siempre que lo desee para consultarlos, sin límite temporal y sin que otros puedan ver dicha documentación, para dar cumplimiento con la lopd </p>
                      </div>
                  </div>
              </div>
          </header> 
          
          
            <div class="container center">
              <div class="row center">
                    <div class="col-sm-12 center-block">
                      <h3 class="text-center GranateColor">COSTOS</h3><br/>
                        <div class="table-responsive">
                         <table class="table table-bordered">
                          <thead>
                      <tr class="text-center">
                        <th class="text-center">CONCEPTO</th>
                        <th class="text-center">PRECIO</th>
                        
                     </tr>
                  </thead>
                  <tr class="text-center">
                                  <td class="">Solicitud C.C.C.</td>
                                  <td class="">10,00€</td>
                               </tr>
                          
                               <tr class="text-center">
                                  <td class="">Alta</td>
                                  <td class="">40,00€</td>
                                </tr>
                                
                                 <tr class="text-center">
                                  <td class="">Contrato</td>
                                  <td class="">20,00€</td>
                                </tr>
                                
                                 <tr class="text-center">
                                  <td class="">Nómina</td>
                                  <td class="">10,00€</td>
                                </tr>
                                
                                 <tr class="text-center">
                                  <td class="">Nóminas anuales</td>
                                  <td class="">100,00€ al año</td>
                                </tr>
                         
                 </table>
                        </div>
                  </div>
              </div>
              
              
              <div class="container">
                  <div class="row">
                    
                    <div class="col-lg-12">
                        
                      <h3 class="GranateColor">DOCUMENTACIÓN</h3><br/>
                      <p class="TextoInterno">Si deseas descargar la documentación pulsa sobre la imágen</p>
                      </div>
                      <div class="row">
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/autorizacion-en-blanco.pdf') }}"><img src="img/btn_autorizacionSS.png" alt="Autorizacion"></a></div>
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/SOLICITUD-CCC.pdf') }}"><img src="img/btn_codigodecuenta.png" alt="compra-venta"></a></div>
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/SOLICITUD-ALTA-BAJA-VARIACION.pdf') }}"><img src="img/btn_modeloaltabaja.png" alt="Info Vehiculo"></a></div>
              </div>
                      <div class="row">
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/CONTRATO-INDEFINIDO.pdf') }}"><img src="img/btn_contratoindefinido.png" alt="Autorizacion"></a></div>
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/CONTRATO-TEMPORAL.pdf') }}"><img src="img/btn_contratotemporal.png" alt="compra-venta"></a></div>
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/MODELO-NOMINA.pdf') }}"><img src="img/btn_nomina.png" alt="Info Vehiculo"></a></div>
                            
                            <div class="col-lg-12">
                      <a href="{{ url('/') }}#show-contact-form"><p class="TopSpace2"><img src="img/btn-presupuesto.jpg" alt="presupuesto"></p></a>
                      </div>
              </div>
                  </div>
              </div>
          
    </section>
@stop