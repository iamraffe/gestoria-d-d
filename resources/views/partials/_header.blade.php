     <nav class="navbar navbar-default navbar-fixed-top" role="navigation"  data-spy="affix">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav navbar-left">
    <a class="navbar-brand logoGestoria" href="{{ url('/') }}"><img src="/img/TDelanteraDYD.png" class="" alt="Brand"></a>
    <ul>
    
    <ul class="nav navbar-nav">
    
    
      
      <li><a href="#"></a></li>
      <li class="dropdown">
        
        </a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li class="divider"></li>
          <li><a href="#">/a></li>
          <li class="divider"></li>
          <li><a href="#"></a></li>
        </ul>
      </li>
    </ul>
 
    
 
    <ul class="nav navbar-nav navbar-right">
   
      <li class="MenuDireccion"><p class="Direccion">LLÁMENOS AL <b class="BoldGrande">917 263 312</b><br/> C/ Béjar 13 Madrid</p></li>
      <li class="Boton-Cliente"><a href="{{ url('/dashboard') }}"><img src="/img/btn-cliente.jpg" class="Boton-Cliente" onmouseover="this.src='/img/btn-cliente_hover.png';" onmouseout="this.src='/img/btn-cliente.jpg';"></a></li>
       <li class="LogoGA"><img src="/img/G.jpg" alt="logo" class="LogoGA"> </li>
    </ul>
    
    
    
     <ul class="nav navbar-nav navbar-center BackBlue center">
      <li class="page-scroll">
                        <a href="/">INICIO</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EMPRESA <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                              <li><a href="{{ url('/empresas/autonomos') }}">AUTÓNOMOS</a></li>
                      <li><a href="{{ url('/empresas/sociedades') }}">SOCIEDADES</a></li>
                      <li><a href="{{ url('/empresas/laboral') }}">LABORAL</a></li>
                                <li><a href="{{ url('/empresas/otras-organizaciones') }}">OTRAS ORGANIZACIONES</a></li>

                         </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRÁFICO <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                              <li><a href="{{ url('/traficos/transferencia-de-vehiculos') }}">TRANSFERENCIA DE VEHÍCULO</a></li>
                      <li><a href="{{ url('/traficos/informe-trafico') }}">INFORME DE TRÁFICO DE VEHÍCULO</a></li>
                      <li><a href="{{ url('/traficos/otras-gestiones') }}">OTRAS GESTIONES</a></li>
                                <li><a href="{{ url('/traficos/documentacion') }}">DOCUMENTACIÓN</a></li>

                         </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ url('/juridico') }}">JURÍDICO</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ url('/empleadas-hogar') }}">EMPLEADAS DEL HOGAR</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ url('/herencia') }}">HERENCIA</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRÁMITES <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                              <li><a href="{{ url('/tramites/declaracion-renta') }}">DECLARACIÓN DE RENTA</a></li>
                              <li><a href="{{ url('/tramites/alquiler-ivima') }}">CONTRATOS DE ALQUILER / IVIMA</a></li>
                      <li><a href="{{ url('/tramites/informe-trafico') }}">CERTIFICADOS</a></li>
                      <li><a href="{{ url('/tramites/creacion-web') }}">CREACIÓN PÁGINAS WEB</a></li>
                                <li><a href="{{ url('/tramites/creacion-marcas') }}">CREACIÓN MARCAS Y LOGOS</a></li>

                         </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ url('/') }}#show-contact-form">CONTACTO</a>
                    </li>
                </ul>
    </div>
  </div>
</nav>
  
   <!--FIN-MENU2-->