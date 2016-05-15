@extends('layouts.master')
@section('content')
    <div id="wrapper">
        <div id="sidebar-wrapper" align="center">
            <ul class="sidebar-nav">

                @foreach($videos as $video)
                    <li>
                        <h1>
                            {{$video->titulo}}
                        </h1>
                    </li>
                    <li>
                        <h4>
                            {{$video->descripcion}}
                        </h4>
                    </li>
                    <li>
                        {!!Form::open(['route'=> ['videousuario.guardar'],'method'=>'POST'])!!}
                        <div class="checkbox">
                            <label style="font-size: 1em">
                                <input name="video_id" type="hidden" value="{{$video->id}}">
                                @if(Auth::user()->videos->contains($video->id))
                                    <input type="checkbox" name="check" value="1" onClick="submit();" checked>
                                @else
                                    <input type="checkbox" name="check" value="0" onClick="submit();">
                                @endif
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                Completed
                            </label>
                        </div>
                        {!!Form::close()!!}
                    </li>
                @endforeach

            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>

                </div>
                <div class="row">
                    <div class=" col-xs-12" align="center">
                        {!!$videos->render()!!}
                    </div>
                </div>
                @foreach($videos as $video)
                    <div class="row">
                        <section class="embed-responsive-item col-xs-12">
                            <div class="flex-video widescreen" align="center">
                                <iframe class="embed-responsive-item" width="650" height="500" src="{{$video->link}}"
                                ></iframe>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection