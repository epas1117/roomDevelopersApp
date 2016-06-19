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
                    <?php $tiempo = 0 ?>
                    @if(Auth::check())
                        @if(Auth::user()->videos->contains($video->id))
                            {{ $tiempo = Auth::user()->videos->find($video->id)->pivot->tiempo }}
                        @endif
                        <li>
                            <h1>Completed</h1>
                        </li>
                        <li>
                            <div class="checkbox" style="text-indent: 0" align="center">
                                <label style="font-size: 2.5em">
                                    <input name="video_id" type="hidden" value="{{$video->id}}">
                                    @if(Auth::user()->videos->contains($video->id))
                                        @if(Auth::user()->videos->find($video->id)->pivot->completado)
                                            <input type="checkbox" name="check" value="1" checked disabled>
                                        @else
                                            <input type="checkbox" name="check" value="0" disabled>
                                        @endif
                                    @else
                                        <input type="checkbox" name="check" value="0" disabled>
                                    @endif
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                </label>
                            </div>
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
                                <input type="hidden" id="videoId" value="{{$video->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}"
                                       id="token">
                                <div class="video">
                                    <iframe id="player" allowfullscreen="allowfullscreen"
                                            src="{{'http://www.youtube.com/embed/'.$video->link.'?fs=1&autoplay=1&enablejsapi=1&hl=es&iv_load_policy=3&modestbranding=1&rel=0&showinfo=0&start='.($tiempo-5)}}"
                                            frameborder="0"></iframe>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                var videoId = $('#videoId').val();
                var route = "http://localhost:8000/videousuario/guardar";
                var token = $('#token').val();
                $.ajax({
                    url: route
                    , headers: {
                        'X-CSRF_TOKEN': token
                    }
                    , type: 'POST'
                    , dataType: 'json'
                    , data: {
                        videoId: videoId
                    }
                });
            }
            if (event.data == YT.PlayerState.PAUSED) {
                console.log('pausa');
                var videoId = $("#videoId").val();
                var tiempo = player.getCurrentTime();
                var route = "http://localhost:8000/videousuario/modificar/" + videoId + "";
                var token = $("#token").val();
                $.ajax({
                    url: route
                    , headers: {
                        'X-CSRF-token': token
                    }
                    , type: 'PUT'
                    , dataType: 'json'
                    , data: {
                        videoId: videoId,
                        tiempo: tiempo
                    }
                });
            }
            if (event.data == YT.PlayerState.ENDED) {
                console.log('fin');
                var videoId = $("#videoId").val();
                var route = "http://localhost:8000/videousuario/fin/" + videoId + "";
                var token = $("#token").val();
                $.ajax({
                    url: route
                    , headers: {
                        'X-CSRF-token': token
                    }
                    , type: 'PUT'
                    , dataType: 'json'
                    , data: {
                        videoId: videoId,
                    }
                });
            }
        }
    </script>
@endsection