    <!-- MENU1 -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/img/TDelanteraDYD.png"></a>
                <a class="navbar-gestoria" href="/"><img src="/img/G.jpg"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="" id="">
               <a href="{{ url('/auth/login') }}"><span class="Btn-cliente"><img src="/img/btn-cliente.jpg"></span></a>
               <p class="MenuDireccion">LLÁMENOS AL 917 263 312<br/> C/ Béjar 13 Madrid</p>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </div>
    
    <!--FIN-MENU1-->
    
    <!--MENU2-->
    
  <nav class="Menu navbar navbar-default2 center " data-spy="affix" data-offset-top="10">
   <div class="container-fluid center">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="collapse navbar-collapse center" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left center">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
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