@extends('app')

@section('content')
    <section class="content">
   <header>
        <div class="container">
            <div class="row  TopSpace3">
                <div class="col-lg-12">
                <img src="/img/empresa.png" alt="tramites">
                    <h3>DECLARACIÓN DE RENTA</h3><br/>
                    <img src="/img/Ivima.png" alt="InformeTrafico">
                    <div class="row">
                          <div class="col-md-4 TopSpace">
                          <span class="TextoInterno"><b><h4>20€*</h4></b></span><br />
                          <span class="TextoInterno">
                          • Obtención de datos fiscales <br />
                          • Prestación de borrador <br />
                          </span>
                          </div>
                          
                          <div class="col-md-4 TopSpace">
                          <span class="TextoInterno"><b><h4>30€*</h4></b></span><br />
                          <span class="TextoInterno">
                          • Obtención de datos fiscales <br />
                          • Presentación declaración renta sencilla <br />
                          </span>
                          </div>
                          
                          
                          <div class="col-md-4 TopSpace">
                          <span class="TextoInterno"><b><h4>Desde 40€*</h4></b></span><br />
                          <span class="TextoInterno">
                          • Obtención de datos fiscales<br />
                          • Presentación de años anteriores o presentación de declaración de la renta compleja (rentas de alquileres, venta de inmuebles o acciones<br />
                          • Contestación notificaciones Hacienda <br />
                          </span>
                          </div>
            </div>

    <div class="col-lg-12">
                <a href="{{ url('/') }}#show-contact-form"><p class="TopSpace2"><img src="/img/btn-presupuesto.jpg" alt="presupuesto"></p></a>
    </div>
    
    
    <div class="container TopSpace">
                    <div class="row">
                    	<div class="col-md-6 TopSpace ">
                            <p class="TextoInterno"> Certicado arrendador menor de 30 años para la reducción del 100% de los rendimientos de inmuebles destinados a vivienda. (Contratos posteriores a 01-01- 2011 y anteriores a 01-01-2015) </p><br/>
                            <a target="_blank" href="{{ asset('pdf/Ejemplo-30-anos.pdf') }}"><img src="img/btn_descargar.png" alt"descargar" onmouseover="this.src='img/btn_descargar_hover.png';" onmouseout="this.src='img/btn_descargar.png';"></a>
                        </div>
                        <div class="col-md-6 TopSpace ">
                            <p class="TextoInterno"> Certificado menor de 35 años para la reducción del 100% de los rendimientos de inmuebles destinados a vivienda. (Contratos anteriores a 01-01-2011) </p><br/>
                            <a target="_blank" href="{{ asset('pdf/Ejemplo-35-anos.pdf.pdf') }}"><img src="img/btn_descargar.png" alt"" onmouseover="this.src='img/btn_descargar.png_hover.png';" onmouseout="this.src='img/btn_descargar.png.png';"></a>
                        </div>
                     </div>
 	</div>
    
    
    
    
    </div>
            </div>
        </div>
    </header> 
    
    </section>
@stop