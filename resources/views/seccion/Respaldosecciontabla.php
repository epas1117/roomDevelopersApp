@extends('layouts.master')
@section('content')



<!------------------>
<div id="accordion" role="tablist" aria-multiselectable="true" >

    <div class="panel panel-default ">
        @foreach($secciones as $seccion)
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{$seccion->titulo}}
                </a>
            </h4>

        </div>


        <div id="collapseOne" class="panel-collapse collapse in table-responsive" role="tabpanel" aria-labelledby="headingOne">
            <!---------------->
            <table class="table ">
                <tbody>
                @foreach($seccion->videos as $video)
                <tr>

                    <td><p> {{$video->titulo}}</p><span>     </span></td>
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