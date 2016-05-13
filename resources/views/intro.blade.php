@extends('layouts.master')
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
        <!--Aqui va jumbotron -->
<div class="jumbotron">
    <h3 id="anim">SEE OUR INTRODUCTION VIDEO</h3>
</div>

<!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->
<div class="row">
    <section class="videoPrincipal  col-md-6">
        <div class="flex-video widescreen" align="center" style="margin: 0 auto;text-align:right;">
            <iframe class="embed-responsive-item" width="540" height="380"
                    src="http://www.youtube.com/embed/iBKFsUtivQY"></iframe>
        </div>
    </section>
    <!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->
    <section class="videoPrincipal  col-md-6">
        <h1 align="center" id="oSolo">Or just...</h1>
        <a href="{{URL:to('/tutorial')}}" class="btn btn-default" id="botonInicio">START</a>
    </section>


</div>


@endsection
