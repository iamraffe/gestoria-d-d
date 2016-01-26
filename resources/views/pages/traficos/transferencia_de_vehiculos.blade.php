@extends('app')

@section('content')
    <section class="content">
      <header>
          <div class="container">
              <div class="row  TopSpace3">
                  <div class="col-xs-12 col-lg-12">
                    <img src="/img/trafico.png" alt="Trafico">
                      <h3>TRANSFERENCIA DE VEHÍCULOS</h3><br/>
                      <img src="/img/vehiculo.png" alt="InformeTrafico">
                      <p class="TextoInterno"><b>Confíe este tipo de tramitación a gestores administrativos colegiados.</b><br/><br/>
                     Nos encargamos encargamos de la realización realización del contrato contrato de compraventa compraventa del vehículo, vehículo, de la presentación presentación del impuesto <b>impuesto
de transmisiones patrimoniales</b> correspondiente y del registro de la transmisión en la <b>Jefatura de Tráfico.</b><br/><br/>
  Al comprador se le entrega también un Justificante de gestoría que le permite circular legalmente por España durante el tiempo de tramitación en Tráfico. El vendedor se asegura así la correcta presentación en Tráfico de la venta de su vehículo y el comprador también se asegura que puede circular correctamente con el vehículo.<br/><br/>

    <p class="Subtitulos">DOCUMENTACIÓN NECESARIA QUE SE DEBE APORTAR:</p><br/>
      <p class="TextoInterno"> 
      - <b>Permiso de circulación y Ficha de inspección técnica del vehículo.</b><br/>
  - Copia del <b>último impuesto municipal</b> de circulación pagado (numerito).<br/>
  - <b>DNI</b> de transmitente y adquirente. En caso de sociedad: CIF de la empresa,
  DNI del apoderado y escritura de poderes.<br/>
  - <b>Contrato de compraventa,</b> que redactaremos en nuestro despacho.<br/>
  - En casos especiales será necesaria otra documentación: herencias, menor de edad, varios transmitentes, etc.<br/>

  <p class="Subtitulos TopSpace">CÁLCULO DE LOS GASTOS DE TRANSFERENCIA DEL VEHÍCULO</p><br/>

  <div class="container center">
          <div class="row center">
                <div class="col-sm-12 center-block">
                  
                    <div class="table-responsive">
                     <table class="table table-bordered ColorFondo">
                        <tr class="text-center">
                              <th  class="text-center TextoInterno"></th>
                              <th class="text-center TextoInterno"><b>VEHÍCULOS</b></th>
                              <th  class="text-center TextoInterno">CICLOMOTORES</th>
                              
      </tr>
      <tr>
          <td class="TextoInterno">Tasa de transferencia de la Jefatura de Tráfico</td>
          <td class="TextoInterno">53,40€</td>
          <td class="TextoInterno">26,70€</td>
          
      </tr>
      
      <tr>
          <td class="TextoInterno">Honorarios de la gestoría</td>
          <td class="TextoInterno" colspan="2">50,00€</td>
   
      </tr>
      
       <tr>
          <td class="TextoInterno">Tasa Colegio Gestores</td>
          <td class="TextoInterno" colspan="2">6,66€</td>
   
      </tr>
      
       <tr>
          <td class="TextoInterno"><b>Total de gastos sin incluir impuesto de transmisiones</b></td>
          <td class="TextoInterno"><b>110,06€</b></td>
          <td class="TextoInterno"><b>83,36€</b></td>
   
      </tr>
      
       <tr>
          <td class="TextoInterno">Impuesto Transmisiones Patrimoniales</td>
          <td class="TextoInterno" colspan="2">Varía en función a la Comunidad Autónoma***</td>
   
      </tr>
      
     
                     
             </table>
                    </div>
              </div>
          </div>


            
     <p class="TextoInterno"> 
     ** En la Comunidad de Madrid es el 4% sobre el valor mínimo del vehículo. Si quieres saber con exactitud el resultado de tu impuesto de transmisiones patrimoniales para saber el coste total que te supone, ponte en  <a href="{{ url('/') }}#show-contact-form">contacto</a> con nosotros, informándonos la marca y modelo, cilindrada y potencia, gasolina o diesel y año de primera matriculación del vehículo, y te respondemos en el momento. <br/><br/>
     
      Aconsejamos a los compradores que antes de realizar la compra del vehículo soliciten un <a href="{{ url('/') }}#show-informe-trafico">informe de Tráfico</a> para comprobar si el vehículo tiene alguna limitación de disposición, embargo o cualquier otra circunstancia que impida la correcta tramitación. Si nos lo solicita a nosotros podemos obtenerlo rápidamente y de forma económica. <br/><br/>
      
   Para cualquier duda o aclaración nos tiene a su disposición, así como para solicitarnos presupuesto de todos los gastos de tramitación, tanto en nuestros teléfonos como vía mail o en nuestra  <a href="{{ url('/') }}#show-contact-form">zona de contacto.</a><br/><br/>


         
                      </p>
                      
      <div class="col-lg-12">
                  <a href="{{ url('/tramites/documentacion') }}"><p class="TopSpace2"><img src="/img/btn-documentos.png" alt="documentos"></p></a>
                  </div>
                  </div>
              </div>
          </div>
      </header> 

    </section>
@stop