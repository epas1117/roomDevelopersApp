@extends('layouts.master')
@section('content')

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-search">
                    @foreach($videos as $video)
                        <h1>
                            {{$video->titulo}}
                        </h1>
                        <h4>
                            {{$video->descripcion}}
                        </h4>
                    @endforeach
                </li>
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
                <div class="row">
                    <div class="col-xs-12" align="center ">
                        {!!$videos->render()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection