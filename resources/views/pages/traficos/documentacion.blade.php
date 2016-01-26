@extends('app')

@section('content')
    <section class="content">
      <header>
            <div class="container">
                <div class="row  TopSpace3">
                  <div class="col-lg-12">
                    <img src="/img/trafico.png" alt="Trafico">
                    <h3>DOCUMENTACIÓN</h3><br/>
                    <p class="TextoInterno">Si deseas descargar la documentación pulsa sobre la imágen</p>
                    </div>
                    <div class="row">
                          <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/autorizacion-trafico.pdf') }}"><img src="/img/btn-autorizacion.png" alt="Autorizacion" onmouseover="this.src='/img/btn-autorizacion_hover.png';" onmouseout="this.src='/img/btn-autorizacion.png';"></a></div>
                          <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/contrato-compra-venta-vehiculo.pdf') }}"><img src="/img/btn-compraventa.png" alt="compra-venta" onmouseover="this.src='/img/btn-compraventa_hover.png';" onmouseout="this.src='/img/btn-compraventa.png';"></a></div>
                          <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/informacion-transferencia-vehiculo.pdf') }}"><img src="/img/btn-infovehiculo.png" alt="Info Vehiculo" onmouseover="this.src='/img/btn-infovehiculo_hover.png';" onmouseout="this.src='/img/btn-infovehiculo.png';"></a></div>
            </div>
                    <div class="row">
                          <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/tasas-trafico.pdf') }}"><img src="/img/btn-tasa.png" alt="Autorizacion" onmouseover="this.src='/img/btn-tasa_hover.png';" onmouseout="this.src='/img/btn-tasa.png';"></a></div>
                          <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/solicitud-transferencia-trafico.pdf') }}"><img src="/img/btn_solicitudvehiculo.png" alt="compra-venta" onmouseover="this.src='/img/btn_solicitudvehiculo_hover.png';" onmouseout="this.src='/img/btn_solicitudvehiculo.png';"></a></div>
                          <div class="col-md-4 TopSpace"><a target="_blank" href="{{ asset('pdf/informacion-duplicados-permiso-de-circulacion.pdf') }}"><img src="/img/btn-duplicadopermiso.png" alt="Info Vehiculo" onmouseover="this.src='/img/btn-duplicadopermiso_hover.png';" onmouseout="this.src='/img/btn-duplicadopermiso.png';"></a></div>
            </div>
                </div>
            </div>
        </header> 

    </section>
@stop