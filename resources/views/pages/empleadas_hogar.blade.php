@extends('app')

@section('content')
    <section class="content">
      <header>
              <div class="container">
                  <div class="row  TopSpace3">
                    <div class="col-lg-12">
                      <img src="img/empleadas_hogar.png" alt="Hogar">
                      <h3 class="TopSpace">EMPLEADAS DE HOGAR</h3><br/>
                          
                       <p class="TextoInterno">
                       La actual normativa del régimen de empleados del hogar implica que todas las empleadas de hogar deben ser dadas de alta por sus empleadores independientemente del numero de horas que trabajen para ellos. Es un trámite obligado a quienes tengan en su hogar a personas realizando labores domésticas, cuidando o atendiendo algún familiar, realizando trabajos de jardinería, conduciendo vehículos...<br/><br/>
Nosotros nos encargamos de la cumplimentación y presentación de toda la documentación necesaria. La firma de dicha documentación la puede realizar desplazándose hasta nuestra oficina o le enviamos la documentación y nos la remite firmada, evitando así desplazamientos<br/><br/>
                       
                       Nos encargamos de realizar todo los trámites que pueda necesitar:<br/><br/>
- Alta empleada hogar en Seguridad Social<br/>
- Asignación del código de cuenta de cotización<br/>
- Elaboración del contrato<br/>
- Realización de nóminas (se puede realizar únicamente la primera nómina de base, o contratar la elaboración anual de las nóminas)<br/>
- Variaciones de datos (jornada de trabajo, salario, domiciliación bancaria...)<br/>
- Prórroga de contratos<br/>
- Baja de empleada de hogar en Seguridad Social<br/>
-  Liquidación (Carta de despido, baja voluntaria empleada hogar, carta de desistimiento del empleador, finiquito...)<br/>
- Asesoramiento sobre todos los trámites<br/><br/></p>
                      </div>
                  </div>
              </div>
          </header> 
          
          
            <div class="container center">
              <div class="row center">
                    <div class="col-sm-12 center-block">
                      <h3 class="text-center GranateColor">PRECIOS</h3><br/>
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
                                
                                <tr class="text-center">
                                  <td class="">Variación de datos</td>
                                  <td class="">40,00€</td>
                                </tr>
                                
                                <tr class="text-center">
                                  <td class="">Baja</td>
                                  <td class="">40,00€</td>
                                </tr>
                         
                 </table>
                        </div>
                  </div>
              </div>
              
              
              <div class="container">
                 <div class="row">
                 <h3 class="GranateColor TopSpace">PASOS A SEGUIR</h3><br/>
                   <div class="col-xs-12 col-sm-12 TopSpace">
                   <img src="img/empleadas-hogar-pasos.png" alt="pasos" class="Imagenes">
                  
      </div>
      </div>
      </div>
              
              
              
              
              
              
              <div class="container">
                  <div class="row">
                    
                    <div class="col-lg-12">
                        
                      <h3 class="GranateColor TopSpace">DOCUMENTACIÓN RELACIONADA</h3><br/>
                      <p class="TextoInterno">Si deseas descargar la documentación pulsa sobre la imágen</p>
                      </div>
                      <div class="row">
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/autorizacion-en-blanco.pdf') }}"><img src="img/btn_autorizacionSS.png" alt="Autorizacion" onmouseover="this.src='img/btn_autorizacionSS_hover.png';" onmouseout="this.src='img/btn_autorizacionSS.png';"></a></div>
                            
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/SOLICITUD-CCC.pdf') }}"><img src="img/btn_codigodecuenta.png" alt="compra-venta" onmouseover="this.src='img/btn_codigodecuenta_hover.png';" onmouseout="this.src='img/btn_codigodecuenta.png';"></a></div>
                            
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/SOLICITUD-ALTA-BAJA-VARIACION.pdf') }}"><img src="img/btn_modeloaltabaja.png" alt="Info Vehiculo" onmouseover="this.src='img/btn_modeloaltabaja_hover.png';" onmouseout="this.src='img/btn_modeloaltabaja.png';"></a></div>
                            
              </div>
                      <div class="row">
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/CONTRATO-INDEFINIDO.pdf') }}"><img src="img/btn_contratoindefinido.png" alt="Autorizacion" onmouseover="this.src='img/btn_contratoindefinido_hover.png';" onmouseout="this.src='img/btn_contratoindefinido.png';"></a></div>
                            
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/CONTRATO-TEMPORAL.pdf') }}"><img src="img/btn_contratotemporal.png" alt="compra-venta" onmouseover="this.src='img/btn_contratotemporal_hover.png';" onmouseout="this.src='img/btn_contratotemporal.png';"></a></div>
                            
                            <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/MODELO-NOMINA.pdf') }}"><img src="img/btn_nomina.png" alt="Info Vehiculo" onmouseover="this.src='img/btn_nomina_hover.png';" onmouseout="this.src='img/btn_nomina.png';"></a></div>
                            
                            <div class="col-lg-12">
                      <a href="{{ url('/') }}#show-contact-form"><p class="TopSpace2"><img src="img/btn-presupuesto.jpg" alt="presupuesto"></p></a>
                      </div>
              </div>
                  </div>
              </div>
          
    </section>
@stop