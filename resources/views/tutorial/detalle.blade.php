@extends('layouts.master')
@section('content')
        <!------------------>
<!------------imagencentral------>


<div class="row ">
    <div class="col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-sm-4 col-md-4 col-lg-4 ">

        <div class="thumbnail">
            <a href="{{URL::to('tutorial/'.$tutorial->id)}}"><img
                        src="{{asset("images/".$tutorial->imagen)}}"
                        alt="" class="img-thumbnail img-responsive"
                        style="width: 200px;height: 150px"></a>
            <div class="caption">

                <h3>{{$tutorial->descripcion}}</h3>
                <p>{{$tutorial->autor}}</p>
            </div>
        </div>

    </div>
</div>
<!------------imagencentral------>


<div id="accordion" role="tablist" aria-multiselectable="true">
    <?php
    $cont = 1
    ?>

    @foreach($tutorial->secciones as $seccion)
        <div class="panel panel-default ">

            <div class="panel-heading" role="tab" id="heading{{$seccion->id}}">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$seccion->id}}"
                       aria-expanded="true" aria-controls="collapse{{$seccion->id}}">
                        {{$seccion->titulo}}
                    </a>
                </h4>

            </div>


            <div id="collapse{{$seccion->id}}" class="panel-collapse collapse table-responsive" role="tabpanel"
                 aria-labelledby="heading{{$seccion->id}}">
                <!---------------->
                <table class="table table-hover">
                    <tbody>

                    @foreach($seccion->videos as $video)
                        <?php $checked = "" ?>

                        <tr>
                            <?php $validacion = "" ?>
                            @if(Auth::check())
                                @foreach(Auth::user()->videos as $vid)
                                    <?php $validacion = "" ?>
                                    <?php $checked = "" ?>
                                    @if($vid->id===$video->id)
                                        <?php $validacion = "success" ?>
                                        <?php $checked = "checked" ?>

                                        @break
                                    @else
                                        <?php $validacion = "" ?>
                                        <?php $checked = "disabled" ?>

                                    @endif
                                @endforeach
                            @endif

                            <td class="{{$validacion}}">
                                <div class="checkbox disabled">
                                    <label style="font-size: 1.5em">
                                        <input type="checkbox" value="" {{$checked}}>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>

                                    </label>
                                </div>
                            </td>
                            <td class="{{$validacion}}"> {!!link_to_action('VideoController@videosPorTutorial', $title = $video->titulo, $parameters = array("tutorial_id"=>$seccion->tutorial_id,"page"=>$cont), $attributes = [])!!}</td>
                            <td class="{{$validacion}}"><p>{{$video->duracion}} Minutos</p></td>
                        </tr>
                        <?php
                        $cont++
                        ?>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    @endforeach
</div>
<!------------------>


@endsection