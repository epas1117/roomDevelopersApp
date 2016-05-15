@extends('layouts.master')
@section('content')

        <!-- Se crea un cntenedor para la fato y nombre  del video tutoriales en un boton-->
    <div class="container-fluid" id="contenedorPerfil" >
        <div class="row">
            <div class="col-sm-12"align="center">
                <img src="https://yt3.ggpht.com/-SN1RQ4kN5bM/AAAAAAAAAAI/AAAAAAAAAAA/T39gSKk4e2g/s88-c-k-no-rj-c0xffffff/photo.jpg"
                     id="nttLogo"  class="img-circle" >
                <h3 align="center">{{Auth::user()->name}} </h3>
            </div>
        </div>
    </div>
    <!-- Se crea parael progreso de video tutoriales en un boton-->
<div class="container-fluid" id="contenedorVer">
    <div class="row">


        <div class="col-xs-12" align="center">
            <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#videosCompletados">Completed Tutorials</button>
            <div id="videosCompletados" class="collapse">
                @foreach($tutoriales as $tutorialCompletado)
                <div class="row">

                    <div class="col-xs-4" align="center">
                        <h5>{{$tutorialCompletado->titulo}}</h5>
                    </div>




                    <div class="col-xs-4" align="center">
                        <h4  id="NegrillasPalabras">Progress </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <span class="sr-only">70% Complete</span></div>
                        </div>
                    </div>



                    <div class="col-xs-4" align="center">
                        <h4  id="NegrillasPalabras">Completed </h4>
                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-ok"></span> Ok
                        </a>
                    </div>

                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>



@endsection