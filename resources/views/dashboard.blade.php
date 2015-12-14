<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Gestoría para empresas, tráfico, empleadas de hogar, asesoría jurídica y herencias ">
        <meta name="author" content="ProGonz">
        <meta name="keywords" content="gestoria, pagina web, diseño, tráfico, empleadas hogar, asesoría, sociedades, laboral, jurídico, trámites, alquiler, herencia" />
        <title>GESTORÍA DyD - Precios especiales </title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="icon" type="image/png" href="/img/mifavicon.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- SCRIPT CONTROL DE COOKIES -->
        <script type="text/javascript">
            function controlcookies() {
         // si variable no existe se crea (al clicar en Aceptar)
            localStorage.controlcookie = (localStorage.controlcookie || 0);
 
            localStorage.controlcookie++; // incrementamos cuenta de la cookie
            cookie1.style.display='none'; // Esconde la política de cookies
            }
         </script>
    </head>
    <body id="page-top" class="index" style="position:relative;">
        <!--Código HTML de la política de cookies -->
         
        <!--La URL incluida es la parte que se ha de modificar -->
         
        <div class="cookiesms" id="cookie1">
        Esta web utiliza cookies, puedes ver nuestra  <a href="cookies.html">la política de cookies, aquí</a> 
        Si continuas navegando estás aceptándola
        <button onclick="controlcookies()">Aceptar</button>
        <div  class="cookies2" onmouseover="document.getElementById('cookie1').style.bottom = '0px';">Política de cookies + </div>
        </div>
        <script type="text/javascript">
        if (localStorage.controlcookie>0){ 
        document.getElementById('cookie1').style.bottom = '-50px';
        }
        </script>
         
        <!-- Fin del código de cookies -->

        <section id="main-dashboard">
            @include('partials._header')
            <section class="container content-wrapper">
              <header class="row user-profile">
                <button class="btn btn-link pull-right">{{ \Auth::user()->name }} <span class="fa fa-pencil"></span></button>
              </header>
              <div class="row">
                @include('partials._sidebar')
                <section class="col-sm-9 dropbox">
                  @yield('content')
                </section>
              </div>
            </section>
            <footer id="main-footer" class="container-fluid">
                <div class="row">
                    @include('partials._footer')
                </div>
            </footer>    
        </section>
        <script src="/js/libs.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        {{-- <script src="/js/all.js"></script> --}}
    </body>
</html>
