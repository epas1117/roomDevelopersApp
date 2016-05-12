@extends('layouts.master')
@section('content')



    <!------------------>
    <div id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            @foreach($secciones as $seccion)
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{$seccion->titulo}}
                    </a>
                </h4>

            </div>


            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <!---------------->
                @foreach($videos as $video)
                    @if($seccion->id===$video->seccion_id)
    <p>  {{$video->id}} </p>

       <p> {{$video->titulo}}</p>
        <p>{{$video->duracion}}</p>

                <!---------------->
                    @endif
                @endforeach
            </div>

        </div>

        @endforeach
    </div>
    <!------------------>


@endsection