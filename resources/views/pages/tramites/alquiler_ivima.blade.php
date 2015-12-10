@extends('app')

@section('content')
    <section class="content">
   <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <img src="/img/tramites.png" alt="tramites">
                    <h3>CONTRATOS DE ALQUILER, IVIMA, CERTIFICADOS ENERGÉTICOS</h3><br/>
                    <img src="/img/Ivima.png" alt="InformeTrafico">
                    <p class="TextoInterno">En gestoría D&amp;D le confeccionamos su contrato de alquiler para intentar evitar problemas con el inquilino y garantizar que todo se ajuste a la Ley actual.<br/><br/>
                    Además, si usted lo desea, nos encargamos de <b>depositar la fianza en el IVIMA o compensarla</b> si ya tiene una depositada anteriormente, ya que en la Comunidad de Madrid es obligatorio depositar la fianza del inquilino, la cuál será de un mes para las viviendas y de dos meses para los usos distintos de viviendas como son los locales comerciales. Si al finalizar el alquiler, desea recuperar la fianza del IVIMA, también podemos encargarnos de este trámite y evitarse desplazamientos.<br/><br/>
Acuda a nosotros si además está obligado a darse de <b>alta en hacienda</b> (IAE) y a presentar los impuestos trimestrales y anuales del <b>IVA</b> (en caso de que el alquiler no sea de vivienda) o para realizar la <b>declaración de la renta.</b><br/><br/>
Con nuestras tarifas tendrá el mejor asesoramiento jurídico para evitarse problemas con Hacienda al no tener la certeza de saber qué gastos pueden ser deducibles o no, la retención o el IVA a aplicar en función de los cambios tributarios, el IPC a aplicar cada año... y evitarse así posibles reclamaciones por parte de la AEAT. Recuerde que estos mismos gastos de asesoramiento por la Gestoría Administrativa son deducibles.<br/><br/>
Y además, si lo necesita, trabajamos con profesionales que pueden realizarle el <b>certificado energético,</b> el cual es obligatorio desde el 1 de junio de 2013 si eres dueño de un inmueble y deseas alquilarlo o venderlo. Nuestros profesionales se encargarán de todos los trámites de forma rápida y sencilla.<br/><br/></p>

  <div class="container center">
        <div class="row center">
              <div class="col-sm-12 center-block">
                <h3 class="text-center GranateColor">COSTOS</h3><br/>
                  <div class="table-responsive">
                   <table class="table table-bordered">
                    <tr class="text-center">
        <th rowspan="2" class="text-center TextoInterno">25€</th>
        <th class="text-center TextoInterno"><b>TRÁMITE</b></th>
        <th rowspan="2" class="text-center TextoInterno">100€</th>
        <th class="text-center TextoInterno"><b>OPCIÓN ANUAL</b></th>
    </tr>
    <tr>
        <td class="TextoInterno">Por cada presentación liquidación trimestral o anual de IVA o modelo 184 (Comunidad de Bienes)</td>
        <td class="TextoInterno">• Presentación de todas las liquidaciones trimestrales y anuales de IVA<br/>
• Presentación modelo 184<br/>
• Declaración de la RENTA<br/></td>
        
    </tr>
    
    <tr class="text-center">
        <th rowspan="2" class="text-center TextoInterno">Desde 40€ </th>
        
        
    </tr>
    <tr>
        <td class="TextoInterno">Presentación declaración de la RENTA</td>
        
    </tr>
                   
           </table>
                  </div>
            </div>
        </div>



    <div class="col-lg-12">
                <a href="{{ url('/') }}show-#contact-form"><p class="TopSpace2"><img src="/img/btn-presupuesto.jpg" alt="presupuesto"></p></a>
                </div>
                </div>
            </div>
        </div>
    </header> 
    
    </section>
@stop