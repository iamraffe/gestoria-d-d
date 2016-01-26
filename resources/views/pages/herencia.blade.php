@extends('app')

@section('content')
    <section class="content">
       <header>
            <div class="container">
                <div class="row  TopSpace3">
                    <div class="col-xs-12 col-lg-12">
                      <img src="img/Herencia.png" alt="Trafico">
                        <h3>HERENCIA</h3><br/>
                        <img src="img/herencia-imagen.png" alt="InformeTrafico">
                        <p class="TextoInterno">Cuando una persona fallece y tiene bienes (propiedades inmuebles, depósitos, vehículos,
    cuentas bancarias, etc) es necesario determinar quienes son los herederos, inventariar los bienes y deudas, para que posteriormente los herederos los acepten y se los adjudiquen, pagando los impuestos correspondientes.</p><br/>
              <p class="Subtitulos">TRAMITES A SEGUIR</p><br/>
                        <p class="TextoInterno"> 
                        - <b>Solicitud certificado de defunción</b><br/><br/>
              - <b>Solicitud certificado de últimas voluntades</b><br/> <br/>
              - <b>Solicitud certificado de seguros de vida:</b><br/> Este es opcional, pero en él se recogen todos los seguros a nombre del titular.<br/><br/>
              - <b>Título hereditario:</b> <br/>Es el documento que determina quienes son los herederos del causante:<br/>
    <i>- Si hay testamento, se solicitará una copia autorizada del testamento en la Notaría donde fue otorgado. Mediante testamento el causante determina quiénes serán sus herederos y en qué proporción.<br/>
    - Si no hay testamento, será la ley quien determine quiénes son los herederos y la parte de la
    herencia que les corresponde.</i><br/><br/>
    - <b>Adjudicación o reparto de los bienes de la herencia:</b> <br/>Una vez determinados quienes son los herederos, éstos deben manifestar los bienes y deudas que componen la herencia del fallecido, y proceder a su aceptación, posterior reparto y adjudicación, mediante la realización de un cuaderno particional. Requerirá que se haga en Escritura Pública Notarial, siempre que existan fincas que puedan ser inscritas en el Registro de la Propiedad, pudiendo hacerse mediante documento privado en los demás casos.<br/><br/>
    - <b>Impuesto de Sucesiones:</b><br/> El Impuesto de Sucesiones es el impuesto que grava las adquisiciones de los bienes que componen la herencia del fallecido por los herederos.
    El plazo máximo para la liquidación del impuesto ante la Administración es de seis meses desde el fallecimiento, transcurrido el cual Hacienda cobrará los recargos e intereses de demora pertinentes.
    A los efectos del Impuesto de Sucesiones lo importante es conocer la residencia habitual de los herederos, que serán los sujetos pasivos del impuesto, y del causante (fallecido), ya que afectará al lugar de presentación del impuesto, así como las reducciones y exencionas a aplicar, tanto las estatales como las autonómicas.<br/><br/>
    - <b>Adjudicación de los bienes.</b><br/> Inscripción en Registros Públicos: Se presentará la documentación en las entidades o organismos necesarios para cambiar la titularidad de los bienes del fallecido a los herederos.<br/><br/>
    - <b>Liquidación de plusvalías:</b><br/> Si la herencia cuenta con bienes inmuebles, es necesario el pago de la plusvalía municipal.<br/><br/>
    Los trámites difieren en función del número de herederos, el territorio de los bienes, el domicilio del causante y los herederos... Por ello, si quiere asegurarse de que la gestión se realiza de forma correcta y evitar posibles problemas, póngase en mano de profesionales.</p>
        <div class="col-lg-12">
                    <a href="{{ url('/') }}#show-contact-form"><p class="TopSpace2"><img src="img/btn-presupuesto.jpg" alt="presupuesto"></p></a>
                    </div>
                    </div>
                </div>
            </div>
        </header> 
    
    </section>
@stop