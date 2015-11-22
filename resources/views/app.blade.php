<!DOCTYPE html>
<html>
    <head>
        <title>gestoría D&amp;D</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <section id="main">
            <header class="container-fluid">
                <div class="row">
                    @render('partials._nav')
                </div>
            </header>
            <div class="container">
                @yield('content')
            </div>
            <footer class="container-fluid">
                <div class="row">
                    @render('partials._footer')
                </div>
            </footer>    
        </section>
    </body>
</html>
