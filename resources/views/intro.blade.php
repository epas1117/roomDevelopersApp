@extends('layouts.master')
@section('content')

<!--Aqui va jumbotron -->
<div class="jumbotron" >
<h3 id="anim">SEE OUR INTRODUCTION VIDEO</h3>
</div>
<!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->
<div class="row">
    <section class="videoPrincipal  col-md-6" >
        <div class="span8">
            <div class="flex-video widescreen" style="margin: 0 auto;text-align:right;">
                <iframe class="embed-responsive-item" width="540" height="380" src="http://www.youtube.com/embed/iBKFsUtivQY"></iframe>
            </div>
        </div>
    </section>

    <!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->
    <section class="videoPrincipal  col-md-6">
        <h1>Cris</h1>
    </section>
</div>





@endsection
