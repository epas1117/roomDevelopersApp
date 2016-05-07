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
        <td >{{$seccion->id}} </td>
        <div id="{{$seccion->id}}" class="collapse">AQUI SE MOSTRARAN DETALLES</div>
        <td>{{$seccion->titulo}}</td>
        <td>{{$seccion->tutorial_id}}</td>

        <td>
            <button href="#{{$seccion->id}}" data-toggle="collapse" class="btn-primary">Expandir</button>

        </td>
        </tbody>
    @endforeach
</table>
@endsection