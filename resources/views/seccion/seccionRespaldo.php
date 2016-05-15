@extends('layouts.master')
@section('content')


<table class="table">
    <thread>
        <th>id</th>
        <th>titulo</th>
        <th>tutorial_id</th>
    </thread>
    @foreach($secciones as $seccion)
    <tbody >
    @foreach($videos as $video)
    @if($seccion->id===$video->seccion_id)
    <td >{{$video->id}} <div id="{{$seccion->id}}" class="collapse">AQUI SE MOSTRARAN DETALLES</div></td>

    <td>{{$video->titulo}}</td>
    <td>{{$video->duracion}}</td>

    @endif
    </tbody>
    @endforeach
</table>
@endsection