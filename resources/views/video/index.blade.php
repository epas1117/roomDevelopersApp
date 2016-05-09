@extends('layouts.master')
@section('content')

    <h1>hola desde videos</h1>

    @foreach($videos as $video)

        <h1>{{$video->titulo}}</h1>

    @endforeach

    <div class="row">
        <section class="videoPrincipal  col-md-9" >
            <div class="span8">
                <div class="flex-video widescreen" style="margin: 0 auto;text-align:right;">
                    <iframe class="embed-responsive-item" width="540" height="380" src="https://www.youtube.com/embed/nug1pMke-y4"></iframe>
                </div>
            </div>
    </section>

       <nav>
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>


        <!--Container ayuda a centrar todas las cosas, Carga Video columna de 6 -->
        <section class="videoPrincipal  col-md-3">
            <h1>Boton</h1>
        </section>
    </div>
@endsection
