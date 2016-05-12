@extends('layouts.master')
@section('content')



        <!------------------>
<div id="accordion" role="tablist" aria-multiselectable="true" >
    @foreach($tutorial->secciones as $seccion)
        <div class="panel panel-default ">

            <div class="panel-heading" role="tab" id="heading{{$seccion->id}}">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$seccion->id}}" aria-expanded="true" aria-controls="collapse{{$seccion->id}}">
                        {{$seccion->titulo}}
                    </a>
                </h4>

            </div>


            <div id="collapse{{$seccion->id}}" class="panel-collapse collapse table-responsive" role="tabpanel" aria-labelledby="heading{{$seccion->id}}">
                <!---------------->
                <table class="table ">
                    <tbody>
                    @foreach($seccion->videos as $video)
                        <tr>

                            <td><a href="{{$video->link}}"><p> {{$video->titulo}}</p></a></td>
                            <td>   <p>{{$video->duracion}} Minutos</p></td>

                            <!---------------->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    @endforeach
</div>
<!------------------>


@endsection