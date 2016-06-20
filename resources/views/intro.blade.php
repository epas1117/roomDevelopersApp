@extends('layouts.master')
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
        <!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->
<body id="imagenInicial">
<h1 id="anim" style="padding-top: 60px">Aprende con miles de videos online......</h1>
<div class="row" style="padding-bottom: 100px">
    <section class="videoPrincipal  col-md-6 ">
        <div class="flex-video widescreen" align="center" style="margin: 0 auto;text-align:right;">
            <iframe class="embed-responsive-item" width="540" height="380"
                    src="https://www.youtube.com/embed/KJZYUxPGeYk?modestbranding=1&fs=1&v=p4qME64SkxM&fs=1&showinfo=0"
                    frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
    <section class="videoPrincipal  col-md-6">
        <a href="{{URL::to('/tutorial')}}" class="btn btn-default" id="botonInicio">Entrar</a>
    </section>
</div>
<footer>
    <nav class="navbar navbar-bottom">
        <div class="container">
            <div class="row">
                <div id="navbarc" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Principal</a></li>
                        <li><a href="#contact" style="color: #ffffff">Acerca de</a></li>
                        <li><a href="#contact" style="color: #ffffff">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</footer>
</body>
@endsection
