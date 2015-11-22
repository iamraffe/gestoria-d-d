<!DOCTYPE html>
<html>
    <head>
        <title>Gestor&iacute;a D&amp;D</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <section id="main">
            @include('partials._header')
            <section class="container content-wrapper">
                @yield('content')
            </section>
            <footer class="container-fluid">
                <div class="row">
                    @include('partials._footer')
                </div>
            </footer>    
        </section>
    </body>
</html>
