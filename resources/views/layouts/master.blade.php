<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>roomDevelopers | Main</title>

    {!!Html::style('css/bootstrap.css')!!}

    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/estilosrd.css')!!}

</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse"
                        data-target="#navegacion-rd">
                    <span class="sr-only">Desplegar / Ocultar Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">roomDevelopers</a>
            </div>
            <!--Inicia menu-->
            <div class="collapse navbar-collapse" id="navegacion-rd">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#">Log in</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="main container-fluid">
    @yield('content')
</section>


{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}

@show
</body>
</html>
