<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>roomDevelopers</title>

    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')!!}
    {!!Html::style('css/estilosrd.css')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Alegreya+Sans')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Raleway')!!}

</head>
<body>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1757216561229850',
            xfbml      : true,
            version    : 'v2.6'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<header>
    <nav class="navbar   navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse"
                        data-target="#navegacion-rd">
                    <span class="sr-only">Desplegar / Ocultar Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{URL::to('/tutorial')}}" class="navbar-brand">
                    <img src="{{asset("images/rd.png")}}" id="modificarLogo"/>
                </a>

                <a href="{{URL::to('/tutorial')}}" class="navbar-brand"></a>

            </div>
            <!--Inicia menu-->
            <div class="collapse navbar-collapse" id="navegacion-rd">
                <ul class="nav navbar-nav pull-right">
                    @if(!Auth::check())
                        <li><a href="#" data-toggle="modal" data-target="#signUpModal">Sign up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#logInModal">Log in</a></li>
                      @else
                        <li><a href="{{URL::to('usuario/perfil')}}">{{Auth::user()->name}}</a></li>
                        <li>{{Auth::user()->name}}</li>

                    @endif
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
{!!Html::script('js/scriptsrd.js')!!}
@include('usuario.signUpModal')
@include('usuario.logInModal')
@show
</body>
</html>
