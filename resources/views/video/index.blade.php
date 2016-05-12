@extends('layouts.master')
@section('content')

    @foreach($videos as $video)


    <div class="row ">
        <section class="col-md-12">

            <div class="flex-video widescreen">
                <h1>
                    {{$video->titulo}}

                </h1>
            </div>
        </section>
    </div>

    <div class="row">

        <section class="col-md-12">

                <div class="flex-video widescreen" align="center">
                    <iframe class="embed-responsive-item" width="1000" height="600" src="{{$video->link}}"
                    ></iframe>
                </div>

    </section>
        <!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->
    </div>

    <div class="row ">
        <section class="col-md-12">

            <div class="flex-video widescreen" align="center">
                <h2 >
                    {{$video->descripcion}}
                </h2>

            </div>
        </section>
    </div>

    @endforeach
<div  align="center">
    {!!$videos->render()!!}
</div>





@endsection