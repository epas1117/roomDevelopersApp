@extends('layouts.master')
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
        <!--Aqui va jumbotron -->


<!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->

<div class="box-shadow--3dp" >
    <div class="jumbotron">
        <h3 id="anim">SEE OUR INTRODUCTION VIDEO</h3>
    </div>

     <div class="row">
             <section class="videoPrincipal  col-md-6 ">

                 <div class="flex-video widescreen" align="center" style="margin: 0 auto;text-align:right;" >

                     <iframe class="embed-responsive-item" width="540" height="380" src="https://www.youtube.com/embed/KJZYUxPGeYk?modestbranding=1&fs=1&v=p4qME64SkxM&fs=1&showinfo=0"
                             frameborder="0" allowfullscreen></iframe>
                 </div>
             </section>

         <section class="videoPrincipal  col-md-6">
             <h1 align="center" id="oSolo">OR JUST...</h1>
             <a href="{{URL::to('/tutorial')}}" class="btn btn-default" id="botonInicio">START</a>
         </section>


     </div>

</div>


@endsection
