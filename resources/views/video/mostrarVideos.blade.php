@extends('layouts.master')
@section('content')
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

                @foreach($videos as $video)
                    <li>
                        <h1 class="titulo">
                            {{$video->titulo}}
                        </h1>
                    </li>
                    <li>
                        <h4>
                            {{$video->descripcion}}
                        </h4>
                    </li>
                    @if(Auth::check())
                        <li>
                            <h1>Completed</h1>
                        </li>
                        <li>
                            {!!Form::open(['route'=> ['videousuario.guardar'],'method'=>'POST'])!!}
                            <div class="checkbox" style="text-indent: 0" align="center">
                                <label style="font-size: 2.5em">
                                    <input name="video_id" type="hidden" value="{{$video->id}}">
                                    @if(Auth::user()->videos->contains($video->id))
                                        <input type="checkbox" name="check" value="1" onClick="submit();" checked>
                                    @else
                                        <input type="checkbox" name="check" value="0" onClick="submit();">
                                    @endif
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>

                                </label>
                            </div>
                            {!!Form::close()!!}
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-6">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        <a href="{{URL::to('tutorial/'.$tutorial_id)}}" class="btn btn-primary btn-md">
                            GO BACK!!!
                        </a>
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